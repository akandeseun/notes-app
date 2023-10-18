<?php

return [
  "/" => "controllers/index.php",
  "/notes" => "controllers/notes/index.php",
  "/note" => "controllers/notes/show.php",
  "/note/create" => "controllers/notes/create.php",
  "/about" => "controllers/about.php",
  "/contact" => "controllers/contact.php",
];

$router->get('/', 'controllers/index.php');
$router->delete('/', 'controllers/notes/destroy.php');
// $router->post('/', 'controllers/index.php');
// $router->get('/', 'controllers/index.php');
