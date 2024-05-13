<?php

use App\Enums\CategoryStatusEnum;

return [
    [
        'translations' => [
            'fa' => [
                'title'       => 'شال و روسری',
                'description' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
        است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد',
            ],
            'en' => [
                'title'       => 'Shawls and scarves',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque',
            ],
        ],
        'status'       => CategoryStatusEnum::ENABLE->value,
        'children'     => [
            [
                'translations' => [
                    'fa' => [
                        'title'       => 'شال',
                        'description' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
        است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد',
                    ],
                    'en' => [
                        'title'       => 'shawl',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque',
                    ]
                ],
                'status'       => CategoryStatusEnum::ENABLE->value,
            ], [
                'translations' => [
                    'fa' => [
                        'title'       => 'روسری',
                        'description' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
        است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد',
                    ],
                    'en' => [
                        'title'       => 'scarf',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque',
                    ]
                ],

                'status' => CategoryStatusEnum::DISABLE->value,
            ]
        ]
    ],
    [
        'translations' => [
            'fa' => [
                'title'       => 'لباس زیر',
                'description' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
        است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد',
            ],
            'en' => [

                'title'       => 'under wear',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque',
            ]
        ],
        'status'       => CategoryStatusEnum::ENABLE->value,
        'children'     => [
            [
                'translations' => [
                    'fa' => [
                        'title'       => 'شورت',
                        'description' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
        است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد',
                    ],
                    'en' => [
                        'title'       => 'short',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque',
                    ]
                ],
                'status'       => CategoryStatusEnum::DISABLE->value,
            ], [
                'translations' => [
                    'fa' => [
                        'title'       => 'زیرپوش',
                        'description' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
        است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد',
                    ],
                    'en' => [
                        'title'       => 'underClothe',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque',
                    ]
                ],

                'status' => CategoryStatusEnum::ENABLE->value,
            ]
        ]
    ]
];
