 <?php

  $config = require "config.php";

  $db = new Database($config["database"], "root", "akandeseun44");

  $heading = "My Notes";

  // $id = $_GET["id"];
  // $user_id = $_GET["user_id"];

  $query = "select * from notes where user_id = 1";


  $notes = $db->query($query)->findAll();

  // dieAndDump($notes);


  require "./views/notes.view.php";
