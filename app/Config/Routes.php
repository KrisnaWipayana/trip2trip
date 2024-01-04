<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Cdashboard::index');
$routes->get('/daftar', 'Cdaftar::daftar');