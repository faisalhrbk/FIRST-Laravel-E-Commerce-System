<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorAuthController extends Controller
{

    function login()
    {

        return view('auth.vendor.login');
    }
    function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:2',
        ]);

        if (!Vendor::guard('vendor')->attempt($credentials)) {
            return back()->withErrors(['login' => 'Ghalat email ya password!']);
        }
        return view('auth.vendor.login');
    }
    function register()
    {
        return view('auth.vendor.register');
    }
    function registerPost(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:2'
        ]);
        $credentials['password'] = bcrypt($credentials['password']);
        $bro =   Vendor::create($credentials);


        return 'vendor register success' . $bro;
    }
}
