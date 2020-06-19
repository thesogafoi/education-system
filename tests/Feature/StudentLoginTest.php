<?php

namespace Tests\Feature;

use App\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class StudentLoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_student_can_sign_in_with_username_and_password()
    {
        // create Student with specific data
        $student = createStudentManually();
        // save needed data
        $studentDataLogin = [
            'username' => $student->username,
            'password' => '021051'
        ];
        // send it to login page as post request for attempt t login
        $response = $this->post('/login/student', $studentDataLogin);
        // assert we have not error on there
        $response->assertStatus(302);
        // we should get true in login
        $response->assertRedirect(route('student.dashboard'));
    }

    /** @test */
    public function a_student_can_log_out_of_his_or_her_account()
    {
        $this->signInStudent();
        $response = $this->post('/logout/student');
        $this->assertFalse(Auth::guard('student')->check());
        $response->assertRedirect(route('home'));
    }

    /** @test */
    public function a_student_can_see_login_page_if_he_or_she_is_a_guest()
    {
        $this->signInStudent();
        $response = $this->get('login');
        $response->assertRedirect(route('student.dashboard'));
        $response->assertSessionHas('message');
        $this->post('logout/student');
        $secondResponse = $this->get('login');
        $secondResponse->assertStatus(200);
    }

    /** @test */
    public function a_student_can_logout_when_he_or_she_was_login()
    {
        $response = $this->post('logout/student');
        $response->assertStatus(403);
        $this->signInStudent();
        $response = $this->post('logout/student');
        $response->assertRedirect(route('home'));
        $this->assertFalse(Auth::guard('student')->check());
    }
}
