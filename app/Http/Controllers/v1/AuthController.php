<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Authentication\LoginPasswordRequest;
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

    /**
     * @param Request $request
     * @return false|string
     */
    public function request(Request $request)
    {
        $data = $this->service->request($request->validated());
        return Response::data(__('auth.otp_code_send'), $data);
    }

    /**
     * @param LoginOtpRequest $request
     * @return false|string
     */
    public function loginOtp(LoginOtpRequest $request)
    {
        $data = $this->service->loginOtp($request->validated());
        return Response::data(__('auth.phone_number_verified'), $data);
    }

    /**
     * @param LoginPasswordRequest $request
     * @return false|string
     */
    public function loginPassword(LoginPasswordRequest $request)
    {
        $data = $this->service->loginPassword($request->validated());
        return Response::data(__('auth.login_successful'), $data);
    }

    /**
     * @return false|string
     */
    public function logout()
    {
        $data = $this->service->logout();
        return Response::data(__('auth.logout_successfully'), $data);
    }
}
