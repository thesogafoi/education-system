<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class StaffLoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_staff_can_sign_in_with_username_and_password()
    {
        // create staff with specific data
        $staff = createStaffManually();
        // save needed data
        $staffDataForLogin = [
            'username' => $staff->username,
            'password' => '021051'
        ];
        // send it to login page as post request for attempt t login
        $response = $this->post('/login/staff', $staffDataForLogin);
        // assert we have not error on there
        $response->assertStatus(302);
        // we should get true in login
        $response->assertRedirect(route('staff.dashboard'));
    }

    /** @test */
    public function a_staff_can_logout_with_specific_url()
    {
        $this->signInStaff();
        $response = $this->post('/logout/staff');
        $this->assertFalse(Auth::guard('staff')->check());
        $response->assertRedirect(route('home'));
    }

    /** @test */
    public function a_staff_can_see_login_page_if_he_or_she_is_a_guest()
    {
        $this->signInStaff();
        $response = $this->get('login');
        $response->assertRedirect(route('staff.dashboard'));
        $response->assertSessionHas('message');
        $this->post('logout/staff');
        $secondResponse = $this->get('login');
        $secondResponse->assertStatus(200);
    }

    /** @test */
    public function a_staff_can_logout_when_he_or_she_was_login()
    {
        $response = $this->post('logout/staff');
        $response->assertStatus(403);

        $this->signInStaff();
        $response = $this->post('logout/staff');

        $response->assertRedirect(route('home'));

        $this->assertFalse(Auth::guard('staff')->check());
    }

    /** @test */
    public function a_staff_rejected_when_he_or_she_wants_login_as_student()
    {
        $staff = $this->signInStaff();
        $anStudent = createStudentManually();
        $studentDataForLogin = [
            'username' => $anStudent->username,
            'password' => '021051'
        ];
        $response = $this->post('login/student', $studentDataForLogin);
        $response->assertRedirect(route('staff.dashboard'));
    }
}
