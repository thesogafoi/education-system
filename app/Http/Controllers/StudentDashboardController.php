<?php

namespace App\Http\Controllers;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $student = auth()->guard('student')->user();
        $studentsData = $student->studentsData()->first();

        return view('front.dashboard', compact(['student', 'studentsData']));
    }
}
