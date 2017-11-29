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


define('DB_SERVER', 'ec2-54-75-225-143.eu-west-1.compute.amazonaws.com');
define('DB_USERNAME', 'enznbwvapatltl');
define('DB_PASSWORD', 'aa16bbc494def31054570cb28d07c7f1ed0e06d306124d2f4706f00c2fb0fbd0');
define('DB_DATABASE', 'dfrfju7gis3k9i');


$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(! $conn )
{
die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully<br/>';



?>
