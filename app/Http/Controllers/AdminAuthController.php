<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    function login(){
        return view('auth.admin.login');
    }
    
}
