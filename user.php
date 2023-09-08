<?php
require_once("send.php");

function UserService($user, $userstatus){
  SendMail($user, $userstatus);
 }

function UserServicePrice($price, $pricestatus){
  SendMail($price, $pricestatus);
}

function UserServiceHelp($help, $helpstatus){
    SendMail($help, $helpstatus);
}
?>