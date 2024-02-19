<?php

namespace App\Enums;

use App\Helpers\EnumToArray;

enum SmsEnum: string
{
    use EnumToArray;

    case SEND_OTP = 'sms.send_otp';
}
