<?php

// to set indin current time
$timezone = date_default_timezone_set('Asia/Kolkata');
$today = date("m/d/Y - g:i A");
$c_month_name= date('F');


//other globle variables
$home="home.php";
$status_ret= "Returned";
$status_use= "Using";
$asign= "Available";
$req_status="Pending";
$removed="Removed";


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'support');


$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(! $conn )
{
die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully<br/>';



?>