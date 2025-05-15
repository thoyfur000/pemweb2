<?php

namespace App\Controllers;

class filmfavorit extends BaseController
{
    public function index(): string
    {
        return view('FilmFavorit');
    }
}