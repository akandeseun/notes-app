<?php

require "Validator.php";

$heading = "New Note";
$config = require "config.php";

$db = new Database($config["database"], "root", "akandeseun44");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $errors = [];

  $validator = new Validator();

  if ($validator->string($_POST["body"])) {
    $errors["body"] = "A body is required";
  } elseif (strlen($_POST["body"]) > 20) {
    $errors["body"] = "body cannot exceed 20 characters";
  } elseif (strlen($_POST["body"]) < 5) {
    $errors["body"] = "body cannot exceed 20 characters";
  }


  if (empty($errors)) {

    $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
      "body" => $_POST["body"],
      "user_id" => 1
    ]);

    $errors["success"] = "Note added sucessfully";
  }
}




require "./views/note-create.view.php";
