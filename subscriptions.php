<?php 
include("connect.php");

$email = $_POST['email'];

$month = date("F");
$year = date("Y");
$ip = $_SERVER['REMOTE_ADDR'];

$todaysDate = date("Y-m-d");
 $query = "INSERT INTO subscriptions (email, ip_address, month,year,date ) VALUES ('$email','$ip','$month','$year','$todaysDate')";
  $execute = mysqli_query($conn, $query);
  if($execute === true){
   echo 'Subscription Added successfully!';
  }else{
    echo  mysqli_error($conn);
  }
 
?> 