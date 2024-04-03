<?php

namespace App\Http\Controllers\v1;

use App\Enums\LangOperationEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Resources\Role\IndexRoleResource;
use App\Http\Resources\Role\ShowRoleResource;
use App\Models\Role;
use App\Services\RoleService\RoleService;
use Illuminate\Support\Facades\Response;

class RoleController extends Controller
{
    public function __construct(private readonly RoleService $roleService)
    {
    }

    public function index()
    {
        $roles = $this->roleService->paginate();
        return Response::data(generalLang(LangOperationEnum::INDEX, 'role'), IndexRoleResource::collection($roles));
    }

    public function store(StoreRoleRequest $request)
    {
        $role = $this->roleService->store($request->validated());
    }

    public function update()
    {

    }

    public function show(Role $role)
    {
        return Response::data(generalLang(LangOperationEnum::SHOW, 'role'), ShowRoleResource::make($role));
    }

    public function destroy()
    {

    }
}
