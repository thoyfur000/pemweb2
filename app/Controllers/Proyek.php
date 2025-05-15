<?php

namespace App\Controllers;

class proyek extends BaseController
{
    public function index(): string
    {
        return view('Proyek');
    }
}