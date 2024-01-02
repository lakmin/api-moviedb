<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'MoviedbController::index');
$routes->post('movies/search', 'MoviedbController::search');