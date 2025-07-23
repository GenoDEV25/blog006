<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/** $routes->get('/', 'Home::index'); */
$routes->get('/', 'HomeController::index');  // Frontend
$routes->get('/admin', 'AdminController::index'); // Listar posts
$routes->get('/admin/create', 'AdminController::create'); // Formulario nuevo post
$routes->post('/admin/store', 'AdminController::store'); // Guardar post nuevo
$routes->get('/admin/edit/(:num)', 'AdminController::edit/$1'); // Editar post
$routes->post('/admin/update/(:num)', 'AdminController::update/$1'); // Actualizar post
$routes->get('/admin/delete/(:num)', 'AdminController::delete/$1'); // Borrar post

