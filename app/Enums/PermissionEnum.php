<?php

namespace App\Enums;

use App\Helpers\EnumToArray;

enum PermissionEnum: string
{
    use EnumToArray;

    case USER = 'user';
    case USER_INDEX = 'user_index';
    case USER_STORE = 'user_store';
    case USER_SHOW = 'user_show';
    case USER_UPDATE = 'user_update';
    case USER_DESTROY = 'user_destroy';
    case USER_TOGGLE = 'user_toggle';
}
