<?php

use Core\Response;

function dieAndDump($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

function urlIs($value)
{
  return parse_url($_SERVER['REQUEST_URI'])['path'] === $value;
}

function routeToController($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require base_path($routes[$uri]);
  } else {
    abort();
  }
}

function abort($code = 404)
{
  http_response_code($code);
  require base_path("views/{$code}.php");
  die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
  if (!$condition) {
    abort($status);
  }
}

function base_path($path)
{
  return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
  extract($attributes);
  return  require base_path("views/" . $path);
}
