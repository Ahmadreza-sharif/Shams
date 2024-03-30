<?php

namespace App\Models;

use App\Traits\HasTranslations;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, HasUuid, HasTranslations,SoftDeletes;
    protected $fillable = [
        'deletable',
        'updatable',
    ];

    protected $casts = [
        'updatable' => 'boolean',
        'deletable' => 'boolean'
    ];
}
