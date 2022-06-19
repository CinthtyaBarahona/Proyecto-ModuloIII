<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Login
$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::inicio');
$routes->post('/login', 'Home::login');
//usuarios
$routes->get('usuario/listar', 'Usuarios::index');
$routes->get('usuario/crear', 'Usuarios::crear');
$routes->post('usuario/guardar', 'Usuarios::guardar');
$routes->get('usuario/borrar/(:num)', 'Usuarios::borrar/$1');
$routes->get('usuario/editar/(:num)', 'Usuarios::editar/$1');
//roles
$routes->get('roles/listar', 'Roles::index');
$routes->get('roles/crear', 'Roles::crear');
$routes->post('roles/guardar', 'Roles::guardar');
$routes->get('roles/borrar/(:num)', 'Roles::borrar/$1');
$routes->get('roles/editar/(:num)', 'Roles::editar/$1');
$routes->post('roles/actualizar', 'Roles::actualizar');
//centros
$routes->get('centros/listar', 'Centros::index');
$routes->get('centros/crear', 'Centros::crear');
$routes->post('centros/guardar', 'Centros::guardar');
$routes->get('centros/borrar/(:num)', 'Centros::borrar/$1');
$routes->get('centros/editar/(:num)', 'Centros::editar/$1');
$routes->post('centros/actualizar', 'Centros::actualizar');
//dispositivos
$routes->get('dispositivos/listar', 'Dispositivos::index');
$routes->get('dispositivos/crear', 'Dispositivos::crear');
$routes->post('dispositivos/guardar', 'Dispositivos::guardar');
$routes->get('dispositivos/borrar/(:num)', 'Dispositivos::borrar/$1');
$routes->get('dispositivos/editar/(:num)', 'Dispositivos::editar/$1');
$routes->post('dispositivos/actualizar', 'Dispositivos::actualizar');
//incidentes
$routes->get('incidentes/listar', 'Incidentes::index');
$routes->get('incidentes/crear', 'Incidentes::crear');
$routes->post('incidentes/guardar', 'Incidentes::guardar');
$routes->get('incidentes/borrar/(:num)', 'Incidentes::borrar/$1');
$routes->get('incidentes/editar/(:num)', 'Incidentes::editar/$1');
$routes->post('incidentes/actualizar', 'Incidentes::actualizar');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
$routes->get('roles/listar', 'Roles::index');
$routes->get('roles/crear', 'Roles::crear');
$routes->post('roles/guardar', 'Roles::guardar');
$routes->get('roles/borrar/(:num)', 'Roles::borrar/$1');
$routes->get('roles/editar/(:num)', 'Roles::editar/$1');
$routes->post('roles/actualizar', 'Roles::actualizar');