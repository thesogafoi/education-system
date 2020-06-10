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
        if ($student->save()) {
            $credentials = ['username' => $request->username, 'password' => $request->password];
            Auth::guard('student')->attempt($credentials);

            return redirect(route('student.dashboard'));
        }
    }
}
