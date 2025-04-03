<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class AuthController extends Controller
{
    function login($role)
    {
        return view('auth.login', compact('role'));
    }
    function loginPost(Request $request)
    {
        return $request;
    }
    function register($role)
    {
        return view('auth.register', compact('role'));
    }

    function registerPost(Request $request)
    {
        return $request;
    }
}

//can i commit
