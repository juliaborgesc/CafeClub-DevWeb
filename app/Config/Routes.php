<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');
$routes->get('planos', 'Home::planos');
$routes->get('/perfis', 'Home::perfis');
$routes->get('assinar/(:segment)', 'Home::assinar/$1');
$routes->post('cliente/plano',     'Home::salvarPlano');
$routes->get('/admin', 'Home::admin');


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

// CAFES
$routes->get('/cafes', 'CafesController::index');
$routes->get('/cafes/create', 'CafesController::create');
$routes->post('/cafes/store', 'CafesController::store');
$routes->get('/cafes/edit/(:num)', 'CafesController::edit/$1');
$routes->post('/cafes/update/(:num)', 'CafesController::update/$1');
$routes->get('/cafes/excluir/(:num)', 'CafesController::excluir/$1');

// QUIZ
$routes->get('/quiz', 'QuizController::index');
$routes->get('/quiz/pergunta/(:num)', 'QuizController::pergunta/$1');
$routes->post('/quiz/responder', 'QuizController::responder');
$routes->match(['get', 'post'], '/quiz/calculando', 'QuizController::calculando');
$routes->get('/quiz/resultado', 'QuizController::resultado');

// AUTH
$routes->get('/cadastro', 'AuthController::cadastro');
$routes->post('/cadastro', 'AuthController::salvarCadastro');
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::autenticar');
$routes->get('/logout', 'AuthController::logout');

