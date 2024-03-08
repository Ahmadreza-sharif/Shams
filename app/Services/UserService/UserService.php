<?php

namespace App\Services\UserService;

use App\Models\User;
use App\Services\BaseService;
use Illuminate\Database\Eloquent\Model;

class UserService extends BaseService
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
