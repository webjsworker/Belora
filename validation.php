<?php
/* require("controller.php"); */
require("response.php");


function ValidationForm($user) {
    /* echo json_encode(strlen($user->name)); */
    /* if($user->name == ''){ */
        if(strlen($user->name) <= 2){
        $user_name = false;
    } else {
        $user_name = true;
    }
           
       if(!preg_match("/(?:\+|\d)[\d\-\(\) ]{9,}\d/", $user->phonenumber)){
     
        $user_phonenumber = false;
    } else {
        $user_phonenumber =  true;
    }
    return new Response($user_name, $user_phonenumber);

}

function ValidationFormPrice($price){
    if(!preg_match("/(?:\+|\d)[\d\-\(\) ]{9,}\d/", $price->phonenumber)){
     
        $price_phonenumber = false;
    } else {
        $price_phonenumber =  true;
    }
            
    if(strlen($price->part) <= 1){
        $price_part = false;
    } else {
        $price_part = true;
    }
        
    return new ResponsePrice($price_phonenumber, $price_part);
}

function ValidationFormHelp($help){
    if(strlen($help->company) <= 1){
        $help_company = false;
    } else {
        $help_company = true;
    }
    if(!preg_match("/(?:\+|\d)[\d\-\(\) ]{9,}\d/", $help->phonenumber)){
     
        $help_phonenumber = false;
    } else {
        $help_phonenumber =  true;
    }
    if(strlen($help->part) <= 1){
        $help_part = false;
    } else {
        $help_part = true;
    }
    return new ResponseHelp($help_company, $help_phonenumber, $help_part);
}

?>