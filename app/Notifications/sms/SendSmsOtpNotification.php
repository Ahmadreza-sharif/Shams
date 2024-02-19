<?php

namespace App\Notifications\sms;

use App\Channels\MeliPayamakChannel;
use App\Channels\SmsChannel;
use App\Enums\SmsEnum;
use App\Events\Auth\UserRegisterEvent;
use App\Models\Sms;
use App\Models\UserOtp;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendSmsOtpNotification extends Notification
{
    use Queueable;


    public UserOtp $otp;

    /**
     * Create a new notification instance.
     */
    public function __construct(UserOtp $otp)
    {
        return $this->otp = $otp;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param object $notifiable
     * @return string
     */
    public function via(object $notifiable): string
    {
        return SmsChannel::class;
    }

    public function toSms($notifiable)
    {
        return [
            'to'      => $notifiable->mobile_number,
            'params'  => [
                'code' => $this->otp->code,
                'hash' => $this->otp->secret
            ],
            'body_id' => Sms::where('key', SmsEnum::SEND_OTP->value)->first()->body_id
        ];
    }
}
