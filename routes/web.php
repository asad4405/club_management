<?php

use App\Http\Controllers\CostController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::post('/contact/post', [FrontendController::class, 'contact_post'])->name('contact.post');


// dashboard //
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// members //
Route::resource('/member', MemberController::class);
// members invoice //
Route::get('/download/member/invoice/{id}',[MemberController::class, 'download_member_invoice'])->name('download.member.invoice');

// donations //
Route::resource('/donation', DonationController::class);
// donation invoice //
Route::get('/download/donation/invoice/{id}', [DonationController::class, 'download_donation_invoice'])->name('download.donation_invoice');

// costs //
Route::resource('/cost',CostController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
