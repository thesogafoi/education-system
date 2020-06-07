<?php

namespace Tests\Feature;

use App\Teacher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TeacherTest extends TestCase
{
    use RefreshDatabase;
    // Create Teacher Test

    /** @test */
    public function a_teacher_can_created_in_factory()
    {
        // this is a comment
        $teacher = create(Teacher::class, 1)->first();
        $this->assertDatabaseHas('teachers', [
            'username' => $teacher->username,
            'firstname' => $teacher->firstname,
            'email' => $teacher->email,
            'lastname' => $teacher->lastname,
            'password' => $teacher->password
        ]);
    }

    // **************************************
}
