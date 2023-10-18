<?php

// find the corresponding note

use Core\App;
use Core\Database;
use Core\Validator;


$db = App::resolve(Database::class);

$heading = "Update";



$currentUserId = 1;

$id = $_POST["id"];
$query = "select * from notes where id = ?";

$note = $db->query($query, [$id])->findOrFail();

// authorize that the current user can edit the note

authorize($note["user_id"] === $currentUserId);

// validate the form
$errors = [];

if (!Validator::string($_POST["body"], 1, 20)) {
  $errors["body"] = "Body should not be empty and contain maximum number of 20 characters";
}

if (!empty($errors)) {
  return view("notes/edit.view.php", [
    "heading" => $heading,
    "errors" => $errors,
    "note" => $note
  ]);
}

// if no validation errors, update the records in the notes table

$db->query(
  "update notes set body = :body where id = :id",
  [
    "body" => $_POST["body"],
    "id" => $_POST["id"]
  ]
);

// redirect the user
header("location: /notes");
die();
