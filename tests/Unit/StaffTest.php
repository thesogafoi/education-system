<?php

namespace Tests\Unit;

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

    /** @test */
    public function we_can_group_all_admin_staff()
    {
        create(Staff::class, 5);
        factory(Staff::class)->states('teacher')->create();
        $this->assertDatabaseHas('staff_roles', [
            'title' => 'admin',
            'title' => 'teacher'
        ]);

        foreach (Staff::adminStaffs() as $value) {
            $this->assertEquals($value->role(), 'admin');
        }
        foreach (Staff::teacherStaffs() as $value) {
            $this->assertEquals($value->role(), 'teacher');
        }
    }
}
