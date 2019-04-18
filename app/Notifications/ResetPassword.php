<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
             ->subject('Reset Password')
            ->line('This is a password reset email. If you are doing it yourself, please click the button below to continue:')
            ->action('Reset Password', url(route('password.reset', $this->token, false)))
            ->line('If you have not done so, you can choose to ignore this message.');
    }
}
