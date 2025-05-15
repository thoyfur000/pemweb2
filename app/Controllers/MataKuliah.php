<?php

namespace App\Controllers;

class matakuliah extends BaseController
{
    public function index(): string
    {
        return view('MataKuliah');
    }
}