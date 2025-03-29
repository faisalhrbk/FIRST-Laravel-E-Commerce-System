<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VendorAuthController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function(){
    return view('welcome');
});
// Customer Auth controller
Route::prefix('customer')->controller(CustomerAuthController::class)->group(function () {
    Route::get('login', 'login')->name('customer.login');
    Route::post('login', 'loginPost')->name('customer.login.post');
    Route::get('register', 'register')->name('customer.register');
    Route::post('register', 'registerPost')->name('customer.register.post');
});
Route::resource('customer', CustomerController::class);

// VENDOR ROUTES
Route::prefix('vendor')->controller(VendorAuthController::class)->group(function () {
    Route::get('login', 'login')->name('vendor.login');
    Route::post('login', 'loginPost')->name('vendor.login.post');
    Route::get('register', 'register')->name('vendor.register');
    Route::post('register', 'registerPost')->name('vendor.register.post');
});
Route::resource('vendor', VendorController::class);

// ADMIN ROUTES
Route::prefix('admin')->controller(AdminAuthController::class)->group(function () {
    Route::get('login', 'login')->name('admin.login');
    Route::post('login', 'loginPost')->name('admin.login.post');
});
Route::resource('admin', AdminController::class);