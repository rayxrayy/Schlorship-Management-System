<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\CancelStudent;

class FormCancelNotification extends Notification
{
    public $cancelstudent;
    /**
     * Create a new notification instance.
     */
    public function __construct($cancelstudent)
    {
        $this->cancelstudent = $cancelstudent;
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
                    ->line('We are sorry! '. $this->cancelstudent->username)
                    ->action('Notification Action', url('/'))
                    ->line('You have not been selected for the course '. $this->cancelstudent->coursename. ' offered by '. $this->cancelstudent->collegename )
                    ->line('College Comments: ' .$this->cancelstudent->conmment )
                    ->line('Thank you for applying!')
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
            'message' => 'You have not been selected for the course '. $this->cancelstudent->coursename . ' offered by ' . $this->cancelstudent->collegename,
            'student_id' => $this->cancelstudent->id,
            'created_at' => now()->format('Y-m-d H:i:s'),
        ];
    }
}