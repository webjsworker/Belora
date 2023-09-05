<?php
class Response
{
    public $name, $phonenumber;
    function __construct($name = 'undefined', $phonenumber = 'undefined', )
    {
        $this->name = $name;
        $this->phonenumber = $phonenumber;
    }

}

class ResponsePrice
{
    public $phonenumber, $part;
    function __construct($phonenumber = 'undefined', $part = 'undefined', )
    {
        $this->phonenumber = $phonenumber;
        $this->part = $part;
    }

}
 
class ResponseHelp
{
    public $company, $phonenumber, $part;
    function __construct($company = 'undefined', $phonenumber = 'undefined', $part = 'undefined')
    {
        $this->company = $company;
        $this->phonenumber = $phonenumber;
        $this->part = $part;
    }

}


?>