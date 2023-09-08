<?php
class MailBodyCall
{
    public $name, $phonenumber, $title, $strname, $strphone;
    function __construct($name, $phonenumber, $title, $strname = '', $strphone = '')
    {
        $this->name = $name;
        $this->phonenumber = $phonenumber;
        $this->title = $title;
        $this->strname = "Имя:";
        $this->strphone = 'Телефон:';
    }
}

class MailBodyCallPrice
{
    public $phonenumber, $part, $title, $strphone, $strpart ;
    function __construct($phonenumber, $part, $title, $strphone = '', $strpart = '')
    {
        $this->phonenumber = $phonenumber;
        $this->part = $part;
        $this->title = $title;
        $this->strphone = "Телефон:";
        $this->strpart = 'Артикул:';
    }
}
class MailBodyCallHelp
{
    public $company, $phonenumber, $part, $title, $strcompany, $strphone, $strpart ;
    function __construct($company, $phonenumber,  $part, $title, $strphone = '', $strpart = '')
    {
        $this->company = $company;
        $this->phonenumber = $phonenumber;
        $this->part = $part;
        $this->title = $title;
        $this->strcompany = "Компания:";
        $this->strphone = "Телефон:";
        $this->strpart = 'Артикул:';
    }
}

?>