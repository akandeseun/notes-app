<?php

use Core\App;
use Core\Database;
use Core\Validator;


require base_path("Core/" . "Validator.php");

$heading = "New Note";
$db = App::resolve(Database::class);

$errors = [];


if (!Validator::string($_POST["body"], 1, 20)) {
  $errors["body"] = "Body should not be empty and contain maximum number of 20 characters";
}

if (!empty($errors)) {
  return view("notes/create.view.php", [
    "heading" => $heading,
    "errors" => $errors
  ]);
}


$db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
  "body" => $_POST["body"],
  "user_id" => 1
]);

$errors["success"] = "Note added sucessfully";

header("location: /notes");
die();
