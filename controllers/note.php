 <?php

  $config = require "config.php";

  $db = new Database($config["database"], "root", "akandeseun44");

  $heading = "Note";
  $currentUserId = 1;

  $id = $_GET["id"];
  $query = "select * from notes where id = ?";

  $note = $db->query($query, [$id])->findOrFail();

  authorize($note["user_id"] === $currentUserId);


  require "./views/note.view.php";
