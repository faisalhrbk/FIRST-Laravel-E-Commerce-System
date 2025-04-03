<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('partials.hero');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('{role}/login', 'login')->name('login');
    Route::post('{role}/login', 'loginPost')->name('role.login.post');
    Route::get('{role}/register', 'register')->name('register');
    Route::post('{role}/register', 'registerPost')->name('role.register.post');
});
