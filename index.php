<?php

// require "router.php";

require "functions.php";
require "Database.php";

// connect to the database, and execute a query
$config = require "config.php";

$db = new Database($config["database"], "root", "akandeseun44");

$id = $_GET["id"];
// dieAndDump($_GET["id"]);

$query = "select * from posts where id = ?";

// dieAndDump($query);

$posts = $db->query($query, [$id])->fetch();

dieAndDump($posts);
