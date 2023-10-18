<?php

use Core\App;
use Core\Database;

$heading = "Edit Note";

$errors = [];

$db = App::resolve(Database::class);

$currentUserId = 1;

$id = $_GET["id"];
$query = "select * from notes where id = ?";

$note = $db->query($query, [$id])->findOrFail();

authorize($note["user_id"] === $currentUserId);

// $note = $db->query()


view("notes/edit.view.php", [
  "heading" => $heading,
  "errors" => $errors,
  "note" => $note
]);
