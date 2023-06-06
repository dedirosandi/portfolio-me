<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    //Login
    //View Login
    public function index()
    {
        return view('auth.login.index');
    }
    // Process Login
    public function authenticate(Request $request)
    {
        $validasiDataRegister = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validasiDataRegister)) {
            $request->session()->regenerate();
            return redirect()->intended('/my-dashboard');
        }
        return back()->with('LoginErrors', 'Login Failed.');
    }
}
