<?php

use App\Enums\PermissionEnum;

return [
    [
        'translations' => [
            'fa' => [
                'title' => 'کاربران'
            ],
            'en' => [
                'title' => 'users'
            ]
        ],
        'key'          => PermissionEnum::USER->value,
        'permissions'  => [
            [
                'translations' => [
                    'fa' => [
                        'title' => 'لیست کاربر'
                    ],
                    'en' => [
                        'title' => 'users index'
                    ]
                ],
                'key'          => PermissionEnum::USER_INDEX->value
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
                'key'          => PermissionEnum::USER_SHOW->value
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
                'key'          => PermissionEnum::USER_DESTROY->value
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
                'key'          => PermissionEnum::USER_UPDATE->value
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
                'key'          => PermissionEnum::USER_STORE->value
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
                'key'          => PermissionEnum::USER_TOGGLE->value
            ],
        ]
    ],
    [
        'translations' => [
            'fa' => [
                'title' => 'نقش ها'
            ],
            'en' => [
                'title' => 'roles'
            ]
        ],
        'key'          => PermissionEnum::ROLE->value,
        'permissions'  => [
            [
                'translations' => [
                    'fa' => [
                        'title' => 'لیست نقش ها'
                    ],
                    'en' => [
                        'title' => 'roles index'
                    ]
                ],
                'key'          => PermissionEnum::ROLE_INDEX->value
            ],
            [
                'translations' => [
                    'fa' => [
                        'title' => 'جزئیات نقش'
                    ],
                    'en' => [
                        'title' => 'role details'
                    ]
                ],
                'key'          => PermissionEnum::ROLE_SHOW->value
            ],
            [
                'translations' => [
                    'fa' => [
                        'title' => 'حذف نقش'
                    ],
                    'en' => [
                        'title' => 'delete role'
                    ]
                ],
                'key'          => PermissionEnum::ROLE_DESTROY->value
            ],
            [
                'translations' => [
                    'fa' => [
                        'title' => 'اپدیت نقش'
                    ],
                    'en' => [
                        'title' => 'update role'
                    ]
                ],
                'key'          => PermissionEnum::ROLE_UPDATE->value
            ],
            [
                'translations' => [
                    'fa' => [
                        'title' => 'ذخیره نقش'
                    ],
                    'en' => [
                        'title' => 'store role'
                    ]
                ],
                'key'          => PermissionEnum::ROLE_STORE->value
            ],
            [
                'translations' => [
                    'fa' => [
                        'title' => 'تغییر وضعیت نقش'
                    ],
                    'en' => [
                        'title' => 'toggle role'
                    ]
                ],
                'key'          => PermissionEnum::ROLE_TOGGLE->value
            ],
        ]
    ]
];
