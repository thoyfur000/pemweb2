<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        echo view('layout/header', $data);
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        echo view('layout/header', $data);
        return view('pages/about', $data);
        echo view('layout/footer');
    }
}
