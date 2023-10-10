<?php

const BASE_PATH = __DIR__ . "/../";
// var_dump(BASE_PATH);

require BASE_PATH . "functions.php";

spl_autoload_register(function ($class) {
  require base_path($class . ".php");
});

// require base_path("Database.php");
// require base_path("Response.php");
require base_path("router.php");


// connect to the database, and execute a query
// $config = require "config.php";

// $db = new Database($config["database"], "root", "akandeseun44");

// $id = $_GET["id"];
// // dieAndDump($_GET["id"]);

// $query = "select * from posts where id = ?";

// // dieAndDump($query);

// $posts = $db->query($query, [$id])->fetch();

// // dieAndDump($posts);
// // 