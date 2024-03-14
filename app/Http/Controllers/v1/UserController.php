<?php

namespace App\Http\Controllers\v1;

use App\Enums\LangOperationEnum;
use App\Helpers\AppHelper;
use App\Http\Controllers\BaseController;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Resources\User\IndexUserResource;
use App\Http\Resources\User\ShowUserResource;
use App\Models\User;
use App\Services\UserService\UserService;
use Illuminate\Support\Facades\Response;

class UserController extends BaseController
{
    public function __construct(
        private readonly UserService $service,
    )
    {
    }

    public function index()
    {
        $data = IndexUserResource::collection($this->service->paginate());
        return Response::dataWithAdditional(AppHelper::generalLang(LangOperationEnum::INDEX->value, 'user'), $data);
    }

    public function show(User $user)
    {
        return Response::data(AppHelper::generalLang(LangOperationEnum::SHOW->value, 'user'), ShowUserResource::make($user));
    }

    public function store(StoreUserRequest $request)
    {
//        $this->service->store($request->validated());
    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function me()
    {

    }
}
