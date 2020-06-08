<?php

namespace Tests\Feature;

use App\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentTest extends TestCase
{
    use RefreshDatabase;
    // Create Student Test

    /** @test */
    public function a_student_can_created_in_factory()
    {
        $student = create(Student::class, 1)->first();
        $this->assertDatabaseHas('students', [
            'username' => $student->username,
            'firstname' => $student->firstname,
            'email' => $student->email,
            'lastname' => $student->lastname,
            'password' => $student->password
        ]);
    }

    // **************************************
}
