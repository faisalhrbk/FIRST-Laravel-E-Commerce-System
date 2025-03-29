<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorAuthController extends Controller
{

    function login()
    {

        return view('auth.vendor.login');
    }
    function loginPost()
    {
        return 'ok';
        return view('auth.vendor.login');
    }
    function register()
    {
        return view('auth.vendor.register');
    }
    function registerPost()
    {
        return ' return register post';
    }
}
