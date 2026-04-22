<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Artikel::index');

// Routes untuk Artikel
$routes->get('artikel', 'Artikel::index');
$routes->get('artikel/detail/(:num)', 'Artikel::detail/$1');
$routes->get('artikel/tentang', 'Artikel::tentang');
$routes->get('artikel/tambah', 'Artikel::tambah');
$routes->post('artikel/simpan', 'Artikel::simpan');

$routes->get('kontak', 'Kontak::index');
$routes->post('kontak/kirim', 'Kontak::kirim');
// Route untuk halaman Privacy Policy
$routes->get('/privacy-policy', 'Home::privacyPolicy');