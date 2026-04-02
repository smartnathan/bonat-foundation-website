<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DonationReceiptController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'donor_name' => ['required', 'string', 'max:100'],
            'amount' => ['required', 'numeric', 'min:1'],
            'receipt' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf,webp', 'max:5120'],
        ]);

        $path = $request->file('receipt')->store('donation-receipts', 'local');

        Donation::create([
            'donor_name' => $validated['donor_name'],
            'amount' => $validated['amount'],
            'give_type' => 'bank-transfer',
            'payment_method' => 'bank-transfer',
            'payment_status' => 'pending',
            'receipt_path' => $path,
        ]);

        return back()->with('receipt_success', 'Thank you! Your receipt has been received. We will confirm your donation shortly.');
    }
}
