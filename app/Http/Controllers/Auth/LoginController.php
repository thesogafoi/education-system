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
        $this->loginValidator($loginGuard);
        if (Auth::guard("{$loginGuard}")->attempt($credentials)) {
            return $this->redirectRules($loginGuard);
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

    protected function redirectRules($loginGuard)
    {
        if ($loginGuard == 'teacher') {
            return redirect(route('teacher.dashboard'));
        } elseif ($loginGuard == 'student') {
            return redirect(route('student.dashboard'));
        }
    }

    protected function loginValidator($loginGuard, Request $request)
    {
        $rules = [
            'username' => "required|exists:{$loginGuard}s|max:100",
            'password' => 'required|string|max:255'
        ];
        $request->validate($rules);
    }
}
