<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerAuthController extends Controller
{
    function login(Request $request){
        return view('auth.customer.login');
    }
    function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('customer')->attempt($credentials)) {
            return 'bro';
            return $request;
            return redirect()->route('customer.login');
        }
        return 'rip';
        // return $request;
        // return view('auth.customer.login');
    }
    function register(Request $request){
        return view('auth.customer.register');
    }
    function registerPost(Request $request){
        return ' return register post';
    }
}
