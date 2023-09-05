<?php
require_once("user.php");
require_once("validation.php");

function ValidationUser($user){
    //  echo json_encode(ValidationForm($user)) ;
    $obj = ValidationForm($user); // send object true/false
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
        //echo json_encode(ValidationForm($user));
        return UserService($user, $obj);
    }
};

function ValidationUserPrice($price)
{
    // echo json_encode($price);
    
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
        //echo json_encode(ValidationFormPrice($price));
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
        //echo json_encode($obj);
        //echo json_encode(ValidationFormPrice($price));
        return UserServiceHelp($help, $obj);
    } 
}


?>