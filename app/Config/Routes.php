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

$routes->get('admin/founder/index', 'admin\FounderController::index');
$routes->get('admin/founder/tambah', 'admin\FounderController::tambah');
$routes->post('admin/founder/proses_tambah', 'admin\FounderController::proses_tambah');
$routes->get('admin/founder/edit/(:num)', 'admin\FounderController::edit/$1');
$routes->post('admin/founder/proses_edit/(:num)', 'admin\FounderController::proses_edit/$1');
$routes->get('admin/founder/delete/(:any)', 'admin\FounderController::delete/$1');

$routes->get('admin/link_founder/index', 'admin\LinkFounderController::index');
$routes->get('admin/link_founder/tambah', 'admin\LinkFounderController::tambah');
$routes->post('admin/link_founder/proses_tambah', 'admin\LinkFounderController::proses_tambah');
$routes->get('admin/link_founder/edit/(:num)', 'admin\LinkFounderController::edit/$1');
$routes->post('admin/link_founder/proses_edit/(:num)', 'admin\LinkFounderController::proses_edit/$1');
$routes->get('admin/link_founder/delete/(:any)', 'admin\LinkFounderController::delete/$1');

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
