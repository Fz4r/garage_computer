<?php

// Routes group untuk page admin
$routes->group('admin', ['namespace' => 'Modules\Admin\Controllers', 'filter' => 'auth'], function($routes) {
    $routes->get('', 'Admin::index');
    $routes->get('add', 'Admin::add');      // Menampilkan form
    $routes->post('save', 'Admin::save');   // Memproses data form
    $routes->get('delete/(:num)', 'Admin::delete/$1'); // Route untuk hapus
    $routes->get('edit/(:num)', 'Admin::edit/$1');
    $routes->post('update/(:num)', 'Admin::update/$1');
});


// $routes->get('admin', '\Modules\Admin\Controllers\Admin::index'); 