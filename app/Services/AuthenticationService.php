<?php

namespace App\Services;

use App\Events\Auth\UserRegisterEvent;
use App\Helpers\AppHelper;
use App\Models\User;
use App\Models\UserOtp;
use App\Notifications\sms\SendSmsOtpNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Spatie\FlareClient\Http\Exceptions\NotFound;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;

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
            ? Log::info('OTP: ' . $otp->code . ' hash ' . $otp->secret)
            : $user->notify(new SendSmsOtpNotification($otp));


        return [
            'secret'       => $otp->secret,
            'has_password' => !is_null($user->password)
        ];
    }

    public function loginOtp($data)
    {
        $otp = UserOtp::where('secret', $data['secret'])->first();

        $this->validateOtp($data, $otp);

        $otp->used_at = now();

        $otp->user->update(
            [
                'mobile_verified_at' => now()
            ]
        );

        return $otp->user->getToken();

    }

    public function validateOtp($data, UserOtp $otp): void
    {
        if ($otp->expire_at <= now()) {
            throw new BadRequestException(__('auth.expired_otp'));
        }

        if ($data['code'] != $otp->code) {
            throw new BadRequestException(__('auth.invalid_otp'));
        }

        if ($otp->used_at != null) {
            throw new BadRequestException(__('auth.expired_otp'));
        }
    }
}
