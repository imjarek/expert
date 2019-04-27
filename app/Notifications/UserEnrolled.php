<?php

namespace App\Notifications;

use NotificationChannels\Twilio\TwilioChannel;
use NotificationChannels\Twilio\TwilioSmsMessage;
use Illuminate\Notifications\Notification;



class UserEnrolled extends Notification
{
    public function __construct(array $data)
    {
        $this->message = sprintf('Запись на курс: %s, %s, %s', $data['phone'], $data['name'], $data['course']);
    }
    public function via($notifiable)
    {
        return [TwilioChannel::class];
    }

    public function toTwilio($notifiable)
    {
        return (new TwilioSmsMessage($this->message));
    }
}
