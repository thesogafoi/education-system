<?php

namespace Tests\Unit;

use App\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class StudentLoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function something()
    {
        return;
    }

    /** @test */
    public function a_student_can_sign_in_with_username_and_password()
    {
        // create Student with specific data
        $student = $this->createStudentManually();
        // save needed data
        $studentDataLogin = [
            'username' => $student->username,
            'password' => '021051'
        ];
        // send it to login page as post request for attempt t login
        $response = $this->post('/login/student', $studentDataLogin);
        // assert we have not error on there
        $response->assertStatus(200);
        // we should get true in login
        $this->assertTrue((bool) $response->getContent());
    }

    /** @test */
    public function a_student_can_log_out_of_his_or_her_account()
    {
    }

    /** @test */
    public function a_sudent_can_be_created_by_guest()
    {
    }

    // Additional functions
    public function createStudentManually()
    {
        $student = new Student();
        $student->username = 'thesogafoi';
        $student->email = 'example@gmail.com';
        $student->password = Hash::make('021051');
        $student->firstname = 'alireza';
        $student->lastname = 'ghoreishi';
        $student->save();

        return Student::whereUsername($student->username)->first();
    }
}
