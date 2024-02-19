<?php

namespace App\Services\SmsService;

use App\Models\Sms;
use App\Models\User;

class MeliPayamakService implements SmsServiceInterface
{

    public function send(object $users, array $payload)
    {

    }

    public function sendByPattern(User $user, array $payload)
    {
        $data = [
            'username' => config('sms.melliPayamak.username'),
            'password' => config('sms.melliPayamak.password'),
            'text'     => $payload['params']['code'],
            'to'       => $user->mobile_number,
            "bodyId"   => $payload['body_id']
        ];


        $post_data = http_build_query($data);
        $handle = curl_init('https://rest.payamak-panel.com/api/SendSMS/BaseServiceNumber');

        curl_setopt($handle, CURLOPT_HTTPHEADER, array(
            'content-type' => 'application/x-www-form-urlencoded'
        ));

        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($handle, CURLOPT_POST, true);
        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
        return curl_exec($handle);
    }
}
