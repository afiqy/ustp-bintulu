<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthUser\UserController;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('/reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware(['throttle:6,1'])
        ->name('verification.send');

    Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    //New
    Route::get('/user-profile', [UserController::class, 'index'])->name('user-profile');
    Route::post('/user-profile', [UserController::class, 'saveUserProfile'])->name('user-profile');
    Route::get('/user-management', function(){
        return view('admin.pages.laravel-examples.user-management');
    })->name('user-management');
    Route::get('/tables', function(){
        return view('admin.pages.tables');
    })->name('tables');
    Route::get('/billing', function(){
        return view('admin.pages.billing');
    })->name('billing');
    Route::get('/virtual-reality', function(){
        return view('admin.pages.virtual-reality');
    })->name('virtual-reality');
    Route::get('/rtl', function(){
        return view('admin.pages.rtl');
    })->name('rtl');
    Route::get('/notifications', function(){
        return view('admin.pages.notifications');
    })->name('notifications');
    Route::get('/profile', function(){
        return view('admin.pages.profile');
    })->name('profile');
    Route::get('/static-sign-in', function(){
        return view('admin.pages.static-sign-in');
    })->name('static-sign-in');
    Route::get('/static-sign-up', function(){
        return view('admin.pages.static-sign-up');
    })->name('static-sign-up');
});
