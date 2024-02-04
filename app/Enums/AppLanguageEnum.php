<?php

namespace App\Enums;

use App\Helpers\EnumToArray;

enum AppLanguageEnum: string
{
    use EnumToArray;
    case FA = 'fa';
    case EN = 'en';
}
