<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Authentication\Request;
use Illuminate\Support\Facades\Response;

class AuthController extends BaseController
{
    public function request(Request $request)
    {
        return Response::data([123],'this is data');
    }
}
