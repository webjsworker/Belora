<?php
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
require 'mailresponse.php';
require 'mailbody.php';

function SetBody($value, $param, $str1, $str2)
{
    $setbody = "<h2>Новое письмо</h2>
<b>$str1</b> $value<br>
<b>$str2</b> $param<br>";
    return $setbody;
}
function SetBodyHlp($value, $param, $param2, $str1, $str2, $str3)
{
    $setbody = "<h2>Новое письмо</h2>
<b>$str1</b> $value<br>
<b>$str2</b> $param<br>
<b>$str3</b> $param2<br>";
    return $setbody;
}


function SendMail($user, $userstatus)
{
    $file = "none";
    if ($user->form == 'call') {
        $mailbody = new MailBodyCall($user->name, $user->phonenumber, $user->title);
        $title = $mailbody->title;
        $body = SetBody($mailbody->name, $mailbody->phonenumber, $mailbody->strname, $mailbody->strphone);
    }
    if($user->form == 'price'){
        $mailbody = new MailBodyCallPrice($user->phonenumber, $user->part, $user->title);
        $title = $mailbody->title;
        $body = SetBody($mailbody->phonenumber, $mailbody->part, $mailbody->strphone, $mailbody->strpart);
    }

    if($user->form == 'help'){
        $mailbody = new MailBodyCallHelp($user->company, $user->phonenumber, $user->part,  $user->title);
        $title = $mailbody->title;
        $body = SetBodyHlp($mailbody->company, $mailbody->phonenumber, $mailbody->part, $mailbody->strcompany, $mailbody->strphone, $mailbody->strpart);
        $file =  $_FILES["img"]; 
    }
     $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
        $mail->isSMTP();
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth = true;
        //$mail->SMTPDebug = 2;
        $mail->Debugoutput = function ($str, $level) {
            $GLOBALS['status'][] = $str;
        };

        // Настройки вашей почты
        $mail->Host = 'smtp.gmail.com'; // SMTP сервера вашей почты
        $mail->Username = 's44tptestphp@gmail.com'; // Логин на почте
        $mail->Password = 'dqobvlbfcqovcbkd'; // Пароль на почте
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('s44tptestphp@gmail.com', 'Заказ Белора'); // Адрес самой почты и имя отправителя
        // Получатель письма
        $mail->addAddress('leshamaster@yandex.by');
        //$mail->addAddress('youremail@gmail.com'); // Ещё один, если нужен
       
        if (!empty($file['name'])) {
                $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['file']['name']));
                $filename = $_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
                $mail->addAttachment($uploadfile, $filename);
           } 
        
        // Отправка сообщения
        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body = $body;

        // Проверяем отравленность сообщения
        $status = 'status';
        if ($mail->send()) {
            $result = "success";
        } else {
            $result = "error";
        }
    } catch (Exception $e) {
        $result = "error";
        $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
    }
     if($user->form == 'call'){
        $response = new MaillResponse($userstatus->name, $userstatus->phonenumber, $user->form, $result, $status);
    echo json_encode($response);  
    }
    if($user->form == 'price'){
        $response = new MaillResponsePrice($userstatus->phonenumber, $userstatus->part, $user->form, $result, $status);
        echo json_encode($response); 
    }
    if($user->form == 'help'){
        $response = new MaillResponseHelp($userstatus->company, $userstatus->phonenumber, $userstatus->part, $user->form, $result, $status);
        echo json_encode($response); 
    }
}

?>