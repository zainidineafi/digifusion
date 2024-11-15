<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//start admin
$routes->get('/dashboard_admin', 'admin\DashboardController::index');

$routes->get('admin/meta/index', 'admin\MetaController::index');
$routes->get('admin/meta/tambah', 'admin\MetaController::tambah');
$routes->post('admin/meta/proses_tambah', 'admin\MetaController::proses_tambah');
$routes->get('admin/meta/edit/(:num)', 'admin\MetaController::edit/$1');
$routes->post('admin/meta/proses_edit/(:num)', 'admin\MetaController::proses_edit/$1');
$routes->get('admin/meta/delete/(:any)', 'admin\MetaController::delete/$1');

//end admin

//start user
$routes->get('/', 'IndexController::index');
$routes->get('/index', 'IndexController::index');
// $routes->get('/about', 'IndexController::about');
$routes->get('/product', 'IndexController::product');
$routes->get('/product/detail/(:any)', 'IndexController::productDetail/$1');
$routes->get('/artikel', 'IndexController::artikel'); // Route untuk halaman Blog/Artikel
$routes->get('/artikel/detail/(:any)', 'IndexController::articleDetail/$1'); // untuk detail artikel
$routes->get('/contact', 'IndexController::contactUs'); // Rute untuk mengakses halaman kontak
$routes->get('/partnership', 'IndexController::partnership'); // Rute untuk mengakses halaman partner
$routes->get('tampil/partnership', 'PartnershipController::index'); // Untuk menampilkan semua partnership
$routes->get('/about', 'AboutController::about');




