<?php

namespace App\Controllers;

class musicfavorit extends BaseController
{
    public function index(): string
    {
        return view('MusicFavorit');
    }
}