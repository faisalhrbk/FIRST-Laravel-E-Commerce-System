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
    ->controller(AuthController::class)
    ->group(function () {
        Route::get('login', 'login')->name('{role}.login');
        Route::post('login', 'loginPost')->name('{role}.login.post');
        Route::get('register', 'register')->name('{role}.register');
        Route::post('register', 'registerPost')->name('{role}.register.post');
    });
