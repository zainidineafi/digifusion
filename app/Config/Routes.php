<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'IndexController::index');
$routes->get('/index', 'IndexController::index');
$routes->get('/about', 'IndexController::about');
$routes->get('/product', 'IndexController::product');
$routes->get('/product/detail/(:any)', 'IndexController::productDetail/$1');
$routes->get('/artikel', 'IndexController::artikel'); // Route untuk halaman Blog/Artikel
$routes->get('/artikel/detail/(:any)', 'IndexController::articleDetail/$1'); // untuk detail artikel
$routes->get('/contact', 'IndexController::contactUs'); // Rute untuk mengakses halaman kontak
$routes->get('/partnership', 'IndexController::partnership'); // Rute untuk mengakses halaman partner
$routes->get('tampil/partnership', 'PartnershipController::index'); // Untuk menampilkan semua partnership



