<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Halaman Utama (Frontend)
$routes->get('/', 'Home::index');

$routes->get('/tentang', 'Home::tentang');
$routes->get('/struktur', 'Home::struktur');
$routes->get('/akreditasi', 'Home::akreditasi');
$routes->get('/visi-misi', 'Home::visimisi');
$routes->get('/sarana-prasarana', 'Home::sarana');
$routes->get('/whatsapp', 'Home::whatsapp');

// Admin Dashboard
$routes->get('/admin', 'Admin\Dashboard::index', ['filter' => 'role:admin']);
$routes->get('/admin/dashboard', 'Admin\Dashboard::index', ['filter' => 'role:admin']);
// Halaman Daftar Pengguna (Admin Dashboard)
$routes->get('/admin/userlist', 'Admin\Userlist::index', ['filter' => 'role:admin']);
$routes->get('/admin/userlist/(:num)', 'Admin\Userlist::detail/$1', ['filter' => 'role:admin']);

// Halaman Paket (Admin Dashboard)
$routes->get('/admin/paket', 'Admin\Paket::index', ['filter' => 'role:admin']);
$routes->get('/paket/tambah/', 'Admin\Paket::create', ['filter' => 'role:admin']);
$routes->get('/paket/edit/(:segment)', 'Admin\Paket::edit/$1', ['filter' => 'role:admin']);
$routes->get('/paket/detail/(:any)', 'Admin\Paket::detail/$1', ['filter' => 'role:admin']);
$routes->delete('admin/paket/(:num)', 'Admin\Paket::delete/$1', ['filter' => 'role:admin']);
// Halaman Mobil (Admin Dashboard)
$routes->get('/admin/mobil', 'Admin\Mobil::index', ['filter' => 'role:admin']);
$routes->get('/mobil/tambah/', 'Admin\Mobil::create', ['filter' => 'role:admin']);
$routes->get('/mobil/edit/(:segment)', 'Admin\Mobil::edit/$1', ['filter' => 'role:admin']);
$routes->get('/mobil/detail/(:any)', 'Admin\Mobil::detail/$1', ['filter' => 'role:admin']);
$routes->delete('admin/mobil/(:num)', 'Admin\Mobil::delete/$1', ['filter' => 'role:admin']);
// Halaman Instruktur (Admin Dashboard)
$routes->get('/admin/instruktur', 'Admin\Instruktur::index', ['filter' => 'role:admin']);
$routes->get('/instruktur/tambah/', 'Admin\Instruktur::create', ['filter' => 'role:admin']);
$routes->get('/instruktur/edit/(:segment)', 'Admin\Instruktur::edit/$1', ['filter' => 'role:admin']);
$routes->get('/instruktur/detail/(:any)', 'Admin\Instruktur::detail/$1', ['filter' => 'role:admin']);
$routes->delete('admin/instruktur/(:num)', 'Admin\Instruktur::delete/$1', ['filter' => 'role:admin']);



// Halaman Siswa Dashboard
$routes->get('/siswa', 'Siswa\Dashboard::index', ['filter' => 'role:siswa']);
$routes->get('/siswa/dashboard', 'Siswa\Dashboard::index', ['filter' => 'role:siswa']);

// Halaman Paket (Siswa Dashboard)
$routes->get('/data-paket', 'Siswa\Paket::index', ['filter' => 'role:siswa']);
$routes->get('/data-paket/(:any)', 'Siswa\Paket::detail/$1', ['filter' => 'role:siswa']);

// Halaman Mobil (Siswa Dashboard)
$routes->get('/data-mobil', 'Siswa\Mobil::index', ['filter' => 'role:siswa']);
$routes->get('/data-mobil/(:any)', 'Siswa\Mobil::detail/$1', ['filter' => 'role:siswa']);


// Halaman Pembayaran (Siswa Dashboard)
$routes->get('/siswa/daftar', 'Siswa\Daftar::index', ['filter' => 'role:siswa']);
$routes->get('/pendaftaran', 'Siswa\Daftar::index', ['filter' => 'role:siswa']);
// $routes->get('/siswa/pembayaran/konfirmasi', 'Siswa\Pembayaran::konfirmasi', ['filter' => 'role:siswa']);

// Halaman Pembayaran (Siswa Dashboard)
$routes->get('/siswa/pembayaran', 'Siswa\Pembayaran::index', ['filter' => 'role:siswa']);
$routes->get('/siswa/pembayaran/konfirmasi', 'Siswa\Pembayaran::konfirmasi', ['filter' => 'role:siswa']);

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}