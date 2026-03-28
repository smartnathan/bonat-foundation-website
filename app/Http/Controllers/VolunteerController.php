<?php

namespace App\Http\Controllers;

use App\Models\VolunteerApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'location' => ['required', 'string', 'max:150'],
            'skills' => ['required', 'string', 'max:1000'],
            'pillar' => ['required', 'string', 'in:widows,orphans,elderly,missions,new-converts'],
        ]);

        VolunteerApplication::create($validated);

        return back()->with('volunteer_success', 'Thank you for volunteering! We will contact you soon.');
    }
}
