<?php

namespace App\Models;

use App\Enums\AppLanguageEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Translation extends Model
{
    use HasFactory;

    protected $fillable = [
        'locale',
        'translatable_type',
        'translatable_id',
        'title',
        'summery',
        'description'
    ];

    protected $casts = [
        'locale'            => 'string',
        'translatable_type' => 'string',
        'translatable_id'   => 'string',
        'title'             => 'string',
        'summery'           => 'string',
        'description'       => 'string',
    ];

    public function translatable(): MorphTo
    {
        return $this->morphTo();
    }
}
