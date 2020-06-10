<?php

namespace Tests\Feature;

use App\Teacher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class TeacherLoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_teacher_can_sign_in_with_username_and_password()
    {
        // create teacher with specific data
        $teacher = createTeacherManually();
        // save needed data
        $teacherDataForLogin = [
            'username' => $teacher->username,
            'password' => '021051'
        ];
        // send it to login page as post request for attempt t login
        $response = $this->post('/login/teacher', $teacherDataForLogin);
        dd($response);
        // assert we have not error on there
        $response->assertStatus(302);
        // we should get true in login
        $response->assertRedirect(route('teacher.dashboard'));
    }

    /** @test */
    public function a_teacher_can_logout_with_specific_url()
    {
        $this->signInTeacher();
        $response = $this->post('/logout/teacher');
        $this->assertFalse(Auth::guard('teacher')->check());
        $response->assertRedirect(route('home'));
    }

    /** @test */
    public function a_teacher_can_see_login_page_if_he_or_she_is_a_guest()
    {
        $this->signInTeacher();
        $response = $this->get('login');
        $response->assertRedirect(route('teacher.dashboard'));
        $response->assertSessionHas('message');
        $this->post('logout/teacher');
        $secondResponse = $this->get('login');
        $secondResponse->assertStatus(200);
    }

    /** @test */
    public function a_teacher_can_logout_when_he_or_she_was_login()
    {
        $response = $this->post('logout/teacher');
        $response->assertStatus(403);
        $this->signInTeacher();
        $response = $this->post('logout/teacher');
        $response->assertRedirect(route('home'));
        $this->assertFalse(Auth::guard('teacher')->check());
    }

    /** @test */
    public function a_teacher_rejected_when_he_or_she_wants_login_as_student()
    {
        $teacher = $this->signInTeacher();
        $anStudent = createStudentManually();
        $studentDataForLogin = [
            'username' => $anStudent->username,
            'password' => '021051'
        ];
        $response = $this->post('login/student', $studentDataForLogin);
        $response->assertRedirect(route('teacher.dashboard'));
    }
}
