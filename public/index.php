<?php

use Core\Router;

const BASE_PATH = __DIR__ . "/../";
// var_dump(BASE_PATH);

require BASE_PATH . "Core/" . "functions.php";

spl_autoload_register(function ($class) {
  // "Core\Database"
  $class = str_replace("\\", "/", $class);
  require base_path($class . ".php");
});

// require base_path("Core/" . "router.php");

$router = new Router();


$routes = require base_path("routes.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// routeToController($uri, $routes);
$router->route($uri, "GET");
