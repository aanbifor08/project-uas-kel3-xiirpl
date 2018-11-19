<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Lara(b)log forms language lines
    |--------------------------------------------------------------------------
    |
    */

    'edit-post' => [
        'id-title'  => 'Id Artikel: :id',
        'title'     => 'Ubah Artikel',
        'labels'    => [
            'post-title'            => 'Judul Artikel',
            'post-subtitle'         => 'Bahasa Artikel',
            'post-post_image'       => 'Foto Artikel',
            'post-image-url'        => 'Foto\Url',
            'post-slug'             => 'Judul Kecil',
            'post-content'          => 'Isi Artikel',
            'post-publish_date'     => 'Tanggal Dirilis',
            'post-publish_time'     => 'Waktu Dirilis',
            'post-is_draft'         => 'Apakah Ini Draf??',
            'post-tags'             => 'Tag Artike',
            'post-layout'           => 'Layout Artikel',
            'post-author'           => 'Penulis Artikel',
            'post-meta_description' => 'Dekripsi',

        ],
        'buttons' => [
            'save-finished'     => '<i class="fa fa-floppy-o fa-fw" aria-hidden="true"></i> Save',
            'save-continue'     => '<i class="fa fa-floppy-o fa-fw" aria-hidden="true"></i> Save',
            'delete'            => '<i class="fa fa-times-circle fa-fw" aria-hidden="true"></i> Delete',
            'choose-image'      => '<i class="nc-icon nc-album-2" aria-hidden="true"></i> Choose Post Image',
        ],
    ],

    'create-post' => [
        'title'     => 'Buat Artikel Baru',
        'badge'     => 'Belu di Save',
    ],

    'create-tag' => [
        'title'     => '<i class="fa fa-tag fa-fw" aria-hidden="true"></i>Buat Tag Baru',
        'labels'    => [
            'tag'                   => 'Tag',
            'title'                 => 'Judul Tag',
            'subtitle'              => 'Bahasa Tag',
            'meta_description'      => 'Dekripsi Tag',
            'tag-post_image'        => 'Tag Foto',
            'tag-image-url'         => 'Tag Foto Path\Url',
            'tag-layout'            => 'Tampilan Tag',
            'reverse_direction'     => 'Urutan Arah',
            'sort-direction'        => [
                'normal'    => 'Normal',
                'reversed'  => 'Terbalik',
            ],
        ],
        'buttons' => [
            'add-new'       => '<i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Tag',
            'choose-image'  => '<i class="nc-icon nc-album-2" aria-hidden="true"></i> Choose Tag Image',
        ],
    ],

    'update-tag' => [
        'title'     => '<i class="fa fa-tag fa-fw" aria-hidden="true"></i> Updating Tag <strong>:tag</strong>',
        'buttons'   => [
            'update'        => '<i class="fa fa-check fa-fw" aria-hidden="true"></i> Update Tag',
            'choose-image'  => '<i class="nc-icon nc-album-2" aria-hidden="true"></i> Choose Tag Image',
        ],
    ],

    'contact' => [
        'labels' => [
            'firstname' => 'Nama Depan *',
            'lastname'  => 'Nama Belakang',
            'email'     => 'Email *',
            'phone'     => 'No HP',
            'message'   => 'Pesan *',
        ],
        'placeholders' => [
            'firstname' => 'Tolong Masukan Nama Depanmu *',
            'lastname'  => 'Tolong Masukan Nama Belakangmu ',
            'email'     => 'Tolong Masukan Emailmu *',
            'phone'     => 'Tolong Masukan No HP ',
            'message'   => 'Pesanmu *',
        ],
        'buttons' => [
            'send' => 'Kirim Pesan',
        ],
        'messages' => [
            'required'  => '<strong>*</strong> Harus Diiisi.',
            'sent'      => 'Terima Kasih sudah Mengrim.',
        ],
        'validation' => [
            'captcha' => 'chapta Harus Diiisi',
        ],
    ],

    'sitemap' => [
        'buttons' => [
            'generate'  => 'Generate Sitemap',
            'view'      => 'View Sitemap',
        ],
        'placeholders' => [
            'limit' => 'Page Limit',
        ],
        'messages' => [
            'success'  => 'Sitemap Generated',
        ],
    ],

];
