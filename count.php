<?php 
include("connect.php");

$page = "Home_page";
$count = 1;
$month = date("F");
$year = date("Y");
$ip = $_SERVER['REMOTE_ADDR'];

$todaysDate = date("Y-m-d");
 $query = "INSERT INTO visitcount (page, visits,month, year,ip_address,visit_date ) VALUES ('$page','$count','$month','$year', '$ip','$todaysDate')";
  $execute = mysqli_query($conn, $query);
  if($execute === true){
   // echo 'Visitor counted  successfully!';
  }else{
    echo  mysqli_error($conn);
  }
 
?> 