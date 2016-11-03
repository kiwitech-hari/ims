<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<?php
session_start();
include("inc/config.php"); //Establishing connection with our database
 
$error = ""; //Variable for storing our errors.
if(isset($_POST["signin"]))
{
if(empty($_POST["userid"]) || empty($_POST["password"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$userid=$_POST['userid'];
$password=$_POST['password'];
 
// To protect from MySQL injection
$userid = stripslashes($userid);
$password = stripslashes($password);
$userid = mysqli_real_escape_string($conn, $userid);
$password = mysqli_real_escape_string($conn, $password);
$password = md5($password);
 
//Check username and password from database
$sql="SELECT * FROM users WHERE userid='$userid' and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//for other informataion and data collecting.
$id=$row['id'];
$uname=$row['fullname'];
$u_id=$row['userid'];
$utype=$row['usertype'];
$uemail=$row['email'];


 
//If username and password exist in our database then create a session.
//Otherwise echo error.
 
if(mysqli_num_rows($result) == 1 AND $utype=='Administrator')
{
	$_SESSION['id'] = $id;
//$_SESSION['username'] = $login_user; // Initializing Session
header("location: admin.php"); // Redirecting To Other Page
}else
{

		if(mysqli_num_rows($result) == 1 AND $utype!=='Administrator')
		{
			$_SESSION['id'] = $id;
		//$_SESSION['username'] = $login_user; // Initializing Session
		header("location: user.php"); // Redirecting To Other Page
		}else
		{
			//$error = "<h4>Incorrect username or password.</h4>";
			$error= '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong> Wrong!!</strong> Incorrect username or password.
				</div>';


			}}
 
}
}
 
?>
		<?php 
		/*
		$msg='';
		include 'inc/config.php';
		session_start();
		if (isset($_POST['signin'])) {
			$uid=$_POST['userid'];
			$upwd=$_POST['pwd'];
			$sql="SELECT * FROM users WHERE  userid='$uid' AND password='$upwd'";
			echo "$sql";
			$query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($query);
			$id=$row['id'];
			$uname=$row['username'];
			$u_id=$row['userid'];
			$utype=$row['usertype'];
			$uemail=$row['email'];


			if ($utype=='Administrator') {
				 $_SESSION['id'] = $id;
				 header("location: index.php");
			}else{//header("location: signin.php");
				
				$msg= '<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <strong>Failed!</strong> Your username or Password <a href="" class="alert-link"> is incorrect.</a>, Try Again.
                   </div>';

		}
		}
*/
		?>


		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="assets/images/logo.png" height="65" alt="Harry Logo" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">
					<?php echo "$error";?>
						<form action="" method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="userid" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<a href="ForgotPassword.php" class="pull-right">Lost Password?</a>
								</div>
								<div class="input-group input-group-icon">
									<input name="password" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button name="signin" type="submit" class="btn btn-primary hidden-xs">Sign In</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
								</div>
							</div>
							<!--
							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div>
								-->
							<p class="text-center">Don't have an account yet? <a href="signup.php">Sign Up!</a>
							

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2014. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>