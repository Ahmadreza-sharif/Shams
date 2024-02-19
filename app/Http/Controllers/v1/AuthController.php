<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Authentication\Request;
use App\Http\Requests\Authentication\LoginOtpRequest;
use App\Services\AuthenticationService;
use Illuminate\Support\Facades\Response;

class AuthController extends BaseController
{
    public function __construct(
        private readonly AuthenticationService $service
    )
    {
    }

    public function request(Request $request)
    {
        $data = $this->service->request($request->validated());
        return Response::data($data, '');
    }

    public function loginOtp(LoginOtpRequest $request)
    {
        $data = $this->service->loginOtp($request->validated());
        return Response::data($data, '');
    }
}
