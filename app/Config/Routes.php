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
$routes->setDefaultController('Home');
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
$routes->post('/login', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->post('/register', 'Home::form');
$routes->get('logout', 'Home::logout');

$routes->group('', ['filter' => 'authAdminMiddleware'], function ($routes) {

    $routes->get('/admin/users', 'UsersController::index');
    $routes->get('/admin/users/tambah', 'UsersController::new');
    $routes->post('/admin/users', 'UsersController::create');
    $routes->get('/admin/users/edit/(:num)', 'UsersController::edit/$1');
    $routes->post('/admin/users/edit/(:num)', 'UsersController::update/$1');
    $routes->delete('/admin/users/delete/(:num)',   'UsersController::delete/$1');

    $routes->get('/admin/exercise', 'ExerciseController::index');
    $routes->get('/admin/exercise/tambah', 'ExerciseController::new');
    $routes->post('/admin/exercise', 'ExerciseController::create');
    $routes->get('/admin/exercise/edit/(:num)', 'ExerciseController::edit/$1');
    $routes->post('/admin/exercise/edit/(:num)', 'ExerciseController::update/$1');
    $routes->delete('/admin/exercise/delete/(:num)',   'ExerciseController::delete/$1');
});

$routes->group('', ['filter' => 'authUserMiddleware'], function ($routes) {
    $routes->get('/user/home', 'MainController::index');
    $routes->post('/user/hitung', 'MainController::hitung');
    $routes->get('/user/kalori', 'MainController::kalori');
    $routes->get('/user/histori-kalori', 'MainController::histori');
});

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
