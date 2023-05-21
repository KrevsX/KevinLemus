<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home','Roles','Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/HOME', 'Home::homeD', ['as'=>'show_home']);
$routes->get('/INICIO', 'Home::inicioH', ['as'=>'show_inicio']);
$routes->get('/CRUDI', 'Home::crudI', ['as'=>'show_crudI']);
$routes->get('/ROLES', 'Roles::rolesD', ['as'=>'show_roles']);
$routes->get('/INICIO', 'Start::inicioD', ['as'=>'show_inicio']);
$routes->get('/CRUD', 'Roles::crudD', ['as'=>'show_crud']);
$routes->get('/CONSULTA', 'Roles::consultarD');
$routes->get('/LISTAR', 'Roles::listarD');
$routes->get('/INSERTAR', 'Roles::insertarD');
$routes->get('/ACTUALIZAR', 'Roles::actualizarD');
$routes->get('/ELIMINAR', 'Roles::eliminarD');
$routes->get('/LOGIN', 'Login::loginL', ['as'=>'show_login']);
$routes->post('login/validacion', 'Login::validacion');
$routes->get('/SBLOGIN', 'Login::subloginL');

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
