<?php

use App\Http\Controllers\CondolenceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonationReceiptController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Legacy Landing Page — temporary homepage before the funeral
Route::get('/', [PageController::class, 'legacy'])->name('legacy');
Route::post('/condolences', [CondolenceController::class, 'store'])->name('condolences.store');

// Main Website
Route::get('/home', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/about/founder', [PageController::class, 'founder'])->name('about.founder');

Route::prefix('programs')->name('programs.')->group(function () {
    Route::get('/', [PageController::class, 'programs'])->name('index');
    Route::get('/widow-empowerment', [PageController::class, 'widows'])->name('widows');
    Route::get('/orphan-care', [PageController::class, 'orphans'])->name('orphans');
    Route::get('/elderly-care', [PageController::class, 'elderly'])->name('elderly');
    Route::get('/missions-support', [PageController::class, 'missions'])->name('missions');
    Route::get('/new-convert-care', [PageController::class, 'newConverts'])->name('new-converts');
});

Route::get('/impact', [PageController::class, 'impact'])->name('impact');

Route::prefix('get-involved')->name('get-involved.')->group(function () {
    Route::get('/', [PageController::class, 'getInvolved'])->name('index');
    Route::get('/donate', [PageController::class, 'donate'])->name('donate');
    Route::post('/donate/prepare', [DonationController::class, 'prepare'])->name('donate.prepare');
    Route::get('/donate/verify', [DonationController::class, 'verify'])->name('donate.verify');
    Route::post('/donate/receipt', [DonationReceiptController::class, 'store'])->name('donate.receipt.store');
    Route::get('/volunteer', [PageController::class, 'volunteer'])->name('volunteer');
    Route::post('/volunteer', [VolunteerController::class, 'store'])->name('volunteer.store');
    Route::get('/corporate', [PageController::class, 'corporate'])->name('corporate');
    Route::get('/faith', [PageController::class, 'faith'])->name('faith');
});

Route::get('/media', [PageController::class, 'media'])->name('media');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin: serve private donation receipt files
Route::get('/admin/donation-receipt', function () {
    $path = request()->query('path', '');

    if (! $path || ! Storage::disk('local')->exists($path)) {
        abort(404);
    }

    return Storage::disk('local')->response($path);
})->middleware(['auth'])->name('admin.donation.receipt');
