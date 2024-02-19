<?php

namespace App\Services;

use App\Events\Auth\UserRegisterEvent;
use App\Helpers\AppHelper;
use App\Models\User;
use App\Notifications\sms\SendSmsOtpNotification;
use Illuminate\Support\Facades\Log;

class AuthenticationService
{
    public function request($data)
    {
        $user = User::where('mobile_number', $data['mobile'])->first();

        if (empty($user)) {
            $user = User::create([
                'name'          => $data['mobile'],
                'mobile_number' => $data['mobile'],
                'mobile_prefix' => '098'
            ]);

            event(new UserRegisterEvent($user));
        }

        $otp = $user->otp()->create([
            'code'      => rand(100000, 999999),
            'secret'    => hash('sha256', $data['mobile'] . now()->toString()),
            'expire_at' => now()->addMinutes(5),
        ]);

        AppHelper::isLocalMode()
            ? $user->notify(new SendSmsOtpNotification($otp))
            : Log::info('OTP: ' . $otp->code . ' hash ' . $otp->secret);


        return [
            'secret'       => $otp->secret,
            'has_password' => !is_null($user->password)
        ];
    }

    public function verifyCode($data)
    {

    }
}
