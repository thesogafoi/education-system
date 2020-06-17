<?php

use App\Staff;
use App\Student;
use Illuminate\Support\Facades\Hash;

function create($model, $numbers = 1, $customData = [])
{
    $createdModel = factory($model, $numbers)->create($customData);
    if ($numbers === 1) {
        return $model::whereUsername($createdModel->first()->username)->first();
    } else {
        return $createdModel;
    }
}

// Additional functions
function createStudentManually()
{
    $student = new Student();
    $student->username = 'thesogafoi';
    $student->email = 'example@gmail.com';
    $student->password = Hash::make('021051');
    $student->firstname = 'alireza';
    $student->lastname = 'ghoreishi';
    $student->save();

    return Student::whereUsername($student->username)->first();
}

function createStaffManually()
{
    $staff = new Staff();
    $staff->username = 'thesogafoi';
    $staff->email = 'example@gmail.com';
    $staff->password = Hash::make('021051');
    $staff->firstname = 'alireza';
    $staff->lastname = 'ghoreishi';
    $staff->save();

    return Staff::whereUsername($staff->username)->first();
}
