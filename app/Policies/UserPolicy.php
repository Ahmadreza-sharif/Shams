<?php

namespace App\Policies;

use App\Enums\PermissionEnum;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        dd($user->hasPermission([PermissionEnum::USER->value, PermissionEnum::USER_INDEX->value]));
        return $user->hasPermission([PermissionEnum::USER->value, PermissionEnum::USER_INDEX->value]);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model): bool
    {
        return $user->hasPermission([PermissionEnum::USER->value, PermissionEnum::USER_SHOW->value]);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermission([PermissionEnum::USER->value, PermissionEnum::USER_STORE->value]);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model): bool
    {
        return $user->hasPermission([PermissionEnum::USER->value, PermissionEnum::USER_UPDATE->value]);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model): bool
    {
        return $user->hasPermission([PermissionEnum::USER->value, PermissionEnum::USER_DESTROY->value]);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool
    {

    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        return $user->hasPermission([PermissionEnum::USER->value, PermissionEnum::USER_DESTROY->value]);
    }
}
