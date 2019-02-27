<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class InvitationFormSubmitted extends Notification
{
    use Queueable;

    protected $invitation_form_notification;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($invite_msg)
    {
        $this->invitation_form_notification = $invite_msg;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Hello. '.$this->invitation_form_notification)
                    ->action('Gosgem', 'https://gosgem.com/login')
                    ->line('Please use the link above to login and view the message.');
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
            //
        ];
    }
}
