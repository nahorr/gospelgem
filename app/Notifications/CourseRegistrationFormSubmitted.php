<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\CourseRegistration;
use App\Course;
use Carbon\Carbon;

class CourseRegistrationFormSubmitted extends Notification
{
    use Queueable;

    protected $course_info;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Course $course_info)
    {
        $this->course_info = $course_info;

        return $this->course_info;
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
                    ->line('Congratulations! Your registration is confirmed!')
                    ->line('You have successfully completed registration for '.$this->course_info->course_name.'.')
                    ->line('Course Name: '.$this->course_info->course_name)
                    ->line('Mentor: '.$this->course_info->course_mentor)
                    ->line('Venue: '.$this->course_info->venue)
                    ->line('Date: '.$this->course_info->start_date->toFormattedDateString())
                    ->line('Time: '.date('h:i A', strtotime($this->course_info->start_time)))
                    ->action($this->course_info->course_name, 'https://gosgem.com/courses/registrations')
                    ->line('Please use the link above to login and view all the courses you have registered for.')
                    ->line('Have a wonderful day!');
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
