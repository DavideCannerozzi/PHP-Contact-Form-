<?php

if(isset($_POST['sendmsg'])){
    $name = $POST['name'];
    $email = $POST['email'];
    $subject = $POST['subject'];
    $message = $POST['message'];

    $mailTo = 'd.cannerozzi@gmail.com'
    $header = 'Email From :'.$email
    $txt = 'You have got an email from'.$name.'.\n'.$message


    mail($mailTo, $header, $subject, $txt)


}



?>