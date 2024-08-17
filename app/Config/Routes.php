<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LoginsController::index');
$routes->get('/administrator', 'LoginsController::admin');
