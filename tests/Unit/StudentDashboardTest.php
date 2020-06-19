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
        // logged in student just can see from when his or her status will be 0
        // logged in student just can submit own form if not unauthorize status will be fire
        $primaryStudent = create(Student::class);
        $secondaryStudent = create(Student::class);
        $this->get('/dashboard')->assertRedirect('/login');
        $this->actingAs($primaryStudent, 'student');
        $this->get('/dashboard')->assertStatus(200);
    }
}
