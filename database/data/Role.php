<?php

use App\Enums\PermissionEnum;
use App\Enums\RoleEnum;

return [
    [
        'translations' => [
            'fa' => [
                'title'       => 'ادمین',
                'description' => 'نقش ادمین که دسترسی های مخدودی دارد.'
            ],
            'en' => [
                'title'       => 'admin',
                'description' => 'this is admin role and it has restrict permissions'
            ]
        ],
        'deletable'    => true,
        'updatable'    => true,
        'permissions'  => [PermissionEnum::USER->value],
        'key'          => RoleEnum::ADMIN,
    ],
    [
        'translations' => [
            'fa' => [
                'title'       => 'مالک',
                'description' => 'نقش مالک به تمام سیستم دسترسی دارد.'
            ],
            'en' => [
                'title'       => 'owner',
                'description' => 'owner role has permission to all the system'
            ]
        ],
        'deletable'    => false,
        'updatable'    => true,
        'permissions'  => PermissionEnum::values(),
        'key'          => RoleEnum::OWNER,
    ]
];
