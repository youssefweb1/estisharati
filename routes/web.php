<?php

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/landing', [HomeController::class, 'landing'])->name('landing');
Route::get('/home', [HomeController::class, 'home'])->name('home');

// Apply 'guest' middleware to registration and login routes
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
    
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('auth/{provider}', [SocialLoginController::class, 'redirectToProvider'])->name('auth.social');
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'handleProviderCallback']);

// Password Reset Routes
Route::get('password/reset', [ForgotPasswordController::class, 'showForgetEmail'])->name('password.reset');
Route::post('/password/email', [ForgotPasswordController::class, 'sendOtp'])->name('password.email');
Route::get('/password/otp', [ForgotPasswordController::class, 'showOtpForm'])->name('password.otp');   

Route::post('/password/verify-otp', [ForgotPasswordController::class, 'verifyOtp'])->name('password.verify.otp');

Route::get('/password/reset/{email}', [ForgotPasswordController::class, 'showResetForm'])->name('password.form');
Route::post('/password/update', [ForgotPasswordController::class, 'updatePassword'])->name('password.update');
