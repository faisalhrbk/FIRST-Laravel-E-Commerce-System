<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    function login()
    {
        return view('auth.admin.login');
    }
    function loginPost(Request $request)
    {

        $cred = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

        if (!Auth::guard('admin')->attempt($cred)) {
            return redirect('/');
        }
        return 'you are now in admin page ill setup this later';
    }
}
