<?php

namespace App\Http\Controllers;

use App\Models\Condolence;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CondolenceController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['nullable', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:1000'],
        ]);

        Condolence::create($validated);

        return back()->with('condolence_success', 'Thank you for your tribute. Your message will appear after review.');
    }
}
