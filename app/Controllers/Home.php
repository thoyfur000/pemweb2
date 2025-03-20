<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string

    {
        return view('welcome_message');
    }
}
$routes->get('/', 'Home::index');
