 <?php

  use Core\Database;



  $heading = "Note";

  $config = require base_path("config.php");
  $db = new Database($config["database"]);

  $currentUserId = 1;

  $id = $_GET["id"];
  $query = "select * from notes where id = ?";

  $note = $db->query($query, [$id])->findOrFail();

  authorize($note["user_id"] === $currentUserId);


  view("notes/show.view.php", [
    "heading" => $heading,
    "note" => $note
  ]);
