<?php

require "Validator.php";

$heading = "New Note";
$config = require "config.php";

$db = new Database($config["database"], "root", "akandeseun44");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $errors = [];

  // $validator = new Validator();

  // validates the body against the validator class
  if (!Validator::string($_POST["body"], 1, 20)) {
    $errors["body"] = "Body should not be empty and contain maximum number of 20 characters";
  }


  if (empty($errors)) {

    $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
      "body" => $_POST["body"],
      "user_id" => 1
    ]);

    $errors["success"] = "Note added sucessfully";
  }
}



view("notes/create.view.php", [
  "heading" => $heading,
  "errors" => $errors
]);
