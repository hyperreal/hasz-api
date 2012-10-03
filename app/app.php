<?php

require_once __DIR__ . '/bootstrap.php';

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$api = new Silex\Application();

$api->get('/', function() use ($api) {
        return 'Welcome to <code>/hasz/api</code>. Are you looking for some <code>/docs</code>?';
    });

$api->post('/upload', function(Request $request) use ($api) {
        return '';
    });

$api->get('/file/{id}', function ($name) use ($api) {
        return $api->json(array(
            'name' => 'name',
        ));
    });


return $api;