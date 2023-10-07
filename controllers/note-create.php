<?php

$heading = "New Note";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  dieAndDump($_POST);
}




require "./views/note-create.view.php";
