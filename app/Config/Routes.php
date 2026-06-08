<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');


// CLIENTES
$routes->get('/clientes', 'ClientesController::index');
$routes->get('/clientes/create', 'ClientesController::create');
$routes->post('/clientes/store', 'ClientesController::store');
$routes->get('/clientes/edit/(:num)', 'ClientesController::edit/$1');
$routes->post('/clientes/update/(:num)', 'ClientesController::update/$1');
$routes->get('/clientes/excluir/(:num)', 'ClientesController::excluir/$1');


// PLANOS
$routes->get('/planos', 'PlanosController::index');
$routes->get('/planos/create', 'PlanosController::create');
$routes->post('/planos/store', 'PlanosController::store');
$routes->get('/planos/edit/(:num)', 'PlanosController::edit/$1');
$routes->post('/planos/update/(:num)', 'PlanosController::update/$1');
$routes->get('/planos/excluir/(:num)', 'PlanosController::excluir/$1');


// ASSINATURAS
$routes->get('/assinaturas', 'AssinaturasController::index');
$routes->get('/assinaturas/create', 'AssinaturasController::create');
$routes->post('/assinaturas/store', 'AssinaturasController::store');
$routes->get('/assinaturas/edit/(:num)', 'AssinaturasController::edit/$1');
$routes->post('/assinaturas/update/(:num)', 'AssinaturasController::update/$1');
$routes->get('/assinaturas/excluir/(:num)', 'AssinaturasController::excluir/$1');