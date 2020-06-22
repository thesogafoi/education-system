<?php

namespace Tests\Unit;

use App\Student;
use App\StudentsData;
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

    /** @test */
    public function when_a_student_created_studens_data_table_must_created_too()
    {
        $student = create(Student::class);
        $studentsData = StudentsData::latest()->first();
        $this->assertInstanceOf(Student::class, $studentsData->student()->first());
        $this->assertInstanceOf(StudentsData::class, $student->studentsData()->first());
    }

    /** @test */
    public function if_student_submit_his_or_her_form_assert_status_be_1()
    {
        $student = create(Student::class);
        $student->studentSubmittedForm();
        $this->assertEquals($student->status, 1);
    }

    /** @test */
    public function un_logged_in_user_cannot_subtit_form()
    {
        $student = create(Student::class);
        $this->actingAs($student);
        $response = $this->put("/dashboard/update/students/data/$student->username/{$student->studentsData()->first()->id}");
        $response->assertStatus(403);
    }

    /** @test */
    public function if_another_user_submit_students_form_data_unauthorized_error_must_be_occured()
    {
        $primaryStudent = create(Student::class);
        $secondaryStudent = create(Student::class);
        $this->actingAs($secondaryStudent);
        $response = $this->put('/dashboard/update/students/data/{}/{$secondaryStudent->studentsData()->first()->id}');
    }

    // **************************************
}
