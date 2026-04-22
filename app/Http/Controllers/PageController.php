<?php

namespace App\Http\Controllers;

use App\Models\Condolence;
use Illuminate\View\View;

class PageController extends Controller
{
    public function legacy(): View
    {
        $condolences = Condolence::where('is_approved', true)
            ->latest()
            ->get();

        return view('pages.legacy', compact('condolences'));
    }

    public function home(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about.index');
    }

    public function founder(): View
    {
        return view('pages.about.founder');
    }

    public function programs(): View
    {
        return view('pages.programs.index');
    }

    public function widows(): View
    {
        return view('pages.programs.widows');
    }

    public function orphans(): View
    {
        return view('pages.programs.orphans');
    }

    public function elderly(): View
    {
        return view('pages.programs.elderly');
    }

    public function missions(): View
    {
        return view('pages.programs.missions');
    }

    public function newConverts(): View
    {
        return view('pages.programs.new-converts');
    }

    public function impact(): View
    {
        return view('pages.impact');
    }

    public function getInvolved(): View
    {
        return view('pages.get-involved.index');
    }

    public function donate(): View
    {
        return view('pages.get-involved.donate');
    }

    public function volunteer(): View
    {
        return view('pages.get-involved.volunteer');
    }

    public function corporate(): View
    {
        return view('pages.get-involved.corporate');
    }

    public function faith(): View
    {
        return view('pages.get-involved.faith');
    }

    public function media(): View
    {
        return view('pages.media');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }
}
