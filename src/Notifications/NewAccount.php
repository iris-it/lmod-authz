<?php

namespace Irisit\Authz\Notifications;

use App\User;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NewAccount extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $user;
    public $password;

    /**
     * Create a notification instance.
     * @param User $user
     */
    public function __construct(User $user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line(__('Hello') . ' ' . $this->user->firstname)

            ->line(__('Your account has been created'))

            ->line(__('Here is your identifiers, change your password as soon as possible'))

            ->line(__('Email :') . ' ' . $this->user->email)

            ->line(__('Password :') . ' ' . $this->password)

            ->action(__('Login'), url(config('app.url') . route('authz.get_login')));
    }
}