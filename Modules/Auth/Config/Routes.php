<?php
// $routes->group('admin', ['namespace' => 'Modules\Admin\Controllers'], function($routes) {
    //     // $routes->get('users', 'Users::index');         // URL: domain.com/admin/users
    // });

$routes->get('auth', '\Modules\Auth\Controllers\Auth::index'); 