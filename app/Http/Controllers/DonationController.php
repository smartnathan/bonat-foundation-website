<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class DonationController extends Controller
{
    /**
     * Validate the form, create a pending donation, and return the tx_ref + details
     * for the Flutterwave inline checkout to consume client-side.
     */
    public function prepare(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'donor_name' => ['required', 'string', 'max:100'],
            'donor_email' => ['required', 'email', 'max:150'],
            'donor_phone' => ['nullable', 'string', 'max:20'],
            'amount' => ['required', 'numeric', 'min:100'],
            'programme_type' => ['nullable', 'string', 'max:50'],
            'give_type' => ['required', 'in:one-time,legacy'],
            'frequency' => ['nullable', 'in:monthly,annual'],
        ]);

        $txRef = 'DBF-'.now()->timestamp.'-'.Str::upper(Str::random(6));

        Donation::create([
            'donor_name' => $validated['donor_name'],
            'donor_email' => $validated['donor_email'],
            'donor_phone' => $validated['donor_phone'] ?? null,
            'amount' => $validated['amount'],
            'programme_type' => $validated['programme_type'] ?: null,
            'give_type' => $validated['give_type'],
            'frequency' => $validated['frequency'] ?? null,
            'payment_method' => 'flutterwave',
            'payment_status' => 'pending',
            'payment_reference' => $txRef,
        ]);

        return response()->json([
            'tx_ref' => $txRef,
            'amount' => (float) $validated['amount'],
            'donor_name' => $validated['donor_name'],
            'donor_email' => $validated['donor_email'],
            'donor_phone' => $validated['donor_phone'] ?? '',
            'programme_type' => $validated['programme_type'] ?? '',
        ]);
    }

    /**
     * Flutterwave redirects here after payment. Verify the transaction server-side.
     */
    public function verify(Request $request): RedirectResponse
    {
        $status = $request->query('status');
        $transactionId = $request->query('transaction_id');
        $txRef = $request->query('tx_ref');

        if ($status !== 'successful' || ! $transactionId) {
            return redirect()->route('get-involved.donate')
                ->with('payment_error', 'Payment was cancelled or failed. Please try again.');
        }

        $response = Http::withToken(config('services.flutterwave.secret_key'))
            ->get("https://api.flutterwave.com/v3/transactions/{$transactionId}/verify");

        if (! $response->successful() || $response->json('status') !== 'success') {
            logger()->error('Flutterwave verify failed', ['body' => $response->json()]);

            return redirect()->route('get-involved.donate')
                ->with('payment_error', 'We could not verify your payment. Please contact us if you were charged.');
        }

        $data = $response->json('data');

        $donation = Donation::where('payment_reference', $data['tx_ref'])->first();

        if (! $donation) {
            return redirect()->route('get-involved.donate')
                ->with('payment_error', 'Donation record not found. Please contact us with reference: '.$data['tx_ref']);
        }

        if ((float) $data['amount'] < (float) $donation->amount || $data['currency'] !== 'NGN') {
            $donation->update(['payment_status' => 'mismatch']);

            return redirect()->route('get-involved.donate')
                ->with('payment_error', 'Payment amount mismatch. Please contact us with reference: '.$data['tx_ref']);
        }

        $donation->update([
            'payment_status' => 'successful',
            'payment_date' => now(),
            'payment_type' => $data['payment_type'] ?? null,
        ]);

        return redirect()->route('get-involved.donate')
            ->with('payment_success', 'Thank you, '.$donation->donor_name.'! Your donation of ₦'.number_format((float) $donation->amount, 2).' has been confirmed. Reference: '.$data['tx_ref']);
    }
}
