<?php

namespace App\Traits;

use App\Models\Translation;
use App\Services\TranslationService\TranslationService;

trait HasTranslations
{
    /*
     * translations is for all translations, and it's a relations but translation is for active locale
     * */
    public function translations()
    {
        return $this->morphMany(Translation::class, 'translatable');
    }

    public function getTitleAttribute()
    {
        return $this->translations()->where('locale', app()->getLocale())->first()->title;
    }

    public function getTranslationAttribute()
    {
        return $this->translations()->where('locale', app()->getLocale())->first();
    }
}
