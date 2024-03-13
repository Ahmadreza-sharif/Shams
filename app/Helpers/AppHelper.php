<?php

namespace App\Helpers;

use Illuminate\Contracts\Translation\Translator;
use Illuminate\Foundation\Application;

class AppHelper
{
    public static function isLocalMode(): bool
    {
        return env('APP_ENV') === 'local';
    }

    public static function generalLang(string $operation, string $key): Application|array|string|Translator|\Illuminate\Contracts\Foundation\Application|null
    {
        return __('general.general_operations.' . $operation, ['attribute' => __('general.attributes.' . $key)]);
    }
}
