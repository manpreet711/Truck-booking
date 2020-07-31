<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$host = "localhost";
$dbusername = "root";
$dbpassword = "manpreetsingh";
$dbname = "saini_transport";
$db=mysqli_connect($host, $dbusername, $dbpassword , $dbname) or die("could not connect to database");

if($db){
  echo " ";
}else{
  echo "no connection";
}



mysqli_select_db($db,'saini_transport');
$id=$_GET['id'];
if($_GET['s']=='a')
{
    
$sql="UPDATE booking set status = 1 WHERE id='$id'";
if(mysqli_query($db,$sql)){
   $sql2= "SELECT email from booking where id='$id'";
  $result =  mysqli_query($db,$sql2);
  $row = mysqli_fetch_array($result);
  $mailid= $row['email'];

 // Load Composer's autoloader
  require 'vendor/autoload.php';
  
  // Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);
  
  try {
      //Server settings
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'emailsms1421@gmail.com';                     // SMTP username
      $mail->Password   = 'arpit1421';                               // SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
      $mail->Port       = 587;                                    // TCP port to connect to
  
      //Recipients
      $mail->setFrom('emailsms1421@gmail.com', 'Mailer');
      $mail->addAddress($mailid, 'Joe User');     // Add a recipient
     
      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'From Saini Transport Service';
      $mail->Body    = 'Your booking request has been   <b>Sucessfully</b> accepted <br> 
      For Further processing plz contact on the number given below<br> 9699951313';
  
  
      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
}


else{
    $sql="update booking set status = 2 WHERE id='$id'";
    if(mysqli_query($db,$sql)){
        header("location:offers.php");
    } 
}
