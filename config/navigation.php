<?php

return [
    'routes' => [
        [
            'name' => 'home',
            'label' => 'Beranda'
        ],
        [
            'name' => 'services.lepas-kunci',
            'label' => 'Layanan Kami',
            'dropdown' => true,
            'children' => [
                [
                    'name' => 'services.lepas-kunci',
                    'label' => 'Lepas Kunci',
                    'description' => 'Sewa mobil tanpa supir untuk kebebasan perjalanan Anda'
                ],
                [
                    'name' => 'services.carter-dalam',
                    'label' => 'Carter Dalam Kota',
                    'description' => 'Layanan sewa mobil dengan supir untuk area dalam kota'
                ],
                [
                    'name' => 'services.carter-regular',
                    'label' => 'Perjalanan Antar Kota',
                    'description' => 'Layanan sewa mobil dengan supir untuk perjalanan luar kota'
                ],
            ]
        ],
        [
            'name' => 'cars',
            'label' => 'Armada'
        ],
        [
            'name' => 'contact',
            'label' => 'Kontak'
        ],
    ]
];