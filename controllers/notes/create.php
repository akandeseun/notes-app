<?php

$heading = "New Note";

$errors = [];

view("notes/create.view.php", [
  "heading" => $heading,
  "errors" => $errors
]);
