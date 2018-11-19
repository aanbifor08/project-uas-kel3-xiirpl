<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Lara(b)log Admin language lines
    |--------------------------------------------------------------------------
    |
    */

    'navbar' => [
        'title' => 'Admin Menu',
    ],

    'drawer-nav' => [
        'dashboard'     => 'Dashboard',
        'posts'         => 'Artikel',
        'tags'          => 'Tags',
        'file-manager'  => 'Uploud File',
        'users'         => 'Kelola User',
        'sitemap-admin' => 'Sitemap',
        'themes'        => 'Thema Baru',
        'roles'         => 'Role Baru',
        'phpinfo'       => 'PHP Info',
        'activity'      => 'Activity',
        'settings'      => 'Pengatuyan',
    ],

    'footer' => [

        'nav' => [
            'github'  => 'GitHub',
            'license' => 'License',
        ],

        'copyright' => '&copy; 2018 | Developed with Love <i class="fa fa-heart text-danger"></i> by Kelompok 3',
    ],

    'access_levels' => [
        'roles'     => [
            'super-admin'   => 'Admin Pro',
            'admin'         => 'Admin',
            'moderator'     => 'Pengurus',
            'writer'        => 'Penulis',
            'user'          => 'Pengguna',
        ],
        'permissions' => [
            'view-users'    => 'Tampilan pengguna',
            'create-users'  => 'Pengguna Baru',
            'edit-users'    => 'Edit Pengguna',
            'delete-users'  => 'Hapus Pengguna',
        ],
    ],

    'dashboard' => [
        'title'                     => 'Halaman Awal',
        'header'                    => 'Selamat Datang!',
        'welcome-card-title'        => 'Hi :username, Selamat datang di Projectku',
        'welcome-card-sub-title'    => 'Test Project Blog.',
        'welcome-access'            => 'Level Kamu: ',
        'access-level-string'       => '{0} Kamu Tidak punya Akases.|{1} Kamu punya akses ke level:|[2,*] kamu punya akses ke lv:',
        'welcome-card-footer'       => '<em>Trims</em> untuk Mengecek. <strong>tolong kasih bintang Kekelompok Kita!</strong>',
        'permissions-string'        => 'Kamu punya Izin:',
    ],

    'posts' => [
        'pages' => [
            'index' => [
                'title'     => 'Artikel',
                'desc'      => '',
                'badge'     => 'Ditapilkan :per dari :total',
                'header'    => 'Tampilkan Artikel',
            ],
            'edit' => [
                'title'     => 'Edit Post Id: :id',
                'header'    => 'Edit Artikel',
            ],
            'create' => [
                'title'     => 'Bikin Artikel Baru',
                'header'    => 'Artikel Baru',
            ],
        ],
        'table' => [
            'title'  => 'Artikel',
            'titles' => [
                'id'        => 'Id',
                'published' => 'Diuploud',
                'title'     => 'Judul',
                'subtitle'  => 'Bahasa',
                'author'    => 'Penulis',
                'image'     => 'Gambar',
                'tags'      => 'Tags',
                'actions'   => '###',
            ],
        ],
    ],

    'buttons' => [
        'edit'          => 'Ubah',
        'view'          => 'tampilan',
        'delete'        => 'Hapus',
        'create'        => 'Buat Artikel',
        'create-tag'    => 'Buat Tag',
        'edit-tag'      => '<span class="hidden-xs hidden-sm hidden-md">Ubah</span> <span class="hidden-xs hidden-sm hidden-md hidden-lg">Tag</span>',
    ],

    'modals' => [
        'delete-post' => [
            'close'     => 'Tutup',
            'title'     => 'Konfirasi Hapus',
            'message'   => 'Yakin Hapus Artikel?',
            'cancel'    => 'Batal',
            'confirm'   => 'Ok Hapus',
        ],
        'save-post' => [
            'close'     => 'Tutup',
            'title'     => 'Konfirmasi Simpan',
            'message'   => 'Simpan Perubahan?',
            'cancel'    => 'Batal',
            'confirm'   => 'Ok Simpan',
        ],
        'delete-tag' => [
            'close'     => 'Tutup',
            'title'     => 'Konfirmasi Hapus',
            'message'   => 'Yakin Hapus tag?',
            'cancel'    => 'batal',
            'confirm'   => 'Ok Hapus',
        ],
    ],

    'loader' => [
        'message' => 'loading',
    ],

    'user_pages' => [
        'index'     => [
            'header' => 'Showing Users',
        ],
        'show'      => [
            'header' => 'Showing User',
        ],
        'edit'      => [
            'header' => 'Editing User',
        ],
        'create'    => [
            'header' => 'Creating User',
        ],
    ],

    'file_manager' => [
        'index'     => [
            'title'     => 'File Manager',
            'desc'      => '',
            'header'    => 'File Manager',
        ],
    ],

    'tags' => [
        'pages' => [
            'index' => [
                'title'     => 'Manajeent Tag',
                'desc'      => '',
                'header'    => 'Management Tag',
                'badge'     => ':total Tags Total',
            ],
            'create' => [
                'title'     => 'Bikin Tag Baru',
                'desc'      => '',
                'header'    => 'Bikin Tag Baru',
                'badge'     => ':total Tags Total',
            ],
            'update' => [
                'title'     => 'Perbarui Tag',
                'desc'      => '',
                'header'    => 'Perbarui Tag',
                'badge'     => ':total Tag Digunakans',
            ],
        ],
        'table' => [
            'title'  => 'Listing Tags',
            'titles' => [
                'id'                => 'Id',
                'tag'               => 'Tag',
                'title'             => 'Judul',
                'subtitle'          => 'Bahasa',
                'post_image'        => 'Foto',
                'used'              => 'Uses',
                'layout'            => 'Tampilan',
                'meta_description'  => 'Delripsi',
                'direction'         => 'Arah',
                'actions'           => '###',
                'directions'        => [
                    'normal'    => 'Biasa',
                    'reverse'   => 'Terbalik',
                ],
            ],
        ],
    ],

    'sitemap' => [
        'title'             => 'Sitemap Admin',
        'header'            => 'Sitemap Admin',
        'card-title'        => 'Public Sitemap',
        'card-sub-title'    => '<span class="badge badge-secondary badge-pill">There are :count sitemap entries</span>',
        'preview'           => 'Sitemap Preview',
        'footer'            => 'Last Generated on: <strong>:date</srong>',
    ],

];
