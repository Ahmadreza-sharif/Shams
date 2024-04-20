<?php

namespace App\Traits;

use App\Models\User;

trait HasPermission
{
    public function hasPermission(array $permissions): bool
    {
        $hasPermission = $this->permissions()->whereIn('key', $permissions)->exists();

        $hasRoles = $this->whereHas('roles.permissions', function ($query) use ($permissions) {
            $query->whereIn('key', $permissions);
        })->exists();

        return $hasPermission || $hasRoles;
    }
}
