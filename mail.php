<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require_once __DIR__ . '/composer/autoload_real.php';
 
$mail = new PHPMailer-master(true);
$mail->isSMTP();
$mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'emailsms1421@gmail.com';   //username
$mail->Password = 'arpit1421';   //password
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;   

$mail->setFrom('FROM_EMAIL_ADDRESS', 'FROM_NAME');
$mail->addAddress('RECEPIENT_EMAIL_ADDRESS', 'RECEPIENT_NAME');
 
$mail->isHTML(true);
 
$mail->Subject = 'Email subject';
$mail->Body    = '<b>Email Body</b>';
 
$mail->send();
echo 'Message has been sent';


?>