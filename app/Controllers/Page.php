<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index(): string
    {
        return view('Paris');
    }
    public function FilmFavorit(): string
    {
        return view('FilmFavorit');
    }
    public function MataKuliah(): string
    {
        return view('MataKuliah');
    }
    public function MusicFavorit(): string
    {
        return view('MusicFavorit');
    }
    public function Proyek(): string
    {
        return view('Proyek');
    }
    public function tamplate(): string
    {
        return view('tamplate');
    }
     public function tamplate1(): string
    {
        return view('tamplate1');
    }
     public function tamplate2(): string
    {
        return view('tamplate2');
    }
     public function tamplate3(): string
    {
        return view('tamplate3');
    }
}
