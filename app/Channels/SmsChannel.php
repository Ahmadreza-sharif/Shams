<?php

namespace App\Channels;

use App\Models\User;
use App\Services\SmsService\SmsServiceInterface;
use Illuminate\Notifications\Notification;

class SmsChannel
{
    public function __construct(
        private readonly SmsServiceInterface $smsService
    )
    {
    }

    public function send(User $notifiable, Notification $notification)
    {
        $message = $notification->toSms($notifiable);

        try {
            $res = $this->smsService->sendByPattern($notifiable, $message);
        } catch (\Exception $e) {
            \Log::log('error', $e->getMessage());
        }
    }
}
