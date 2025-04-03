<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('partials.hero');
});

Route::prefix('{role}')->whereIn('role', ['vendor', 'admin', 'customer'])
    ->controller(AuthController::class)->group(function () {
        Route::get('login', 'login')->name('login');
        Route::post('login', 'loginPost')->name('login.post');
        Route::get('register', 'register')->name('register');
        Route::post('register', 'registerPost')->name('register.post');
    });
