<?php

namespace App\Rules\Auth;

use App\Models\UserOtp;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class OtpExpireTimeRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $otp = UserOtp::where('secret', $value)->where('expire_at', '>', now())->exists();

        if (!$otp) {
            $fail(__('auth.code_expired'));
        }

    }
}
