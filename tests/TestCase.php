<?php

namespace Tests;

use App\Student;
use App\Staff;
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

    public function signInStaff($staff = null)
    {
        if ($staff === null) {
            $staff = create(Staff::class);
        }
        $this->actingAs($staff, 'staff');

        return $staff;
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
