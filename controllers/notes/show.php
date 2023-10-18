 <?php

  use Core\App;
  use Core\Database;

  $heading = "Note";


  $db = App::resolve(Database::class);

  $currentUserId = 1;

  $id = $_GET["id"];
  $query = "select * from notes where id = ?";

  $note = $db->query($query, [$id])->findOrFail();

  authorize($note["user_id"] === $currentUserId);


  view("notes/show.view.php", [
    "heading" => $heading,
    "note" => $note
  ]);
