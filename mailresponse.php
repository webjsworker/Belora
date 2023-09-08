<?php

class MaillResponse
{
    public $name, $phonenumber, $form , $result ,$status;
    function __construct($name, $phonenumber, $form , $result, $status)
    {
        $this->name = $name;
        $this->phonenumber = $phonenumber;
        $this->form = $form;
        $this->result = $result;
        $this->status = $status;
    }
}


class MaillResponsePrice
{
    public $phonenumber, $part,  $form , $result ,$status;
    function __construct($phonenumber, $part,  $form , $result ,$status)
    {
        $this->phonenumber = $phonenumber;
        $this->part = $part;
        $this->form = $form;
        $this->result = $result;
        $this->status = $status;
    }
}
 
class MaillResponseHelp
{
    public $company,$phonenumber, $part,  $form , $result ,$status;
    function __construct($company, $phonenumber, $part,  $form , $result ,$status)
    {
        $this->company = $company;
        $this->phonenumber = $phonenumber;
        $this->part = $part;
        $this->form = $form;
        $this->result = $result;
        $this->status = $status;
    }
}
?>
 