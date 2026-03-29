<?php

namespace App\Http\Controllers;

use App\Mail\CondolenceThankYou;
use App\Models\Condolence;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CondolenceController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'affiliation' => ['nullable', 'string', 'in:ECWA Women\'s Fellowship,EMS/Missionary,Student/Alumnus,New Convert,Friend/Family,Other'],
            'email' => ['nullable', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:1000'],
            'photo' => ['nullable', 'image', 'max:5120', 'mimes:jpg,jpeg,png,webp'],
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('condolence-photos', 'public');
        }

        Condolence::create([
            'name' => $validated['name'],
            'affiliation' => $validated['affiliation'] ?? null,
            'email' => $validated['email'] ?? null,
            'message' => $validated['message'],
            'photo_path' => $photoPath,
        ]);

        if (filled($validated['email'] ?? null)) {
            Mail::to($validated['email'])->send(new CondolenceThankYou($validated['name']));
        }

        return back()->with('condolence_success', 'Thank you for your tribute. Your message will appear on the wall after review.');
    }
}
