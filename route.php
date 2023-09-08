<?php
require("user-model.php");
require("controller.php");

$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
  case "GET":
    break;
  case "POST":
      if($_POST["form"] == 'call'){
      $user = new User($_POST["name"], $_POST["phonenumber"], $_POST["form"]);
      ValidationUser($user);
    }
    if($_POST["form"] == 'price'){
            $price = new UserPrice($_POST["phonenumber"], $_POST["part"], $_POST["form"]);
           ValidationUserPrice($price);
    }
    if($_POST["form"] == 'help'){
      $help = new UserHelpFile($_POST["company"], $_POST["phonenumber"], $_POST["part"], $_POST["form"], $file= $_FILES["file"]);
      ValidationUserHelp($help);
    }
   break;
}
?>