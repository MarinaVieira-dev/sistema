<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/home','ConteudoController::index');
$routes->get('/contato','ContatoController::contato');
$routes->get('/quemSou','QuemSouController::quemSou');
$routes->get('/produtos','ProdutosController::produtos');
$routes->get('/habilidades','HabilidadesController::habilidades');

