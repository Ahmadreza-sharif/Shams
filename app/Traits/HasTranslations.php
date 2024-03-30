<?php

namespace App\Traits;

use App\Services\TranslationService\TranslationService;

trait HasTranslations
{
    public function translations()
    {
        return $this->morphMany(self::class);
    }

    public function getTitleAttribute()
    {
        return TranslationService::get($this, 'title');
    }
}
