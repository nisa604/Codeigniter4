<?php
/**
 * @Author: Your name
 * @Date:   2023-01-30 22:01:07
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-16 11:19:01
 */


namespace Config;

use App\Controllers\c_Mahasiswa;
use App\Models\m_mahasiswa;

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
//$routes->get('/', 'Home::index');
//$routes->get('/', 'c_Mahasiswa::index');
// $routes->get('/', 'v_display_Mahasiswa::index');
// $routes->get('/', 'm_Mahasiswa::index');
// $routes->get('/login', 'c_login::index');

$routes->get('/mahasiswa', 'c_Mahasiswa::add');
$routes->post('/mahasiswa/save', 'c_Mahasiswa::save');
//$routes->get('/template', 'c_home1::index');
$routes->get('/v_home1', 'c_home1::home');
$routes->get('/v_info', 'c_info::info');
$routes->get('/v_display_Mahasiswa', 'c_mahasiswa::index');
$routes->get('/v_detail_mahasiswa/(:segment)','c_mahasiswa::getDetail/$1');


$routes->get('/login', 'c_login::index');
$routes->get('/logout', 'c_login::logout');
$routes->post('/login/auth', 'c_login::auth');
$routes->get('/c_home1', 'c_home1::index');
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
