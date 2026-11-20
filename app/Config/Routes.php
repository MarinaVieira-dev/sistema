<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Rotas públicas
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('contato', 'ConteudoController::contato');
$routes->get('quemsou', 'ConteudoController::quemsou');
$routes->get('produtos', 'ConteudoController::produtos');
$routes->get('habilidades', 'ConteudoController::habilidades');

// Rotas padrão do Shield
service('auth')->routes($routes);

// Rotas que exigem autenticação por sessão
$routes->group('', ['filter' => 'session'], static function ($routes) {
 $routes->get('conteudos', 'Admin\Painel::listar');
 $routes->get('conteudos/editar/(:num)', 'Admin\Painel::editar/$1');
 $routes->post('conteudos/atualizar/(:num)', 'Admin\Painel::atualizar/$1');
});


// Painel: exige login e grupo admin
$routes->get('admin', 'Admin\Painel::index', [
 'filter' => ['session', 'group:admin'],
]);
// Logout: aceita apenas usuários autenticados
//$routes->post('admin/sair', 'Admin\Painel::logout', [
 //'filter' => 'session',
//]);
$routes->post('logout', 'Admin\Painel::logout');