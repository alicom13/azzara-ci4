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
// Azzara Admin HTML
$routes->get('/index.html', 'Azzara::index');
$routes->get('/login.html', 'Azzara::login');
$routes->get('/login2.html', 'Azzara::login2');
$routes->get('/messages.html', 'Azzara::messages');
$routes->get('/projects.html', 'Azzara::projects');
$routes->get('/starter-template.html', 'Azzara::starter_template');
$routes->get('/userprofile.html', 'Azzara::userprofile');
$routes->get('/widgets.html', 'Azzara::widgets');
$routes->get('/404.html', 'Azzara::error404');

// Components
$routes->get('/components/avatars.html', 'Components::avatars');
$routes->get('/components/buttons.html', 'Components::buttons');
$routes->get('/components/flaticons.html', 'Components::flaticons');
$routes->get('/components/font-awesome-icons.html', 'Components::font_awesome_icons');
$routes->get('/components/gridsystem.html', 'Components::gridsystem');
$routes->get('/components/lists.html', 'Components::lists');
$routes->get('/components/notifications.html', 'Components::notifications');
$routes->get('/components/panels.html', 'Components::panels');
$routes->get('/components/sweetalert.html', 'Components::sweetalert');
$routes->get('/components/typography.html', 'Components::typography');
// Charts
$routes->get('/charts/charts.html', 'Charts::charts');
$routes->get('/charts/sparkline.html', 'Charts::sparkline');
// Forms
$routes->get('/forms/forms.html', 'Forms::forms');
// Maps
$routes->get('/maps/fullscreenmaps.html', 'Maps::fullscreenmaps');
$routes->get('/maps/googlemaps.html', 'Maps::googlemaps');
$routes->get('/maps/jqvmap.html', 'Maps::jqvmap');
// Tables
$routes->get('/tables/datatables.html', 'Tables::datatables');
$routes->get('/tables/tables.html', 'Tables::tables');


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
