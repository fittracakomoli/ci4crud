<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::home');



$routes->get('/berita', 'BeritaController::index');

$routes->get('/berita/create', 'BeritaController::create');
$routes->post('/berita/save', 'BeritaController::save');

$routes->get('/berita/edit/(:segment)', 'BeritaController::edit/$1');
$routes->post('/berita/update/(:num)', 'BeritaController::update/$1');

$routes->delete('/berita/(:num)', 'BeritaController::delete/$1');

$routes->get('/berita/(:any)', 'BeritaController::detail/$1');

$routes->get('/orang', 'OrangController::index');

$routes->post('/orang', 'OrangController::index');
