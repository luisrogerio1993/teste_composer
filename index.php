<?php
require_once 'vendor/autoload.php';

$app = new Silex\Application;
$app['debug'] = true;
$app->get("/hello", function(){
    return "Hello Word!";
});

$app->run();