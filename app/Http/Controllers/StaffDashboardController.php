<?php

namespace App\Http\Controllers;

class StaffDashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }
}
