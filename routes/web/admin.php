<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthUser\UserController;

Route::middleware(['auth', 'setLocale'])->prefix('/admin')->name('admin.')->group(function(){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});