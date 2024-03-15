<?php

namespace App\Helpers;

use App\Enums\LangOperationEnum;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Foundation\Application;

class AppHelper
{
    public static function isLocalMode(): bool
    {
        return env('APP_ENV') === 'local';
    }

    public static function generalLang(LangOperationEnum $operation, string $key): Application|array|string|Translator|\Illuminate\Contracts\Foundation\Application|null
    {
        return __('general.general_operations.' . $operation->value, ['attribute' => __('general.attributes.' . $key)]);
    }

    public static function BooleanFormatResponse(bool $value)
    {
        switch ($value) {
            case true :
                return [
                    'value' => true,
                    'title' => __('general.attributes.active'),
                    'badge' => '#11f211'
                ];
            case false:
                return [
                    'value' => false,
                    'title' => __('general.attributes.inactive'),
                    'badge' => '#FF0000'
                ];

        }
    }
}
