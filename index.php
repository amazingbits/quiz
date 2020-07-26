<?php

ob_start();

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$route = new Router(url(), ":");

$route->namespace("Source\App");
$route->get("/","Web:home");

$route->get("/inicio", "Web:inicio");

$route->post("/sucesso", "Web:sucesso");

$route->namespace("Source\App")->group("/ops");
$route->get("/{errcode}", "Web:error");

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();