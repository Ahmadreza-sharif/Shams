<?php

namespace App\Services\PermissionService;

use App\Models\Permission;
use App\Services\BaseService;

class PermissionService extends BaseService
{
    public function __construct(Permission $model)
    {
        parent::__construct($model);
    }

    public function getParentPermissions()
    {
        $query = $this->query()->whereNull('parent_id');
        return $this->paginate();
    }
}
