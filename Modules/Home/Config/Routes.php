<?php

// Routes untuk home page
$routes->group('/', ['namespace' => 'Modules\Home\Controllers'], function($routes) {
    $routes->get('', 'Home::index');
});

// $routes->get('/', '\Modules\Home\Controllers\Home::index');