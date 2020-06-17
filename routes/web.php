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

// Reset password controller
Route::post('/reset/password/{resetPasswordGuard}', 'Auth\ResetPasswordController@sendMailToUsers')->name('reset.password.student.form')->middleware('logout');
Route::put('/page/reset/password/{token}', 'Auth\ResetPasswordController@resetPassword')->name('reset.password')->middleware('logout');
Route::get('/page/reset/password/{token}', 'Auth\ResetPasswordController@resetPasswordPage')->name('reset.password.page')->middleware('logout');

Route::get('/reset/password/student', 'Auth\ResetPasswordController@showResetPasswordFormForStudent')->name('reset.password.student.form')->middleware('logout');
Route::get('/reset/password/staff', 'Auth\ResetPasswordController@showResetPasswordFormForStaff')->name('reset.password.staff.form')->middleware('logout');
// Student Dashboard Routes
Route::get('/dashboard', 'StudentDashboardController@index')->name('student.dashboard');

// Staff Dashboard Routes
Route::get('/admin/dashboard', 'StaffDashboardController@index')->name('staff.dashboard');
