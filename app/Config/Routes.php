<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/About', 'Page::about');
$routes->get('/Contact', 'page::contact');
$routes->get('/Faqs', 'page::faqs');
$routes->get('/Biodata', 'page::biodata');
$routes->setAutoRoute(false);
