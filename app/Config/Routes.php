<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('about', 'Page::about');
$routes->get('kontak', 'Page::kontak');
$routes->get('produk', 'Produk::index');
$routes->get('produk/(:num)', 'Produk::detail/$1');

