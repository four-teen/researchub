<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



    $routes->get('/', 'Home::index');

    $routes->get('/user', 'User::index', ['filter' => "AuthFilter"]);

    $routes->get('/login', 'User::login', ['filter' => "NoAuthFilter"]);
    $routes->post('/login', 'User::login');

    $routes->get('/logout', 'User::logout');



    $routes->get('user/add', 'User::add');
    $routes->post('user/add', 'User::add');

    $routes->get('user/edit/(:num)', 'User::edit/$1');
    $routes->post('user/edit/(:num)', 'User::edit/$1');

    $routes->get('user/delete/(:num)', 'User::delete/$1');
    $routes->post('user/delete/(:num)', 'User::delete/$1');