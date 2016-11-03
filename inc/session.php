<?php 

include 'config.php';
session_start();
$usercheck= $_SESSION['id'];


$sql="SELECT * FROM users WHERE id='$usercheck'";
$query = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
$user_name=$row['fullname'];
$user_dob=$row['dob'];
$user_id=$row['userid'];
$usermail= $row['email'];
$user_mob=$row['mobile'];
$user_type=$row['usertype'];
$profile_pic=$row['userpic'];





//other help full variable alart msg by default




if ($user_type == "Administrator") {
	$index="admin.php";	
}else{
	$index="user.php";
	}


$home="home.php";



if (!isset($_SESSION['id'])) {
	header("location:signin.php");

	}


	

	 ?>