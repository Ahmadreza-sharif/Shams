<?php

namespace App\Helpers;

class AppHelper
{
    public static function isLocalMode() : bool
    {
        return env('APP_ENV') === 'local';
    }
}
