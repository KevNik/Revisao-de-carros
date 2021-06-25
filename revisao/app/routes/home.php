<?php

require './router.php';
use CoffeeCode\Router\Router;

$router = new Router($url);

$router->get('/' function ($data) {
    require './app/views/home.php';
});
 
$router->dispatch();