<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::home');

$routes->get('/berita', 'BeritaController::index');
$routes->get('/berita/create', 'BeritaController::create');
$routes->post('/berita/save', 'BeritaController::save');
$routes->get('/berita/(:segment)', 'BeritaController::detail/$1');
