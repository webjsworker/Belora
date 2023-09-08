<?php
class User
{
    public $name, $phonenumber, $form, $title, $value1, $value2;
    function __construct($name = '', $phonenumber = '', $form = '', $value1 = '', $value2 = '')
    {
        $this->name = $name;
        $this->phonenumber = $phonenumber;
        $this->form = $form;
        $this->title = 'Заказать звонок';
    }
}

class UserPrice
{
    public $phonenumber, $part, $form, $title;
    function __construct($phonenumber = '', $part = '', $form = '')
    {
        $this->phonenumber = $phonenumber;
        $this->part = $part;
        $this->form = $form;
        $this->title = 'Запросить цены';
    }
}

class UserHelpFile
{
    public $company, $phonenumber, $part, $form, $title ,$file;
    function __construct($company = '', $phonenumber = '', $part= '',$form = '', $title = '',  $file = 'none')
    {
        $this->company = $company;
        $this->phonenumber = $phonenumber;
        $this->part = $part;
        $this->form = $form;
        $this->title = 'Подбор по фото';
        $this->file = $_FILES["file"];
    }
}
?>
