<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserOtp extends Model
{
    protected $fillable = ['code', 'used_at', 'user_id', 'secret'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
