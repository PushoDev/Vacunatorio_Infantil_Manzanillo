<?php

use CodeIgniter\Debug\Toolbar\Collectors\Routes;
use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Filters\Filter;

/**
 * @var RouteCollection $routes
 */


// ------------------ \\
#  Inicio del Proyecto #
// ------------------ //

$routes->get ('/', 'Home::index');
#Ruta que hace la funcion y consulta del login
$routes->post ('/login', 'Home::login');

// Protección de Rutas
$routes->group('administrador', ['filter' => 'admin'], function ($routes) {
    // Aquí puedes definir las rutas dentro de "/admin"
    // Estas rutas estarán protegidas por el filtro "admin".
});


// ------------------------------------ \\
#  Plantilla de Administracion -- ADMIN  #
// ------------------------------------ //
$routes->get ('/admin', 'Home::home_admin');


// ------------------ \\
#  Plantilla Infantil  #
// ------------------ //
//Lista Infantil
$routes->get ('/infantil_list', 'Home::infantil_list');
//Agregar Infantil
$routes->get ('/infantil_new', 'Home::infantil_new');
$routes->post('/nuevo_infante', 'Home::nuevo_infante');
//Buscar Infantil
$routes->get ('/infantil_search', 'Home::infantil_search');
//Obtener y Actualizar Infantil
$routes->get ('/infantil_update/(:any)', 'Home::infantil_update/$1');
$routes->post('/infantil_update/(:any)', 'Home::actualizarinfantil/$1');
// Eliminar Infantil
$routes->get('/infantil_delete/(:any)', 'Home::eliminarinfantil/$1');


// ---------------- \\
#  Plantilla Vacunas #
// ---------------- //
//Lista Vacunas
$routes->get ('/vacunas_list', 'Home::vacunas_list');
//Agregar vacunas
$routes->get ('/vacunas_new', 'Home::vacunas_new');
$routes->post('/nueva_vacuna', 'Home::nueva_vacuna');
//Buscar Vacunas
$routes->get ('/vacunas_search', 'Home::vacunas_search');
//Obtener y actualizar las Vacunas
$routes->get ('/vacunas_update/(:any)', 'Home::vacunas_update/$1');
$routes->post('/vacunas_update/(:any)', 'Home::actualizarvac/$1');
//Eliminar Vacuna
$routes->get ('/vacunas_delete/(:any)', 'Home::eliminarvacuna/$1');



// ------------------ \\
#  Datos de la Entidad #
// ------------------ //
$routes->get ('/entidad', 'Home::entidad');

// ----------------- \\
#  Salir del Proyecto #
// ----------------- //
$routes->get ('/salir', 'Home::salir');