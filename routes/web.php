<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisteredUserController::class, 'index']);
Route::post('/register', [RegisteredUserController::class, 'create']);

Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login', [SessionController::class, 'create']);

Route::delete('/logout', [SessionController::class, 'destroy']);

// User Controller
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth', 'verified');

// Admin route
Route::middleware(['role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index']);
    Route::get('/products/create', [\App\Http\Controllers\ProductController::class, 'create']);
    Route::get('/products/edit/{product}', [\App\Http\Controllers\ProductController::class, 'edit']);
});
// End Admin route

// Email Verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
