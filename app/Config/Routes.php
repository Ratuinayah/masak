<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/index', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/faq', 'Pages::faq');
$routes->get('/menu', 'Pages::menu');