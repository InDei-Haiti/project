<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewReplyAdded extends Notification
{
    use Queueable;

    public $discussion;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($d)
    {
        $this->discussion=$d;
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
                    ->greeting('Ирлээ.NET мэндчилж байна')
                    ->line('Таны асуусан асуултанд хэн нэгэн хариулсан байна')
                    ->action('Хэлэлцүүлгийг харах', route('discussions.show',['id'=>$this->discussion->id]))
                    ->line('Манай сайтыг ашигласанд баярлалаа!');
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
