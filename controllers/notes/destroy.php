 <?php

  use Core\App;
  use Core\Database;

  $heading = "Note";

  $db = App::resolve(Database::class);

  $currentUserId = 1;

  // dieAndDump($_SERVER["REQUEST_METHOD"]);

  $id = $_POST["id"];
  $query = "select * from notes where id = ?";
  $note = $db->query($query, [$id])->findOrFail();

  authorize($note["user_id"] === $currentUserId);
  $query = "delete from notes where id = ?";

  $db->query($query, [$id]);

  // sends a raw http header to the browser
  header("location: /notes");
  exit();
