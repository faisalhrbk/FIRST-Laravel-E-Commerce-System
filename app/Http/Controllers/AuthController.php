<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class AuthController extends Controller
{
    function login(Request $request, $role)
    {
        return view('auth.login', compact('role'));
    }
    function loginPost(Request $request, $role)
    {
        $cred = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        if (!$cred) {
            return redirect()->back();
        } else {
            return view("{$role}.dashboard");
        }
        return view('auth.login', compact('role'));
    }
    function register($role)
    {
        return view('auth.register', compact('role'));
    }

    function registerPost(Request $request, $role)
    {
        $cred = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        if (!$cred) {
            return redirect()->back();
        } else {
            return view("{$role}.dashboard");
        }
        return view('auth.login', compact('role'));
    }
}
