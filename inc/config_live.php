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


define('DB_SERVER', 'sql201.1free-host.com');
define('DB_USERNAME', 'frh1_18918097');
define('DB_PASSWORD', '123456');
define('DB_DATABASE', 'frh1_18918097_ims');


$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(! $conn )
{
die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully<br/>';


?>