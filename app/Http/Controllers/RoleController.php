<?php

namespace App\Http\Controllers;

use App\Enums\LangOperationEnum;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Resources\Role\IndexRoleResource;
use App\Models\User;
use App\Services\RoleService\RoleService;
use Illuminate\Http\Request;
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

    public function show()
    {

    }

    public function destroy()
    {

    }
}
