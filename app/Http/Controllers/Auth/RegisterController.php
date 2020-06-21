<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function registerStudent(Request $request)
    {
        $student = new Student();
        $student->username = $request->username;
        $student->password = Hash::make($request->password);
        $this->loginValidator($request, 'student');

        return $this->redirectIfStudentCreated($student, $request);
    }

    protected function loginValidator(Request $request, $loginGuard)
    {
        $rules = [
            'username' => 'required|max:100|unique:students',
            'password' => 'required|string|max:255|confirmed'
        ];
        $request->validate($rules);
    }

    protected function redirectIfStudentCreated($student, $request)
    {
        if ($student->save()) {
            $credentials = ['username' => $request->username, 'password' => $request->password];
            Auth::guard('student')->attempt($credentials);

            return redirect(route('student.dashboard'));
        }
    }
}
