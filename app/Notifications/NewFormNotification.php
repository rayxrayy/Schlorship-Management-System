<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class NewFormNotification extends Notification
{
    public $viewcourse;
    /**
     * Create a new notification instance.
     */
    public function __construct($viewcourse)
    {
        $this->form = $viewcourse;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database']; //kun channel ma pathaune
    }

    
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray($notifiable)
    {
        return [
            'message' => 'You have just applied for '. $this->form->course . ' course at ' . $this->form->college,
            'form_id' => $this->form->id,
            'created_at' => now()->format('Y-m-d H:i:s'),
        ];
    }
}