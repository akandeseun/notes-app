 <?php

  $config = require "config.php";

  $db = new Database($config["database"], "root", "akandeseun44");

  $heading = "Note";

  $id = $_GET["id"];

  $query = "select * from notes where id = ?";


  $note = $db->query($query, [$id])->fetch();

  if (!$note) {
    abort();
  }

  if ($note["user_id"] != 1) {
    abort(403);
  }




  require "./views/note.view.php";
