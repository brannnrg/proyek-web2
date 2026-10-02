<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'beranda',
        ];
        return view('pages/home', $data);
    }
}
