<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
    }

    public function login(Request $request, $loginGuard)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::guard("{$loginGuard}")->attempt($credentials)) {
            if ($loginGuard == 'teacher') {
                return redirect(route('teacher.dashboard'));
            } elseif ($loginGuard == 'student') {
                return redirect(route('student.dashboard'));
            }
        }

        return false;
    }

    public function showLoginForm()
    {
        return view('front.login');
    }

    public function logout($loginGuard)
    {
        Auth::guard("{$loginGuard}")->logout();

        return redirect(route('home'));
    }
}
