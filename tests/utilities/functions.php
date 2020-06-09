<?php

use App\Student;
use App\Teacher;
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

function createTeacherManually()
{
    $teacher = new Teacher();
    $teacher->username = 'thesogafoi';
    $teacher->email = 'example@gmail.com';
    $teacher->password = Hash::make('021051');
    $teacher->firstname = 'alireza';
    $teacher->lastname = 'ghoreishi';
    $teacher->save();

    return Teacher::whereUsername($teacher->username)->first();
}
