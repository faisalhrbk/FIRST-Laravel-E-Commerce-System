<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VendorController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});
// Resource Controllers
Route::resource('customer', CustomerController::class);
Route::resource('vendor', VendorController::class);
Route::resource('admin', AdminController::class);

//Auth Controller
Route::controller(AuthController::class)->group(function () {
    Route::get('login/{role}', 'login')->name('login.{role}');
    Route::post('login/{role}', 'processLogin')->name('login.process.{role}');

    Route::get('register/{role}', 'register')->name('register.{role}');
    Route::post('register/{role}', 'processRegister')->name('register.process.{role}');
});
