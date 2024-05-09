<?php

namespace App\Notifications;

use App\Models\ApprovedStudents;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class StudentApprovedNotification extends Notification
{
    use Queueable;
    protected $finalstudent;
    /**
     * Create a new notification instance.
     */
    public function __construct(Form $finalstudent)
    {
        $this->finalstudent = $finalstudent;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('Congratulations!')
                    ->action('Notification Action', url('/'))
                    ->line('You have been selected for the course:  '. $this->finalstudent->course. 'offered by ' . $this->finalstudent->approved_by)
                    ->line('Thank you for using our application!')
                    ->line('Good Luck for your future!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'student_id' => $this->finalstudent->id,
            'message' => 'You have been selected for the course: '. $this->finalstudent->course . ' offered by ' . $this->finalstudent->approved_by,
            'created_at' => now()->format('Y-m-d H:i:s'),
        ];
    }
}