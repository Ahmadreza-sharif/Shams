<?php

namespace App\Models;

use App\Enums\RoleEnum;
use App\Traits\HasTranslations;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, HasUuid, HasTranslations, SoftDeletes;

    protected $fillable = [
        'deletable',
        'updatable',
        'key'
    ];

    protected $casts = [
        'updatable' => 'boolean',
        'deletable' => 'boolean',
        'key'       => RoleEnum::class
    ];

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'role_permission');
    }
}
