<?php

namespace App\Http\Controllers\v1;

use App\Enums\LangOperationEnum;
use App\Helpers\AppHelper;
use App\Http\Controllers\BaseController;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
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
        $users = IndexUserResource::collection($this->service->paginate());
        return Response::dataWithAdditional(AppHelper::generalLang(LangOperationEnum::INDEX, 'user'), $users);
    }

    public function show(User $user)
    {
        return Response::data(AppHelper::generalLang(LangOperationEnum::SHOW, 'user'), ShowUserResource::make($user));
    }

    public function store(StoreUserRequest $request)
    {
        $user = $this->service->store($request->validated());
        return Response::data(AppHelper::generalLang(LangOperationEnum::STORE, 'user'), ShowUserResource::make($user));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user = $this->service->update($request->validated(), $user);
        return Response::data(AppHelper::generalLang(LangOperationEnum::UPDATE, 'user'), ShowUserResource::make($user));
    }

    public function destroy(User $user)
    {
        $user = $this->service->destroy($user);
        return Response::data(AppHelper::generalLang(LangOperationEnum::DESTROY, 'user'), $user);
    }

    public function toggle(User $user)
    {
        $user = $this->service->toggle($user, 'block');
        return Response::data(AppHelper::generalLang(LangOperationEnum::TOGGLE, 'user'), ShowUserResource::make($user));
    }

    public function me()
    {
        $user = \Auth::user();
        return Response::data(AppHelper::generalLang(LangOperationEnum::SHOW,'user'),ShowUserResource::make($user));
    }
}
