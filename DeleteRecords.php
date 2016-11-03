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
			include 'inc/session.php';

			
			$msg='';
			$error='';


			$select_pass="SELECT `password` FROM `users` WHERE `usertype`='administrator' AND `email`='$usermail'";
			$query=mysqli_query($conn,$select_pass);
			$row=mysqli_fetch_array($query);
			$pass=$row['0'];
	
	
			if (isset($_POST['delete'])) 
			{
				$passwd= md5($_POST['pwd']);

				if ($pass==$passwd)
				{
					//echo "Password Matched";
					if (isset($_GET['id'])) 
					{// DELETE ASSET like laptop desktop etc. from admin panel.
						$del_asset=$_GET['id'];
						$query=mysqli_query($conn,"DELETE FROM `it_assets` WHERE `id`='$del_asset'");
						if (! $query) {$msg = "Unable To Delete Records";}else{ $msg = "Deleted Successfuly";}

						
					}/*elseif (isset($_GET['####']))
						{ //  Delete users Related data from rent Table id =2;
							$deluser=$_GET['####']; // GET ID FROM URL
							$query = mysqli_query($conn,"DELETE FROM `users` WHERE `userid`='$####'");
							if (! $query) {$msg = "Unable To Delete Records";}else{ $msg = "User id : $#####, Deleted Successfuly";}
	
					}elseif (isset($_GET['Ebill_id'])) {
						// Delete EBILL from E-bill tables id=2
						$delbill=$_GET['Ebill_id']; // GET ID FROM URL
							$query = mysqli_query($conn,"DELETE FROM `e_bill` WHERE `id`='$delbill'");
							if (! $query) {$msg = "Unable To Delete Records";}else{ $msg = "Electric Bill Deleted Successfull";}
						
					}elseif (isset($_GET['del_login'])) {
						// Delete EBILL from E-bill tables
						$userlogin=$_GET['del_login']; // GET ID FROM URL
							$query = mysqli_query($conn,"DELETE FROM `users` WHERE `id`='$userlogin'");
							if (! $query) {$msg = "Unable To Delete Records";}else{ $msg = "User Login Deleted Successfull";}


						echo "Ebill data Deleted";
					}*/elseif (isset($_GET['upass'])) {
						// Changed User Password from andmin page 
						$user=$_GET['upass']; // GET ID FROM URL
						$new=md5('123456');
						
							//UPDATE `users` SET `password`=$new WHERE `id`=$update
							$query = mysqli_query($conn,"UPDATE users SET password='$new' WHERE userid='$user'");
							if (! $query) {$msg = "Unable To Delete Records";}else{ $msg = "User ID :- $user, Passowrd Changed Successfull New Passowrd is <b>123456</b>";}

						
					}elseif (isset($_GET['del_id2'])) {
						// Delete EBILL from E-bill tables
						echo "del_id2 data Deleted";
					}elseif (isset($_GET['del_id3'])) {
						// Delete EBILL from E-bill tables
						echo "del_id3 data Deleted";
					}elseif (isset($_GET['del_id4'])) {
						// Delete EBILL from E-bill tables
						echo "del_id4 data Deleted";
					}elseif (isset($_GET['del_id5'])) {
						// Delete EBILL from E-bill tables
						echo "del_id5 data Deleted";
					}else{
						echo "Something Went Wrong";
					}




					// if passwor entered correctly then after 3 second this page redirect to index page.
					header("refresh:7;" .$index);

				}else{ $msg= '<div class="alert alert-danger">
			                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			                       <strong>Failed!</strong> Invalid Password <a href="" class="alert-link"> Check Password and</a>, Try Again Admins Password is Acceptable only.
	                  			</div>';}
			}
		?>
		

		<section class="body-sign body-locked">

			<div class="center-sign">
				<div class="panel panel-sign">
					<div class="panel-body">
						<form action="" method="post">
							<div class="current-user text-center">
								<img src="assets/images/!logged-user.jpg" alt="admin" class="img-circle user-image" />
								<h2 class="user-name text-dark m-none"><a href="<?php echo $index; ?>"><?php  echo "$user_name";?></a> </h2>
								<p class="user-email m-none"><?php  echo "$usermail";?></p>
							</div>
							<div class="form-group mb-lg">
								<div class="center"><?php  echo "$msg";?></div>
									
								<div class="input-group input-group-icon">
									<input id="pwd" name="pwd" type="password" class="form-control input-lg" placeholder="Accept admin Password only" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
								<!--
								<div class="row">
									<div class="col-xs-6">
										<div class="checkbox-custom checkbox-danger">
											<input type="checkbox" checked="" id="checkbox1">
											<label for="checkbox1">Tanents Information</label>
										</div>
										<div class="checkbox-custom checkbox-danger">
											<input type="checkbox" checked="" id="checkbox2">
											<label for="checkbox2">Delete User login</label>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="checkbox-custom checkbox-danger">
											<input type="checkbox" checked="" id="checkbox3">
											<label for="checkbox3">Delete user Rent</label>
										</div>
										<div class="checkbox-custom checkbox-danger">
											<input type="checkbox" checked=""  id="checkbox4">
											<label for="checkbox4">Delete user E-Bills</label>
										</div>
									</div>
								</div> -->

								
								

								
							</div>

							

							<div class="row">
								<div class="col-xs-5">
									<p class="mt-xs mb-none">
										<a href="signin.php">Not <?php  echo "$user_name";?>?</a>
									</p>
								</div>
								<div class="col-xs-7 text-right">
									<button type="submit" name="delete" class="btn btn-danger"><i class="fa  fa-trash-o" > </i>  Submit Request</button>
								</div>
							</div>
						</form>
					</div>
				</div>
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