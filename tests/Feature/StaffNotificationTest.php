<?php

namespace Tests\Feature;

use App\Notifications\StudentCreated;
use App\Staff;
use App\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class StaffNotificationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function when_a_student_created_send_notification_to_staff()
    {
        Notification::fake();
        Notification::assertNothingSent();
        create(Staff::class, 2);
        $student = create(Student::class);
        Staff::adminStaffs()->map(function ($staff) {
            Notification::assertSentTo($staff, StudentCreated::class);
        });
    }
}
