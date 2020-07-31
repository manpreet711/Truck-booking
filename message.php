<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "manpreetsingh";
$dbname = "saini_transport";
$db=mysqli_connect($host, $dbusername, $dbpassword , $dbname) or die("could not connect to database");

if($db){
  echo "connection done";
}else{
  echo "no connection";
}

mysqli_select_db($db,'saini_transport');

$name =  mysqli_real_escape_string($db,$_POST['name']);
$phone =  mysqli_real_escape_string($db,$_POST['num']);
$email =  mysqli_real_escape_string($db,$_POST['email']);
$subject =  mysqli_real_escape_string($db,$_POST['subject1']);
$message =  mysqli_real_escape_string($db,$_POST['msg']);


$query="insert into message(name,phoneno,email,subject,message) values ('$name','$phone','$email','$subject','$message')";

if($db->query($query)){
    
    echo " Message Sent Sucessfully";
  }
  else{
    echo "Error:".$query." ".$db->error;
  }

?>