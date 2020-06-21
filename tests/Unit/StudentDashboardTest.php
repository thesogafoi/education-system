<?php

namespace Tests\Unit;

use App\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase as TestsTestCase;

class StudentDashboardTest extends TestsTestCase
{
    use RefreshDatabase;

    /** @test */
    public function if_student_was_not_login_redirect_to_login_page()
    {
        $student = create(Student::class);
        $this->get(route('student.dashboard'))->assertRedirect('/login');
        $this->signInStudent($student);
        $this->assertTrue(auth()->guard('student')->check());
        $this->get(route('student.dashboard'))->assertStatus(200);
    }

    /** @test */
    public function a_student_just_can_see_form_data_when_he_or_she_didnot_submit_before()
    {
        $primaryStudent = create(Student::class);
        $secondaryStudent = create(Student::class);
        $this->get('/dashboard')->assertRedirect('/login');
        $this->actingAs($primaryStudent, 'student');

        $response = $this->get('/dashboard')->assertStatus(200);
        $response->assertSee('شماره شناسنامه:');
        $primaryStudent->studentSubmittedForm();
        $secondResponse = $this->get('/dashboard');
        $secondResponse->assertDontSee('شماره شناسنامه:');
    }
}
