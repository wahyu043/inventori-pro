<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Beranda::index');
$routes->get('/', 'Pages::welcome');
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::auth');
$routes->get('/logout', 'Login::logout');
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/dashboard', 'Dashboard::index');

    $routes->group('barang-masuk', function ($routes) {
        $routes->get('/', 'BarangMasuk::index');
        $routes->get('create', 'BarangMasuk::create');
        $routes->post('store', 'BarangMasuk::store');
        $routes->get('edit/(:num)', 'BarangMasuk::edit/$1');
        $routes->post('update/(:num)', 'BarangMasuk::update/$1');
        $routes->get('delete/(:num)', 'BarangMasuk::delete/$1');
    });
});
$routes->group('barang-masuk', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'BarangMasuk::index');
    $routes->get('create', 'BarangMasuk::create');
    $routes->post('store', 'BarangMasuk::store');
    $routes->get('edit/(:num)', 'BarangMasuk::edit/$1');
    $routes->post('update/(:num)', 'BarangMasuk::update/$1');
    $routes->get('delete/(:num)', 'BarangMasuk::delete/$1');
});
$routes->group('barang-keluar', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'BarangKeluar::index');
    $routes->get('create', 'BarangKeluar::create');
    $routes->post('store', 'BarangKeluar::store');
    $routes->get('edit/(:num)', 'BarangKeluar::edit/$1');
    $routes->post('update/(:num)', 'BarangKeluar::update/$1');
    $routes->get('delete/(:num)', 'BarangKeluar::delete/$1');
});
