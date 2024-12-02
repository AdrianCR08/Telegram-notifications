<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class ExampleNotification extends Notification
{
    use Queueable;

    protected $name;
    protected $email;
    protected $message;

    /**
     * Create a new notification instance.
     *
     * @param string $name
     * @param string $email
     * @param string $message
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the Telegram representation of the notification.
     *
     * @param mixed $notifiable
     * @return TelegramMessage
     */
    public function toTelegram(mixed $notifiable): TelegramMessage
    {
        try {
            return TelegramMessage::create()
                ->to('1535523266')
                ->content("Hello, " . $this->name . "\nEmail: " . $this->email . "\nMessage: " . $this->message)
                ->options(['parse_mode' => 'HTML']);
        } catch (\Exception $ex) {
            \Log::error('Telegram Notification Error: ' . $ex->getMessage());
            return TelegramMessage::create()
                ->to('1535523266')
                ->content('An error occurred');
        }
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
