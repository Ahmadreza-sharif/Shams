<?php

use App\Enums\LangOperationEnum;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Foundation\Application;
use Illuminate\Support\Collection;

/*
 * function for formatting boolean parameters in projects
 */
function BooleanFormatResponse($value): array
{
    switch ($value) {
        case true :
            return [
                'value' => true,
                'title' => __('general.attributes.active'),
                'badge' => '#11f211'
            ];
        default:
        case false:
            return [
                'value' => false,
                'title' => __('general.attributes.inactive'),
                'badge' => '#FF0000'
            ];

    }
}

/*
 * function for loading messages in controllers
 */
function generalLang(LangOperationEnum $operation, string $key): Application|array|string|Translator|\Illuminate\Contracts\Foundation\Application|null
{
    return __('general.general_operations.' . $operation->value, ['attribute' => __('general.attributes.' . $key)]);
}

/*
 * function checking for development env or production env
 */
function isLocalMode(): bool
{
    return env('APP_ENV') === 'local';
}

/*
 * function for Loading data for seeders
 */
function SeederData($title): Collection
{
    return collect(include_once app_path() . "/../database/data/$title.php");
}
