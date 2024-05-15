<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PostNotification extends Notification
{
    use Queueable;
    public $post;
    /**
     * Create a new notification instance.
     */
    public function __construct($post)
    {
        $this->comment = $post;
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
            'message' => 'You have got a review from '. $this->comment->image. " : ". $this->comment->description,
            'form_id' => $this->comment->id,
            'created_at' => now()->format('Y-m-d H:i:s'),
        ];
    }
}