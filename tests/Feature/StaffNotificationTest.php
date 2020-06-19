<?php

namespace Tests\Feature;

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
        $student = create(Student::class);
        // send notification too all staffs
    }
}
