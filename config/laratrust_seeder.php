<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'users' => 'c,r,u,d',
            'menu_depan' => 'c,r,u,d',
            'profile' => 'r,u',
            'posting' => 'c,r,u,d',
            'perizinan' => 'c,r,u,d',
            'layanan' => 'c,r,u,d',
            'tiket' => 'c,r,u,d',
        ],
        'writer' => [
           'menu_depan' => 'c,r,u,d',
            'profile' => 'r,u',
            'posting' => 'c,r,u,d',
            'pengaduan_masyarakat' => 'c,r,u,d',
            'pengajuan_informasi' => 'c,r,u,d',
        ],
        'dc_team' => [
            'perizinan' => 'c,r,u,d',
            'tiket' => 'c,r,u,d',
            'users' => 'c,r,u,d',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
