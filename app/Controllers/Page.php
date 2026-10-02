<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about(): string
    {
        $data = [
            'title' => 'tentang kami',
            'tim' => ['andika', 'budi', 'citra'],
        ];
        return view('pages/about', $data);
    }

    public function kontak(): string
    {
        $data = [
            'title' => 'kontak',
            'email' => 'info@webdua.test',
            'telp' => '081234567',
            'alamat' => 'Jl. Raya No. 123, Jakarta'
        ];
        return view('pages/kontak', $data);
    }
}