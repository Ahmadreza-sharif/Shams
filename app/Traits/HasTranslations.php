<?php

namespace App\Traits;

use App\Models\Translation;
use App\Services\TranslationService\TranslationService;

trait HasTranslations
{
    public function translations()
    {
        return $this->morphMany(Translation::class, 'translatable');
    }

    public function getTitleAttribute()
    {
        return $this->translations()->where('locale', app()->getLocale())->first()->title;
    }
}
