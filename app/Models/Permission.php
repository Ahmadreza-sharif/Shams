<?php

namespace App\Models;

use App\Traits\HasTranslations;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permission extends Model
{
    use HasFactory, HasUuid, HasTranslations;

    protected $fillable = ['key', 'parent_id'];

    public function role(): HasMany
    {
        return $this->hasMany(Role::class);
    }
}
