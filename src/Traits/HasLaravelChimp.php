<?php

namespace ApplabQatar\MailChimpTransactionalEmail\Traits;

use ApplabQatar\MailChimpTransactionalEmail\Facades\LaravelChimp;
use Illuminate\Support\Facades\Notification;

trait HasLaravelChimp
{
    public function notifyUser($notification)
    {
        $message = $notification->toMail($this);
        $messageObject = [
            'html' => $message->render()->toHtml(),
            'subject' => $message->subject,
            'from_email' => config('mail.from.address'),
            'to' => [
                [
                    'email' => $this->email,
                    'name' => $this->name,
                ],
            ],
        ];

        return LaravelChimp::sendMessage($messageObject);
    }
}
