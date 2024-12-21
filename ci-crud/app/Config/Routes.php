<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');
$routes->get('/registration', 'Home::registration');
$routes->get('/login', 'Home::login');

$routes->match(['get','post'],'/registerdata','Home::registerdata');
$routes->match(['get','post'],'/logindata','Home::logindata');

$routes->get('homepage', 'CrudController::index');
$routes->post('add', 'CrudController::list');
$routes->get('edit/(:num)', 'CrudController::edit/$1');
$routes->post('update', 'CrudController::update');
$routes->get('delete/(:num)', 'CrudController::delete/$1');



