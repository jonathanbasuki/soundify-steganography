<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/team', 'HomeController::team');
$routes->get('/home', 'DashboardController::index');
$routes->post('/data', 'DashboardController::submit_data');
$routes->get('/delete/(.*)', 'DashboardController::delete_data/$1');
$routes->get('/history', 'DashboardController::history');
$routes->get('/about', 'DashboardController::about');

$routes->resource('datacontroller');

service('auth')->routes($routes);

