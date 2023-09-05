<?php
require_once("send.php");
/* require_once("db.php");
require_once("auth.php");
require("response.php"); */


/* function SendMailEx($user, $userstatus){
  echo json_encode($userstatus->name, $userstatus->phonenumber, $user->form, 'result = success', $status = 'status') ;
} */

function UserService($user, $userstatus){
 // echo json_encode($userstatus) ;
 SendMail($user, $userstatus);
 //SendMailEx($user, $userstatus); 
}

function UserServicePrice($price, $pricestatus){
  //echo json_encode($pricestatus) ;
  SendMail($price, $pricestatus);

}

function UserServiceHelp($help, $helpstatus){
    //echo json_encode((array)$help->file) ;
    //echo json_encode($_FILES["file"]) ;
    //echo json_encode($_FILES["img"]) ;
    SendMail($help, $helpstatus);
}



/* function ExitUserService()
{
  CloseAuth();
} */


/* function addUserService($user)
{
 // header('Content-Type: application/json; charset=utf-8');
  addUserDB($user);
  echo json_encode(new AddUserSuccssful);
  return;
} */


/* function getUserService($userItem)
{
  $array = getUsers();
  $result = array_filter($array, function ($item) use ($userItem) {
    if ($item['login'] == $userItem->{'login'} && $item['password'] == $userItem->{'password'}) {
      return true;
    }
  });
    GetAuth();
  if (($result)) {
  //  header('Content-Type: application/json; charset=utf-8');
    $user = new UserExistMessages;
    $user->login = $result[array_key_first($result)]['login'];
      echo json_encode($user);
    } else {
    echo json_encode(new UserNotExistMessages);
  }
} */

/* function checkUserService($user){
  $array = getUsers();
  $result = array_filter($array, function ($item) use ($user) {
    if ($item['login'] == $user->{'login'} || $item['email'] == $user->{'email'}) {
      return true;
    }
  });
  if (($result)) {
    return true;
    } else {
    return false;
    }
} */
/* function getUserMessage(){
//  header('Content-Type: application/json; charset=utf-8');
  echo json_encode(new UserHasBeenCreated);
} */
?>