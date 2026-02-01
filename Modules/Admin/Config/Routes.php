<?php
// $routes->group('admin', ['namespace' => 'Modules\Admin\Controllers'], function($routes) {
    //     // $routes->get('users', 'Users::index');         // URL: domain.com/admin/users
    // });

$routes->get('admin', '\Modules\Admin\Controllers\Admin::index'); 