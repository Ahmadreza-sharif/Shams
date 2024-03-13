<?php

namespace App\Enums;

enum LangOperationEnum: string
{
    case INDEX = 'index';
    case UPDATE = 'update';
    case SHOW = 'show';
    case DESTROY = 'destroy';
    case STORE = 'store';
    case TOGGLE = 'toggle';

}
