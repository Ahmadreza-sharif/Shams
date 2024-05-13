<?php

namespace App\Services\RoleService;

use App\Models\Role;
use App\Services\BaseService;
use App\Services\PermissionService\PermissionService;
use App\Services\TranslationService\TranslationService;
use http\Exception;

class RoleService extends BaseService
{
    public function __construct(Role $model, private readonly PermissionService $permissionService)
    {
        parent::__construct($model);
    }

    public function store($payload)
    {
        $role = Role::create();

        $this->findAndSyncPermissionsToRole($payload, $role);

        TranslationService::translate($role, $payload);

        return $role;
    }

    public function update($payload, $eloquent)
    {
        $this->findAndSyncPermissionsToRole($payload, $eloquent);

        TranslationService::translate($eloquent, $payload);

        return $eloquent;
    }

    public function findAndSyncPermissionsToRole($payload, $role): void
    {
        $permissions = $this->permissionService->find($payload['permissions'], 'uuid')->pluck('id');
        $role->permissions()->sync($permissions);
    }

    public function destroy($eloquent): bool
    {
        if ($eloquent->deletable === false) {
            abort(404, __('exception.roles.cannot_delete_role'));
        }

        return $eloquent->delete();
    }
}
