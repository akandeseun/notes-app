 <?php

  $config = require base_path("config.php");

  $db = new Database($config["database"], "root");

  $heading = "My Notes";

  // $id = $_GET["id"];
  // $user_id = $_GET["user_id"];

  $query = "select * from notes where user_id = 1";


  $notes = $db->query($query)->findAll();

  // dieAndDump($notes);


  view("notes/index.view.php", [
    "heading" => $heading,
    "notes" => $notes
  ]);
