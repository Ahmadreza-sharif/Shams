<?php

use App\Enums\LangOperationEnum;

return [
    'attributes' => [
        'user'     => 'user',
        'role'     => 'role',
        'active'   => 'فعال',
        'inactive' => 'غیرفعال',
        'category' => 'دسته بندی'
    ],

    'general_operations' => [
        LangOperationEnum::STORE->value   => ':attribute Stored Successfully.',
        LangOperationEnum::UPDATE->value  => ':attribute updated Successfully.',
        LangOperationEnum::DESTROY->value => ':attribute deleted Successfully.',
        LangOperationEnum::INDEX->value   => 'list of :attribute',
        LangOperationEnum::SHOW->value    => 'show of :attribute',
        LangOperationEnum::TOGGLE->value  => ':attribute toggled successfully',
    ]
];
