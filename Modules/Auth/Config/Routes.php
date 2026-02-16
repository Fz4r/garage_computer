<?php

// routes group untuk page login
$routes->group('login', ['namespace' => 'Modules\Auth\Controllers'], function($routes) {
    $routes->get('', 'Auth::login');
    $routes->post('process', 'Auth::process'); // Untuk proses form nanti
});
$routes->get('logout', '\Modules\Auth\Controllers\Auth::logout');

// $routes->get('auth', '\Modules\Auth\Controllers\Auth::index'); 