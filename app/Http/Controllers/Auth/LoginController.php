<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest:teacher')->except('logout');
    }

    public function login(Request $request, $loginGuard)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::guard("{$loginGuard}")->attempt($credentials)) {
            return true;
        }

        return false;
    }

    public function showLoginForm()
    {
        return view('front.login');
    }

    public function logout()
    {
    }
}
