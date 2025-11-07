<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Beranda::index');
$routes->get('/', 'Pages::welcome');
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::auth');
