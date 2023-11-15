<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function register()
    {
        return view('Auth.register');
    }

    public function logout()
    {
        Auth::guard('web')->logout();

        return view('Auth.login');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
