<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['setLocale', 'guest']], function(){
    Route::get('/', function () {
        return redirect()->route('home');
    })->name('welcome');
    Route::get('/home', function () {
        return view('index');
    })->name('home');
    Route::get('/vision_and_mission', function () {
        return view('vision_and_mission');
    })->name('vision_and_mission');
    Route::get('/organizational_chart', function () {
        return view('organizational_chart');
    })->name('organizational_chart');
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    Route::get('/public', function () {
        return view('public');
    })->name('public');
    Route::get('/calendar', function () {
        return view('calendar');
    })->name('calendar');
    Route::get('/appointment', function () {
        return view('appointment');
    })->name('appointment');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
});
    
    Route::get('/lang/{locale}', function($locale){
        session(['locale' => $locale]);
        return redirect()->back();
    })->name('locale');