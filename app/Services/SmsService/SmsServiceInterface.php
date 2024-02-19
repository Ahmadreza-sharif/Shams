<?php

namespace App\Services\SmsService;

use App\Models\User;

interface SmsServiceInterface
{
    public function send(object $users, array $payload);
    public function sendByPattern(User $user, array $payload);
}
