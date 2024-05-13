<?php

namespace App\Services\TranslationService;

use App\Models\Translation;

class TranslationService
{
    public static function translate($eloquent, array $data): void
    {
        if ($eloquent->translation) {
            $eloquent->translations()->delete();
        }

        self::storeTranslations($eloquent, $data['translations']);
    }


    public static function get($eloquent, $key = null)
    {

        $translation = $eloquent->translations()->where('locale', app()->getLocale())->first();

        if ($key == null) {
            return $translation->toArray();
        }

        return $translation->first()->$key;
    }

    public static function storeTranslations($eloquent, $data): void
    {
        foreach ($data as $locale => $translation) {
            Translation::create([
                'title'             => $translation['title'] ?? null,
                'locale'            => $locale,
                'summery'           => $translation['summery'] ?? null,
                'description'       => $translation['description'] ?? null,
                'translatable_id'   => $eloquent->id,
                'translatable_type' => $eloquent::class
            ]);
        }
    }
}
