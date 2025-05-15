<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
<<<<<<< HEAD
$routes->get('/About', 'Page::about');
$routes->get('/Contact', 'page::contact');
$routes->get('/Faqs', 'page::faqs');
$routes->get('/Biodata', 'page::biodata');
$routes->setAutoRoute(true);
$routes->get('/contact', 'pages::index');
=======
$routes->get('/pagefilmfavorit', 'page::FilmFavorit');
$routes->get('/pagematakuliah', 'page::MataKuliah');
$routes->get('/pagemusicfavorit', 'page::MusicFavorit');
$routes->get('/pageproyek', 'page::Proyek');
$routes->get('/tamplate', 'page::tamplate');
$routes->get('/tamplate1', 'page::tamplate1');
$routes->get('/tamplate2', 'page::tamplate2');
$routes->get('/tamplate3', 'page::tamplate3');
>>>>>>> e130526 (pertemuan 9)
