<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\BaseController;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Melipayamak\MelipayamakApi;
use SoapClient;

class TestController extends BaseController
{
    public function index()
    {
        $user = User::where('mobile_number','9004636353')->first();
        $user->password = Hash::make('password');
        $user->save();
    }
}
