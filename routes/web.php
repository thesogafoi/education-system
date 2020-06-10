<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// HomeController Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Register controller
Route::post('/register/student', 'Auth\RegisterController@registerStudent')->name('register.student');
// login page Routes
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login')->middleware('logout');
Route::post('/login/{loginGuard}', 'Auth\LoginController@login')->middleware('logout');
Route::post('/logout/{loginGuard}', 'Auth\LoginController@logout')->middleware('login');

// Student Dashboard Routes
Route::get('/dashboard', 'StudentDashboardController@index')->name('student.dashboard');

// Teacher Dashboard Routes
Route::get('/admin/dashboard', 'TeacherDashboardController@index')->name('teacher.dashboard');
