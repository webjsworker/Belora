<?php
require("user-model.php");
require("controller.php");


$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
  case "GET":
    /* if (isset($_GET["login"]) && isset($_GET["password"])) {
      $user = new User($_GET["login"], $_GET["password"]);
      getUser($user);
    } */
    /* if (!isset($_GET["login"]) && !isset($_GET["password"])) {
      ExitUser();
    } */

    break;
  case "POST":
      if($_POST["form"] == 'call'){
      $user = new User($_POST["name"], $_POST["phonenumber"], $_POST["form"]);
      //echo json_encode($user) ;
      ValidationUser($user);
    }
    if($_POST["form"] == 'price'){
      //echo json_encode($_POST);
      $price = new UserPrice($_POST["phonenumber"], $_POST["part"], $_POST["form"]);
      //echo json_encode($user) ;
      ValidationUserPrice($price);
    }
    if($_POST["form"] == 'help'){

      //echo json_encode($_POST);
      //echo json_encode([$_POST, $_FILES]);


      $help = new UserHelpFile($_POST["company"], $_POST["phonenumber"], $_POST["part"], $_POST["form"], $file= $_FILES["file"]);
      //echo json_encode($help) ;
      ValidationUserHelp($help);
    }
    
   
    /* 'form' */

    
   
   
   /* echo json_encode($user) ; */
    
     /*  if( checkUser($user)){
     getMessage();
       } else {
     addUser($user);
   } ; */
   
    break;

}
?>