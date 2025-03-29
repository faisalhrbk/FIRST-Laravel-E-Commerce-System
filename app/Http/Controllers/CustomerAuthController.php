<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerAuthController extends Controller
{
    function login(){
  
        return view('auth.customer.login');
    }
    function loginPost()
    {
        return 'ok';
        return view('auth.customer.login');
    }
    function register(){
        return view('auth.customer.register');
    }
    function registerPost(){
        return ' return register post';
    }
}
