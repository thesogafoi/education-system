<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Staff;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function showResetPasswordFormForStudent()
    {
        return view('front.reset-password-student-form');
    }

    public function showResetPasswordFormForStaff()
    {
        return view('front.reset-password-staff-form');
    }

    public function sendMailToUsers(Request $request, $resetPasswordGuard)
    {
        $this->validator($request, $resetPasswordGuard);
        $classname = 'App\\' . ucfirst($resetPasswordGuard);
        $model = $classname::whereEmail($request->email)->first();
        $model->sendTokenToUser();

        return back()->with('seccessSendEmail', '1');
    }

    public function resetPasswordPage($token)
    {
        if ($this->isTokenExistsInUsersDatabase($token)) {
            return abort(404, 'the token doesnot found');
        }

        $user = $this->ifTokenExistsReturnTrueModel($token);

        return view('front.reset-password-page', compact('user'));
    }

    public function resetPassword(Request $request, $token)
    {
        if ($token === '' || $token === null || $this->isTokenExistsInUsersDatabase($token)) {
            return abort(404, 'the token doesnot found');
        }
        $user = $this->ifTokenExistsReturnTrueModel($token);

        $this->validator($request);
        $user->password = Hash::make($request->password);
        $user->save();
    }

    public function validator($request, $resetPasswordGuard = null)
    {
        if ($request->has('email')) {
            $rules = ['email' => "required|exists:{$resetPasswordGuard}s|email"];
        } elseif ($request->has('password')) {
            $rules = ['password' => 'required|string|max:255|confirmed'];
        }
        $request->validate($rules);
    }

    // helper function
    protected function isTokenExistsInUsersDatabase($token = null)
    {
        return Student::where('reset_password_token', $token)->get()->isEmpty()
        && Staff::where('reset_password_token', $token)->get()->isEmpty();
    }

    protected function ifTokenExistsReturnTrueModel($token)
    {
        $user = '';
        if (Staff::where('reset_password_token', $token)->get()->isEmpty()) {
            $user = Student::where('reset_password_token', $token)->get()->first();
        } elseif (Student::where('reset_password_token', $token)->get()->isEmpty()) {
            $user = Staff::where('reset_password_token', $token)->get()->first();
        } else {
            return abort(500, 'some bad things happened please try again');
        }

        return $user;
    }
}
