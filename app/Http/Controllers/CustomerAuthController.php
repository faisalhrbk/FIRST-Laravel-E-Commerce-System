<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerAuthController extends Controller
{
    function login()
    {
        return view('auth.customer.login');
    }
    function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:2',
        ], [
            'email.required' => 'Email likhna zaroori hai!',
            'email.email' => 'Sahi email format use karo!',
            'password.required' => 'Password likhna zaroori hai!',
            'password.min' => 'Password kam az kam 2 characters ka hona chahiye!',
        ]);
      
        if (!Auth::guard('customer')->attempt($credentials)) {
            return back()->withErrors(['login' => 'Ghalat email ya password!']);
        }
        return 'login success';
    //    else {
    //     return redirect()-route('customer.login')->with('')
    //    }
    }


    function register(Request $request)
    {
        return view('auth.customer.register');
    }
    function registerPost(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string',
           'email' => 'required|email',
           'password' => 'required|min:2'
        ]);
        $credentials['password'] = bcrypt($credentials['password']);
      $bro =   Customer::create($credentials);
      

        return 'customer register success'. $bro;
    }
}
