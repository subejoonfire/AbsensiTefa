<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'RoutesController::login');
$routes->get('/login', 'RoutesController::login');

// Admin Routes
$routes->get('/dashboard', 'RoutesController::dashboard');
$routes->get('/dashboardFilter/(:any)', 'Controllers::dashboardFilter/$1');
// ================


// Operator Routes
$routes->get('/operator/dashboard', 'RoutesController::operatorDashboard');
$routes->post('/addAkunAction', 'Controllers::addAkunAction');
// ================

// Mahasiswa Routes
$routes->get('/form_kehadiran', 'RoutesController::form_kehadiran');
$routes->post('/loginAction', 'Controllers::loginAction');
$routes->post('/kehadiranAction', 'Controllers::kehadiranAction');
$routes->get('/keluarAction', 'Controllers::keluarAction');
// ================

$routes->get('/logout', 'Controllers::logout');
