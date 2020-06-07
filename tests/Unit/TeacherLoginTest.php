<?php

namespace Tests\Feature;

use App\Teacher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class TeacherLoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_teacher_can_sign_in_with_username_and_password()
    {
        // create teacher with specific data
        $teacher = $this->createTeacherManually();
        // save needed data
        $teacherDataForLogin = [
            'username' => $teacher->username,
            'password' => '021051'
        ];
        // send it to login page as post request for attempt t login
        $response = $this->post('/login', $teacherDataForLogin);
        // assert we have not error on there
        $response->assertStatus(200);
        // we should get true in login
        $this->assertTrue((bool) $response->getContent());
    }

    public function createTeacherManually()
    {
        $teacher = new Teacher();
        $teacher->username = 'thesogafoi';
        $teacher->email = 'example@gmail.com';
        $teacher->password = Hash::make('021051');
        $teacher->firstname = 'alireza';
        $teacher->lastname = 'ghoreishi';
        $teacher->save();

        return Teacher::whereUsername($teacher->username)->first();
    }
}
