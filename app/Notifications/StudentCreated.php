<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class StudentCreated extends Notification
{
    use Queueable;
    public $student;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($student)
    {
        $this->student = $student;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'student_username' => $this->student->username,
        ];
    }
}
