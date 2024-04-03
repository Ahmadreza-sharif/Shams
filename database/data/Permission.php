<?php

use App\Enums\PermissionEnum;

return [
    [
        'translations' => [
            'fa' => [
                'title' => 'لیست کاربر'
            ],
            'en' => [
                'title' => 'users index'
            ]
        ],
        'key'         => PermissionEnum::USER_INDEX->value
    ],
    [
        'translations' => [
            'fa' => [
                'title' => 'جزئیات کاربر'
            ],
            'en' => [
                'title' => 'user details'
            ]
        ],
        'key'         => PermissionEnum::USER_SHOW->value
    ],
    [
        'translations' => [
            'fa' => [
                'title' => 'حذف کاربر'
            ],
            'en' => [
                'title' => 'delete user'
            ]
        ],
        'key'         => PermissionEnum::USER_DESTROY->value
    ],
    [
        'translations' => [
            'fa' => [
                'title' => 'اپدیت کاربر'
            ],
            'en' => [
                'title' => 'update user'
            ]
        ],
        'key'         => PermissionEnum::USER_UPDATE->value
    ],
    [
        'translations' => [
            'fa' => [
                'title' => 'ذخیره کاربر'
            ],
            'en' => [
                'title' => 'store user'
            ]
        ],
        'key'         => PermissionEnum::USER_STORE->value
    ],
    [
        'translations' => [
            'fa' => [
                'title' => 'تغییر وضعیت کاربر'
            ],
            'en' => [
                'title' => 'toggle user'
            ]
        ],
        'key'         => PermissionEnum::USER_TOGGLE->value
    ],
];
