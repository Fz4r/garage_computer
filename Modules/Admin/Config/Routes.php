<?php

// Routes group untuk page admin
$routes->group('admin', ['namespace' => 'Modules\Admin\Controllers', 'filter' => 'auth'], function($routes) {
    $routes->get('', 'Admin::index');
});

// $routes->get('admin', '\Modules\Admin\Controllers\Admin::index'); 