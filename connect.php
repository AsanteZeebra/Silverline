
<?php

$host = "127.0.0.1";
$username = "silvrato_home";
$password = "silverline02";
$DBname = "silvrato_care";


// Create connection
$conn = mysqli_connect($localhost, $username, $password, $DBname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


?>
