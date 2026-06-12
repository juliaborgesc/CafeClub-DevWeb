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
$routes->get('admin/clientes', 'ClientesController::index');
$routes->get('admin/clientes/create', 'ClientesController::create');
$routes->post('admin/clientes/store', 'ClientesController::store');
$routes->get('admin/clientes/edit/(:num)', 'ClientesController::edit/$1');
$routes->post('admin/clientes/update/(:num)', 'ClientesController::update/$1');
$routes->get('admin/clientes/excluir/(:num)', 'ClientesController::excluir/$1');


// PLANOS
$routes->get('admin/planos', 'PlanosController::index');
$routes->get('admin/planos/create', 'PlanosController::create');
$routes->post('admin/planos/store', 'PlanosController::store');
$routes->get('admin/planos/edit/(:num)', 'PlanosController::edit/$1');
$routes->post('admin/planos/update/(:num)', 'PlanosController::update/$1');
$routes->get('admin/planos/excluir/(:num)', 'PlanosController::excluir/$1');


// ASSINATURAS
$routes->get('admin/assinaturas', 'AssinaturasController::index');
$routes->get('admin/assinaturas/create', 'AssinaturasController::create');
$routes->post('admin/assinaturas/store', 'AssinaturasController::store');
$routes->get('admin/assinaturas/edit/(:num)', 'AssinaturasController::edit/$1');
$routes->post('admin/assinaturas/update/(:num)', 'AssinaturasController::update/$1');
$routes->get('admin/assinaturas/excluir/(:num)', 'AssinaturasController::excluir/$1');

// CAFES
$routes->get('admin/cafes', 'CafesController::index');
$routes->get('admin/cafes/create', 'CafesController::create');
$routes->post('admin/cafes/store', 'CafesController::store');
$routes->get('admin/cafes/edit/(:num)', 'CafesController::edit/$1');
$routes->post('admin/cafes/update/(:num)', 'CafesController::update/$1');
$routes->get('admin/cafes/excluir/(:num)', 'CafesController::excluir/$1');

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

