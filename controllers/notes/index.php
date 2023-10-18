 <?php

  use Core\App;
  use Core\Database;

  $db = App::resolve(Database::class);

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
