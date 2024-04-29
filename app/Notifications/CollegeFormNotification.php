<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class CollegeFormNotification extends Notification
{
    public $form;
    /**
     * Create a new notification instance.
     */
    public function __construct($form)
    {
        $this->form = $form;
    }
    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

   public function toArray($notifiable)
    {
        return [
            'message' => 'A student has applied for your course: ' . $this->form->course,
            'form_id' => $this->form->id,
            'created_at' => now()->format('Y-m-d H:i:s')
        ];
    }
}