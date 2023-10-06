 <?php

  $config = require "config.php";

  $db = new Database($config["database"], "root", "akandeseun44");

  $heading = "Note";

  $id = $_GET["id"];

  $query = "select * from notes where id = ? and user_id = 1";


  $note = $db->query($query, [$id])->fetch();




  require "./views/note.view.php";
