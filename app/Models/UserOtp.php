<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserOtp extends Model
{
    protected $fillable = ['code', 'used_at', 'user_id', 'secret', 'expire_at'];

    protected $casts = [
        'expire_at' => 'datetime',
        'used_at'   => 'datetime',
        'code'      => 'integer',
        'user_id'   => 'integer'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
