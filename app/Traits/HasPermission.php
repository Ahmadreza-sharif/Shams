<?php

namespace App\Traits;

use App\Models\User;

trait HasPermission
{
    public function hasPermissionTo(array $permissions): bool
    {
        $hasPermission = $this->permissions()->whereIn('key', $permissions)->exists();

        $hasRole = $this->roles()->whereHas('permissions', function ($q) use ($permissions) {
            $q->whereIn('key', $permissions);
        })->exists();

        return $hasPermission || $hasRole;
    }
}
