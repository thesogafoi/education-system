<?php

namespace Tests\Unit;

use App\Staff;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StaffDashboardTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function if_staff_was_not_login_redirect_to_login_page()
    {
        $staff = create(Staff::class);
        $this->get(route('staff.dashboard'))->assertRedirect('/login');
        $this->signInStaff($staff);
        $this->assertTrue(auth()->guard('staff')->check());
        $this->get(route('staff.dashboard'))->assertStatus(200);
    }
}
