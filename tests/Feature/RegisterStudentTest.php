<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterStudentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_student_can_created_by_register_controller_and_after_that_login()
    {
        $registerData = [
            'username' => 'thesogafoi',
            'password' => '021051',
            'password_confirmation' => '021051',
        ];
        $response = $this->post('register/student', $registerData);
        $response->assertStatus(302)->assertRedirect(route('student.dashboard'));
        $this->assertTrue(auth('student')->check());
        $this->assertDatabaseHas('students', array_slice($registerData, 0, 1));
    }
}
