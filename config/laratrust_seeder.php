<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'profile' => 'r,u',
            'menu_depan' => 'c,r,u,d',
            'posting' => 'c,r,u,d',
            'users' => 'c,r,u,d',
            'layanan' => 'c,r,u,d',
            'tiket' => 'c,r,u,d',
            'inventory' => 'c,r,u,d', 
            'agenda' => 'c,r,u,d',
            'tamu' => 'c,r,u,d',
            'skm' => 'c,r,u,d',
            'lkh' => 'c,r,u,d',
            'presensi_admin' => 'c,r,u,d',
        ],
        'writer' => [
            'profile' => 'r,u',
            'menu_depan' => 'c,r,u,d',
            'posting' => 'c,r,u,d',
        ],
        'dc_team' => [
            'profile' => 'r,u',
            'menu_depan' => 'c,r,u,d',
            'posting' => 'c,r,u,d',
            'layanan' => 'c,r,u,d',
            'tiket' => 'c,r,u,d',
            'inventory' => 'c,r,u,d', 
            'agenda' => 'c,r,u,d',
            'tamu' => 'c,r,u,d',
            'skm' => 'c,r,u,d',
            'lkh' => 'c,r,u,d',
            'presensi_admin' => 'c,r,u,d',
        ],
        'kepala_dinas' => [
            'profile' => 'r,u',
            'layanan' => 'r,u',
            'tiket' => 'r,u',
            'inventory' => 'r,u',
            'agenda' => 'r,u',
            'tamu' => 'r,u',
            'skm' => 'r,u',
            'lkh' => 'r,u',
            'presensi_admin' => 'r,u',
        ],
        'sekretariat' => [
            'profile' => 'r,u',
            'menu_depan' => 'c,r,u,d',
            'layanan' => 'c,r,u,d',
            'tiket' => 'c,r,u,d',
            'inventory' => 'c,r,u,d', 
            'agenda' => 'c,r,u,d',
            'tamu' => 'c,r,u,d',
            'skm' => 'c,r,u,d',
            'lkh' => 'c,r,u,d',
            'presensi_admin' => 'c,r,u,d',
        ],
        'non_asn' => [
            'profile' => 'r,u',
            'lkh' => 'c,r,u,d',
            'presensi' => 'c,r,u,d',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
