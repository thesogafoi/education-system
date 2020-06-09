<?php

namespace Tests;

use App\Student;
use App\Teacher;
use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function signIn($user = null)
    {
        if ($user === null) {
            $user = create(User::class);
        }
        $this->actingAs($user);

        return $user;
    }

    public function signInTeacher($teacher = null)
    {
        if ($teacher === null) {
            $teacher = create(Teacher::class);
        }
        $this->actingAs($teacher, 'teacher');

        return $teacher;
    }

    public function signInStudent($student = null)
    {
        if ($student === null) {
            $student = create(Student::class);
        }
        $this->actingAs($student, 'student');

        return $student;
    }
}
