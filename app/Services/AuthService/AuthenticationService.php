<?php

namespace App\Services\AuthService;

use App\Events\Auth\UserRegisterEvent;
use App\Helpers\AppHelper;
use App\Models\User;
use App\Models\UserOtp;
use App\Notifications\sms\SendSmsOtpNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthenticationService
{
    /**
     * @return array{secret: mixed, has_password: bool}
     */
    public function request($data): array
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

        isLocalMode()
            ? Log::info('OTP: ' . $otp->code . ' hash ' . $otp->secret)
            : $user->notify(new SendSmsOtpNotification($otp));


        return [
            'secret'       => $otp->secret,
            'has_password' => !is_null($user->password)
        ];
    }

    /**
     * @param $data
     * @return mixed
     */
    public function loginOtp($data): mixed
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

    /**
     * @param         $data
     * @param UserOtp $otp
     * @return void
     */
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

    /**
     * @param $data
     * @return mixed
     */
    public function loginPassword($data): mixed
    {
        $user = User::where('mobile_number', $data['mobile'])->first();

        if ($user->password != null) {

            $status = Auth::attempt(['mobile_number' => $user->mobile_number, 'password' => $data['password']]);

            if ($status) {
                return $user->getToken();
            } else {
                throw new BadRequestException(__('auth.password_incorrect'), 400);
            }
        }

        throw new BadRequestException(__('auth.password_not_set'));
    }

    /**
     * @return mixed
     */
    public function logout(): mixed
    {
        return JWTAuth::parseToken()->invalidate(true);
    }
}
