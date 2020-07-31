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

$mail = mysqli_real_escape_string($db,$_POST['email']);
$name = mysqli_real_escape_string($db,$_POST['user']);
$cname = mysqli_real_escape_string($db,$_POST['companyname']);
$pass = mysqli_real_escape_string($db,$_POST['password']);
$number = mysqli_real_escape_string($db,$_POST['phoneno']);

$EncryptPassword = md5($pass);

$s = "SELECT email From usertable where email = '$mail'";
$result=mysqli_query($db,$s);

$num =mysqli_num_rows($result);

if( $num == 1)
{
    echo"username or email_id alredy taken";

}
else
{
  $query="INSERT INTO usertable(email,username,companyname,password,phon_no) values ('$mail','$name','$cname','$EncryptPassword','$number')";
  if($db->query($query)){
    echo "<script> aleart(\"success\")</script>";
    header("location:login.php?login=successs");
  }
  else{
    echo "Error:".$query." ".$db->error;
  }
    
}
?>