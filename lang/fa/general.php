<?php

use App\Enums\LangOperationEnum;

return [
    'attributes' => [
        'user'     => 'کاربر',
        'active'   => 'فعال',
        'inactive' => 'غیرفعال',
        'role'     => 'نقش',
    ],

    'general_operations' => [
        LangOperationEnum::STORE->value   => ':attribute با موفقیت ذخیره شد.',
        LangOperationEnum::UPDATE->value  => ':attribute با موفقیت اپدیت شد.',
        LangOperationEnum::DESTROY->value => ':attribute با موفقیت حذف شد.',
        LangOperationEnum::INDEX->value   => 'لیست :attribute',
        LangOperationEnum::SHOW->value    => 'جزئیات :attribute',
        LangOperationEnum::TOGGLE->value  => ':attribute با موفقیت تعغیر وضعیت پیدا کرد.',
    ]
];
