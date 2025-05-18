<?php 
include("connect.php");

$page = "Service_page";
$count = 1;
$month = date("F");
$year = date("Y");
$ip = $_SERVER['REMOTE_ADDR'];

 $query = "INSERT INTO visitcount (page, visits,month, year,ip_address) VALUES ('$page','$count','$month','$year','$ip')";
  $execute = mysqli_query($conn, $query);
  if($execute === true){
   // echo 'Visitor counted  successfully!';
  }else{
    echo  mysqli_error($conn);
  }

 
?> 