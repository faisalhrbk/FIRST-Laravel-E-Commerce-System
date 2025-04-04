<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\Admin;
use App\Models\Vendor;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'password' => 'required|min:3'
        ]);

        if (!Auth::guard($role)->attempt($cred)) {
            return redirect()->back()->with('error', 'invalid cred email, or password');
        } else {
            return view("{$role}.dashboard");
        }
    }
    function register($role)
    {
        return view('auth.register', compact('role'));
    }

    public function registerPost(Request $request, $role)
    {
        // Validate input
        $cred = $request->validate([
            'name' => 'required|string',
            'email' => [
                'required',
                'email',
                function ($attribute, $value, $fail) use ($role) {
                    // Check email uniqueness in different models
                    if (
                        ($role === 'vendor' && Vendor::where('email', $value)->exists()) ||
                        ($role === 'customer' && Customer::where('email', $value)->exists()) ||
                        ($role === 'admin' && Admin::where('email', $value)->exists())
                    ) {
                        $fail('The email has already been taken for this role.');
                    }
                },
            ],
            'password' => 'required|min:3'
        ]);


        $cred['password'] = bcrypt($cred['password']);

        if ($role === 'vendor') {
            $user = Vendor::create($cred);
        } elseif ($role === 'customer') {
            $user = Customer::create($cred);
        } elseif ($role === 'admin') {
            $user = Admin::create($cred);
        } else {
            return back()->with(['error' => 'Invalid role specified.']);
        }
        return redirect()->route('login', ['role' => $role])->with('success', 'Registration successful!');
    }
}
