<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ===============================
// 🔰 Halaman Publik (Tanpa Login)
// ===============================

// Home
$routes->get('/', 'Beranda::index');

// Login
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::auth');

// Logout
$routes->get('/logout', 'Login::logout');


// =========================================
// 🔐 Halaman Internal (Wajib Login / Auth)
// =========================================
$routes->group('', ['filter' => 'auth'], function ($routes) {

    // Dashboard
    $routes->get('/dashboard', 'Dashboard::index');

    // Data Barang (Katalog Barang)
    $routes->get('/barang', 'Barang::index');

    // ============================
    // 📦 Barang Master
    // ============================
    $routes->group('barang', ['filter' => 'auth'], function ($routes) {
        $routes->get('/', 'Barang::index');
        $routes->get('create', 'Barang::create');
        $routes->post('store', 'Barang::store');
        $routes->get('edit/(:num)', 'Barang::edit/$1');
        $routes->post('update/(:num)', 'Barang::update/$1');
        $routes->get('delete/(:num)', 'Barang::delete/$1');
    });

    // ============================
    // 📦 Barang Masuk
    // ============================
    $routes->group('barang-masuk', function ($routes) {
        $routes->get('/', 'BarangMasuk::index');
        $routes->get('create', 'BarangMasuk::create');
        $routes->post('store', 'BarangMasuk::store');
        $routes->get('edit/(:num)', 'BarangMasuk::edit/$1');
        $routes->post('update/(:num)', 'BarangMasuk::update/$1');
        $routes->get('delete/(:num)', 'BarangMasuk::delete/$1');
    });


    // ============================
    // 📤 Barang Keluar
    // ============================
    $routes->group('barang-keluar', function ($routes) {
        $routes->get('/', 'BarangKeluar::index');
        $routes->get('create', 'BarangKeluar::create');
        $routes->post('store', 'BarangKeluar::store');
        $routes->get('edit/(:num)', 'BarangKeluar::edit/$1');
        $routes->post('update/(:num)', 'BarangKeluar::update/$1');
        $routes->get('delete/(:num)', 'BarangKeluar::delete/$1');
    });

    // ============================
    // 📤 Cetak laporan harian
    // ============================
    $routes->group('laporan', ['filter' => 'auth'], function ($routes) {
        $routes->get('/', 'Laporan::index');
        $routes->get('filter', 'Laporan::filter');
        $routes->get('pdf', 'Laporan::pdf');
    });
});
