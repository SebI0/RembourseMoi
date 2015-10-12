<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/lol', function () {
    return 'Hello world';
});

$app->run();