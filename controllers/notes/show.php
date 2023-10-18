 <?php

  use Core\Database;



  $heading = "Note";

  $config = require base_path("config.php");
  $db = new Database($config["database"]);

  $currentUserId = 1;

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // dieAndDump($_POST);

    $id = $_POST["id"];
    $query = "select * from notes where id = ?";
    $note = $db->query($query, [$id])->findOrFail();

    authorize($note["user_id"] === $currentUserId);
    $query = "delete from notes where id = ?";

    $db->query($query, [$id]);

    // sends a raw http header to the browser
    header("location: /notes");
    exit();
  } else {

    $id = $_GET["id"];
    $query = "select * from notes where id = ?";

    $note = $db->query($query, [$id])->findOrFail();

    authorize($note["user_id"] === $currentUserId);


    view("notes/show.view.php", [
      "heading" => $heading,
      "note" => $note
    ]);
  }
