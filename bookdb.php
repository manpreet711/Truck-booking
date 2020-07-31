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

$company =  mysqli_real_escape_string($db,$_POST['cname']);
$email =  mysqli_real_escape_string($db,$_POST['e-mail']);
$source =  mysqli_real_escape_string($db,$_POST['source']);
$destination =  mysqli_real_escape_string($db,$_POST['destination']);
$vehicletype =  mysqli_real_escape_string($db,$_POST['vehicle']);
$date =  mysqli_real_escape_string($db,$_POST['date']);


$query="INSERT INTO booking(company_name,email,source,destination,type,date,status) values ('$company','$email','$source','$destination','$vehicletype','$date',0)";

if($db->query($query)){
    
    echo "Request sent sucessfully";
    
  }
  else{
    echo "Error:".$query." ".$db->error;
  }

?>