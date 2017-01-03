<?php 



$msg="";

include 'inc/config.php';

$alart="info hidden";



 ?>





<!doctype html>

<html class="fixed">



	<head>



		<!-- Basic -->

		<meta charset="UTF-8">



		<title>Tenants Management System | TMS</title>

		<meta name="keywords" content="HTML5 Admin Template" />

		<meta name="description" content="Porto Admin - Responsive HTML5 Template">

		<meta name="author" content="okler.net">



		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />



		<!-- Web Fonts  -->

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">



		<!-- Vendor CSS -->

		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />

		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />

		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />



		<!-- Specific Page Vendor CSS -->

		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />

		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />



		



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



//registration form

if (isset($_POST['signup'])) {



	# 1 of 2 Part... ata retrive from ajax

	$fname=ucwords($_POST['fname']); // ucwords for capitalize words

	$phone=$_POST['mob'];

	$dob=$_POST['dob'];



	$userid=ucwords($_POST['usrid']);

	$email=$_POST['email'];

	$pass=$_POST['pwd'];

	$usertype=ucwords($_POST['usertype']);



			//encription for secure Passwords

			$pass= stripcslashes($pass);

			$pass= mysqli_real_escape_string($conn, $pass);

			$pass=md5($pass);	





	if (empty($fname) || empty($email) || empty($userid) || empty($pass)) {

		$alart="danger";

		$type= "Mandatory";

		$msg= "All Fields are required";



		}else{



		$sql="SELECT * FROM users WHERE userid='$userid' || email='$email'";

		$query=mysqli_query($conn,$sql);

		$check=mysqli_num_rows($query);

		if ($check==1) {

			# user already exist.

			$alart="danger";

			$type= "User Exist";

			$msg=  "This User already exist";

		}else{

			$sql="INSERT INTO `users`(`fullname`, `dob`, `userid`, `email`, `mobile`, `password`, `usertype`) VALUES ('$fname','$dob','$userid','$email','$phone','$pass','$usertype')";

			//echo "$sql".'<br>'; 

			$query=mysqli_query($conn,$sql);

			if ($query) {

				$alart="info";

				$type= "Successful!!";

				$msg= "You have been successfully registered"; // Registration is completed Successful!, Thanks

			}else{



				$alart="danger";

				$type= "Failed";

				$msg= "Registration is Failed".mysql_errno().mysql_error();

			}

		}



	}

}//End Registration form.



?>



		<?php 

		/*



		include 'inc/config.php';

		$msg="";

		if(isset($_POST["signup"]))

			{

				if(empty($_POST["fname"]) || empty($_POST["email"]) || empty($_POST["pwd"]) || empty($_POST["pwd_confirm"]))

					{ $msg = "All fields are required.";}

				else{



						$fullname=$_POST['fname'];

						$dob=$_POST['dob'];

						$email=$_POST['email'];

						$userid=$_POST['userid'];

						$mob=$_POST['mob'];

						$pwd=$_POST['pwd'];

						$rpwd=$_POST['pwd_confirm'];

						$usertype='User';



							if ($pwd==$rpwd) {



								// To protect from MySQL injection

								$pwd = stripslashes($pwd);

								$pwd = mysqli_real_escape_string($conn, $pwd);

								$pwd = md5($pwd);



								$sql ="SELECT * From users WHERE userid='$userid' || email='$email'";

								$query=mysqli_query($conn,$sql);

								$check=mysqli_num_row($query)





								$sql="INSERT INTO users (fullname,dob,userid,email,mobile,password,usertype)" . "VALUES('$fullname','$dob','$userid'.'$email','$mob','$pwd','$usertype')";

								$write = mysqli_query($conn, $sql);

									    if($write){ 

											$msg = '<div class="alert alert-info">

														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

														<strong>Successfull!</strong> Your <a href="" class="alert-link"> Your User A/c Created.</a>, you will able to login in few minutes.

													</div>';     

									     	  		 }else{ $msg= '<div class="alert alert-danger">

													                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

													                       <strong>Failed!</strong> Your <a href="" class="alert-link"> Email already Registerd</a>, Or Something went wrong.

											                  		</div>';}}



							else{$msg= '<div class="alert alert-danger">

					                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

					                       <strong>Failed!</strong> Your <a href="" class="alert-link"> Password Not Machted.</a>, Try Again.

			                  		 </div>';}

		      		}	

			}

			*/

		 	?>





		<section class="body-sign">

			<div class="center-sign">

				<a href="/" class="logo pull-left">

					<img src="assets/images/logo.png" height="95" alt="Harry" />

				</a>

				<form action="" method="POST">

				<div class="panel panel-sign">

					<div class="panel-title-sign mt-xl text-right">

						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>

					</div>

					<div class="panel-body">

								

						<!--Thiss is Alart box for php msg-->

						<div class="alert alert-<?php echo "$alart";  ?>">

							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

							<strong><?php echo "$type"; ?> - </strong><?php echo "$msg"; ?>

						</div>



						



						 <form action="" method="post">

						 <!--

							<div class="form-group mb-lg">

								<label>Name</label>

								<select data-plugin-selectTwo class="form-control  input-lg" name="name">

									<?php	/*		

										$qry1=mysqli_query($conn,"SELECT tenants_name FROM tenants ORDER BY tenants_name ASC ");

										while ($row = mysqli_fetch_array($qry1)) {     

										   echo "<option value=".$row["tenants_name"].">".$row["tenants_name"]."</option>";  

									  } */ ?>	

								</select>	

							</div>

							-->

							





							<div class="form-group mb-none">

								<div class="row">

									<div class="col-sm-6 mb-lg">

										<label>Full Name</label>

										<input name="fname" type="text" class="form-control" />

									</div>

									<div class="col-sm-6 mb-lg">

										<label>Date of Birth</label>

										<input name="dob" data-plugin-datepicker type="text" class="form-control" />

									</div>

								</div>

							</div>





							









							<div class="form-group mb-lg">

								<label>E-mail Address</label>

								<input name="email" type="email" class="form-control" />

							</div>



							<div class="form-group mb-none">

								<div class="row">

									<!-- <div class="col-sm-6 mb-lg">

										<label>Employee Type</label>

										<select data-plugin-selectTwo class="form-control  input-lg" name="usertype">

											<option  value="User">User</option>

											<option  value="Administrator">Admin</option>

											<option  value="IT Engineer">IT Engineer</option>

									

										</select>	

									</div> -->

									<div class="col-sm-6 mb-lg">

										<label>Designation</label>

										<input name="usertype" type="text" class="form-control" placeholder="Job Profile." title="" data-toggle="tooltip" data-trigger="hover" class="form-control" data-original-title="Please Enter Job Profile,HR,Software Engineer" id="inputTooltip" />

									</div>

									<div class="col-sm-6 mb-lg">

										<label>Mobile No.</label>

										<input name="mob" type="text" class="form-control" />

									</div>

								</div>

							</div>



							<div class="form-group mb-none">

								<div class="row">

									<div class="col-sm-6 mb-lg">

										<label>User ID</label>

										<input name="usrid" type="text" class="form-control" />

									</div>

									<div class="col-sm-6 mb-lg">

										<label>Password</label>

										<input name="pwd" type="password" class="form-control" />

									</div>

								</div>

							</div>



							<div class="row">

								<div class="col-sm-8">

									<div class="checkbox-custom checkbox-default">

										<input id="AgreeTerms" name="agreeterms" type="checkbox"/>

										<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>

									</div>

								</div>

								<div class="col-sm-4 text-right">

									<button type="submit" name="signup" class="btn btn-primary hidden-xs">Sign Up</button>

									

									<button type="submit" name="signup" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign Up2</button>

								</div>

							</div>

							<!-- some conatins are hide

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">

								<span>or</span>

							</span>



							<div class="mb-xs text-center">

								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>

								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>

							</div>

							</form>-->

							<p class="text-center">Already have an account? <a href="signin.php">Sign In!</a>

							



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

		

		<!-- Specific Page Vendor -->

		<script src="assets/vendor/select2/select2.js"></script>

		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>

		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>

		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>



		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>

		

		<!-- Theme Base, Components and Settings -->

		<script src="assets/javascripts/theme.js"></script>

		

		<!-- Theme Custom -->

		<script src="assets/javascripts/theme.custom.js"></script>

		

		<!-- Theme Initialization Files -->

		<script src="assets/javascripts/theme.init.js"></script>





		<!-- Examples -->

		<script src="assets/javascripts/tables/examples.datatables.default.js"></script>

		<script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>

		<script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>

		<script src="assets/javascripts/ui-elements/examples.modals.js"></script>

		

		<script src="assets/javascripts/ui-elements/examples.notifications.js"></script>

				<!-- below section is open for hide ads which is comming from freee hosting server. -->
		<section class="abc">

	</body>

</html>