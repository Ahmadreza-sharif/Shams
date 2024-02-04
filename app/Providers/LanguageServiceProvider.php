<?php

namespace App\Providers;

use App\Enums\AppLanguageEnum;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;

class LanguageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $languages = AppLanguageEnum::arrayValues();
        $locale = request()->header('Accept-Language');
        app()->setLocale($languages[$locale] ?? Arr::first($languages));
    }
}
