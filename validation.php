<?php
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

$name = mysqli_real_escape_string($db,$_POST['username']);

$pass = mysqli_real_escape_string($db,$_POST['password']);


$s= "SELECT username , password,email FROM usertable WHERE username ='$name'";
$result=mysqli_query($db,$s);

$row =mysqli_fetch_array($result);
$EncryptPassword = md5($pass);

if( $row['username'] == $name && $row['password'] == $EncryptPassword){
   //echo"sucessfull login";
   session_start();
   $_SESSION['uname']=$name;
   $_SESSION['email']=$row['email'];
   header("location:index.php");
}else{
   alert ('username or password is incorrect');
}
?>