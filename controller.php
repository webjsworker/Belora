<?php
require_once("user.php");
require_once("validation.php");

function ValidationUser($user){
     $obj = ValidationForm($user); 
    $formstatus = false;
    foreach ($obj as $key => $value) {
        if ($value == false) {
            $formstatus = true;
            break;
        }
    }
    if ($formstatus) {
        echo json_encode(ValidationForm($user));
    } else {
        return UserService($user, $obj);
    }
};

function ValidationUserPrice($price)
{
    $obj = ValidationFormPrice($price);  
    $formstatus = false;
    foreach ($obj as $key => $value) {
        if ($value == false) {
            $formstatus = true;
            break;
        }
    }
    if ($formstatus) {
        echo json_encode($obj);
    } else {
        return UserServicePrice($price, $obj);
    } 
}

function ValidationUserHelp($help){
    $obj = ValidationFormHelp($help);  
    $formstatus = false;
    foreach ($obj as $key => $value) {
        if ($value == false) {
            $formstatus = true;
            break;
        }
    }
    if ($formstatus) {
        echo json_encode($obj);
    } else {
         return UserServiceHelp($help, $obj);
    } 
}


?>