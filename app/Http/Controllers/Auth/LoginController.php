<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Staff;
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
        $this->loginValidator($request, $loginGuard);
        // check in login guard (student or staff ) have we specific username or password
        if (Auth::guard("{$loginGuard}")->attempt($credentials, $request->filled('remember'))) {
            return $this->redirectRules($loginGuard);
        }

        return back()->withErrors('نام کاربری یا رمز وارد شده صحیح نمیباشد');
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
        if ($loginGuard == 'staff') {
            return redirect(route('staff.dashboard'));
        } elseif ($loginGuard == 'student') {
            return redirect(route('student.dashboard'));
        }
    }

    protected function loginValidator(Request $request, $loginGuard)
    {
        $rules = [
            'username' => "required|exists:{$loginGuard}s|max:100",
            'password' => 'required|string|max:255'
        ];
        $request->validate($rules);
    }
}
