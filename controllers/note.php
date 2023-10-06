 <?php

  $config = require "config.php";

  $db = new Database($config["database"], "root", "akandeseun44");

  $heading = "Note";

  $id = $_GET["id"];

  $query = "select * from notes where id = ?";


  $note = $db->query($query, [$id])->fetch();

  // dieAndDump($note["body"]);


  require "./views/note.view.php";
