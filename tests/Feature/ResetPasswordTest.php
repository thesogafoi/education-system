<?php

namespace Tests\Unit;

use App\Mail\ResetPasswordMail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Student;
use App\Staff;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ResetPasswordTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function if_a_student_send_requested_for_reset_password_create_reset_password_token()
    {
        $student = create(Student::class);
        $this->post('/reset/password/student', ['email' => $student->email]);

        $this->assertDatabaseHas('students', [
            'reset_password_token' => $student->fresh()->reset_password_token
        ]);
    }

    /** @test */
    public function if_a_staff_send_requested_for_reset_password_create_reset_password_token()
    {
        $staff = create(Staff::class);
        $this->post('/reset/password/staff', ['email' => $staff->email]);

        $this->assertDatabaseHas('staffs', [
            'reset_password_token' => $staff->fresh()->reset_password_token
        ]);
    }

    /** @test */
    public function we_expect_that_created_token_sent_to_students_email()
    {
        Mail::fake();
        $student = create(Student::class);
        $this->post('/reset/password/student', ['email' => $student->email]);
        Mail::assertQueued(ResetPasswordMail::class, function ($mail) use ($student) {
            return $mail->hasTo($student->email) && $mail->user->username == $student->username;
        });
    }

    /** @test */
    public function we_expect_that_created_token_sent_to_staffs_email()
    {
        Mail::fake();
        $staff = create(Staff::class);
        $response = $this->post('/reset/password/staff', ['email' => $staff->email]);
        Mail::assertQueued(ResetPasswordMail::class, function ($mail) use ($staff) {
            return $mail->hasTo($staff->email) && $mail->user->username == $staff->username;
        });
    }

    /** @test */
    public function we_have_two_reset_password_blade_student_and_staffs()
    {
        $this->get('/reset/password/staff')->assertSee('اعضا');
        $this->get('/reset/password/student')->assertSee('دانش آموزان');
    }

    // After send reset password Token

    // ***************
    //  We have 7 test here
    // ***************

    /** @test */
    public function get_request_to_reset_password_page_without_token()
    {
        $this->get('/page/reset/password')->assertStatus(404);
    }

    /** @test */
    public function the_token_in_url_not_finded()
    {
        $dummyToken = md5('dummytoken');
        $this->get('/page/reset/pasword/' . $dummyToken)->assertStatus(404);
    }

    /** @test */
    public function return_student_name_if_reset_password_token_was_for_student()
    {
        $student = create(Student::class);
        $this->post('/reset/password/student', ['email' => $student->email]);
        $this->get('page/reset/password/'
            . $student->fresh()->reset_password_token)
            ->assertSee($student->firstname)->assertSee($student->lastname);
    }

    /** @test */
    public function return_staff_name_if_reset_password_token_was_for_staff()
    {
        $staff = create(Staff::class);
        $this->post('/reset/password/staff', ['email' => $staff->email]);
        $this->get('page/reset/password/'
            . $staff->fresh()->reset_password_token)
            ->assertSee($staff->firstname)->assertSee($staff->lastname);
    }

    /** @test */
    public function reset_password_form_must_has_validation_rules()
    {
        // we have existed token
        $dummyToken = md5('dummytoken');
        $this->put('/page/reset/pasword/' . $dummyToken)->assertStatus(404);
        $this->put('/page/reset/pasword/' . null)->assertStatus(404);
        $student = create(Student::class);
        $this->createToken($student);
        // null password test
        $this->put(
            '/page/reset/password/' . $student->reset_password_token,
            ['password' => '']
        )->assertSessionHasErrors('password');
        // not confirmed password test
        $this->put(
            '/page/reset/password/' . $student->reset_password_token,
            ['password' => 'alireza021', 'password_confirmation' => 'Alireza021']
        )->assertSessionHasErrors('password');
        $this->put(
            '/page/reset/password/' . $student->reset_password_token,
            ['password' => '021051', 'password_confirmation' => '021051']
        )->assertSessionHasNoErrors();
    }

    /** @test */
    public function a_student_can_reset_her_or_his_password_by_token()
    {
        $student = create(Student::class);
        $this->createToken($student);
        $this->put(
            '/page/reset/password/' . $student->reset_password_token,
            ['password' => 'alireza021', 'password_confirmation' => 'alireza021']
        )->assertSessionHasNoErrors();
        $this->post('/login/student', ['username' => $student->username,
            'password' => 'alireza021'])->assertRedirect('/dashboard');
        $this->assertTrue(auth()->guard('student')->check());
        $this->assertFalse(auth()->guard('staff')->check());
    }

    /** @test */
    public function a_staff_can_reset_her_or_his_password_by_token()
    {
        $staff = create(Staff::class);
        $this->createToken($staff);
        $this->put(
            '/page/reset/password/' . $staff->reset_password_token,
            ['password' => 'Alireza021', 'password_confirmation' => 'Alireza021']
        )->assertSessionHasNoErrors();
        $this->post('/login/staff', ['username' => $staff->username,
            'password' => 'Alireza021'])->assertRedirect('/admin/dashboard');
        $this->assertTrue(auth()->guard('staff')->check());
        $this->assertFalse(auth()->guard('student')->check());
    }

    protected function createToken($model)
    {
        $token = Str::limit(md5($model->email . Str::random()), 254, '');
        $model->reset_password_token = $token;
        $model->save();
    }
}
