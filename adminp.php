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

$name = mysqli_real_escape_string($db,$_POST['user']);

$pass = mysqli_real_escape_string($db,$_POST['pass']);


$s= "SELECT *FROM adminlogin";
$result=mysqli_query($db,$s);

$row =mysqli_fetch_array($result);

if( $row['username'] == "$name" && $row['password'] == "$pass")
{
   //echo"sucessfull login";
   header("location:admin.php");
}
else
{
   echo"unsuccessfull lloogin";
}

?>