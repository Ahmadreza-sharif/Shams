<?php

namespace App\Http\Controllers\v1;

use App\Enums\LangOperationEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\Permission\IndexPermissionResource;
use App\Http\Resources\User\IndexUserResource;
use App\Services\PermissionService\PermissionService;
use Illuminate\Support\Facades\Response;

class PermissionController extends Controller
{
    public function __construct(private readonly PermissionService $service)
    {
    }

    public function index()
    {
        $permissions = IndexPermissionResource::collection($this->service->getParentPermissions());
        return Response::dataWithAdditional(generalLang(LangOperationEnum::INDEX, 'permission'), $permissions);
    }
}
