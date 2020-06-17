<?php

namespace Tests\Feature;

use App\Staff;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StaffTest extends TestCase
{
    use RefreshDatabase;
    // Create Staff Test

    /** @test */
    public function a_staff_can_created_in_factory()
    {
        $staff = create(Staff::class, 1)->first();
        $this->assertDatabaseHas('staffs', [
            'username' => $staff->username,
            'firstname' => $staff->firstname,
            'email' => $staff->email,
            'lastname' => $staff->lastname,
            'password' => $staff->password
        ]);
    }

    // **************************************
}
