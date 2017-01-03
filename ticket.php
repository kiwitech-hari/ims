<?php 



//include 'session.php';

$id=$_GET['id'];









 ?>





<!doctype html>

<html class="scroll sidebar-left-collapsed">



	<head>



		<!-- Basic -->

		<meta charset="UTF-8">



		<title>Invontary Management System | IMS</title>

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



		<script  src="jquery.min.js"></script>



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

		<section class="body">



			<!-- start: header -->

			<?php require 'inc/header.php';  ?>



			<!-- end: header -->



			<div class="inner-wrapper">

				<!-- start: sidebar -->

				<?php require 'inc/sidebar.php'; ?>

				<!-- end: sidebar -->



				<section role="main" class="content-body">

					<header class="page-header">

						<h2>Hi, <a href="<?php echo "$index";?>"><?php echo "$user_name";?></a></h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="<?php echo "$home"; ?>">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span><?php echo "$user_type"; ?></span></li>

								<li><span> <?php echo "$user_name";?></span></li>

							</ol>

					

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>

						</div>

					</header>



					<!-- start: page -->



					<div class="row">

						<div class="col-md-0">

						<!--here we can add anything other-->

						</div>



						<div class="col-md-12">

							<div class="tabs tabs-primary">

								<ul class="nav nav-tabs">

									<li class="active">

										<a href="#tab1" data-toggle="tab"><i class="fa fa-user"></i> Request Details</a>

									</li>

									<li>

										<a href="support.php" ><i class="fa fa-book"></i> View More Tickets</a>

									</li>

									

								</ul>

								<div class="tab-content">

									<div id="tab1" class="tab-pane active">

										<!--tab1 Start -->





											<?php

								$sql="SELECT * FROM itsupport WHERE id='$id'";

								$query=mysqli_query($conn,$sql);

								$row=mysqli_fetch_array($query);

								$ticket=$row['id'];

								$req_time=$row['date'];

								$req_user=$row['name'];

								$user_email=$row['email'];

								$usr_id=$row['userid'];

								$sysid=$row['sysid'];

								$probs=$row['probs'];

								$status=$row['status'];

								$priority=$row['priority'];

								$solution=$row['solutions'];



								//update ticket if submit button pressed



								if (isset($_POST['asset_return_btn'])) {

									$status_up=$_POST['status'];

									$sol=$_POST['sol'];



									$sql2="UPDATE `itsupport` SET `status`='$status_up',`solutions`='$sol' WHERE id='$id'";

									$query2=mysqli_query($conn,$sql2);

									if ($query2) {

											$msg= '<div class="alert alert-info">

															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

															<strong> Updated !</strong> Ticket Has beed Updated successfull.

														</div>';

														echo "$msg";

									}else{

											$msg= '<div class="alert alert-danger">

															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

															<strong> ERROR !!</strong> Ticket NOT Updated.

														</div>';

														echo "$msg";

											}									

								}







								?>



							<section class="panel">

								<form action="" method="POST">

									<header class="panel-heading">

										<div class="panel-actions">

											<a href="#" class="fa fa-caret-down"></a>

											<a href="#" class="fa fa-times"></a>

										</div>



										<h2 class="panel-title">Request Regarding:-<?php echo $sysid;?> </h2>

										<p class="panel-subtitle">Ticket Generated :<?php echo $req_time;?> Ticket No  <?php echo $ticket;?></p>

									</header>

									<div class="panel-body">

									<div id="alart">

									<!--Alart masg and error msg will visible here-->

										</div>	

																														

									



									<div class="form-group">

										<label class="col-md-3 control-label">Name</label>

										<div class="col-md-4">

											<input type="text" value="<?php echo $req_user;?>" id="name"  class="form-control" readonly>

										</div>

										<label class="col-md-1 control-label">Email</label>

										<div class="col-md-4">

											<input type="text" value="<?php echo $user_email;?>" id="email"  class="form-control" readonly>

										</div>

										

									</div>

									<div class="form-group">

										<label class="col-md-3 control-label">User id</label>

										<div class="col-md-4">

											<input type="text" value="<?php echo $usr_id;?>" id="userid" class="form-control" readonly>

										</div>

										<label class="col-md-1 control-label" for="inputTooltip">Date</label>

										<div class="col-md-4">

											<input type="text" value="<?php echo $req_time;?>" id="req_dt"  class="form-control" readonly> 

										</div>

									</div>

									

									<div class="form-group">

										<label class="col-sm-3 control-label">Ticket Descriptions</label>

										<div class="col-sm-9">

											<textarea id="remark" rows="3" class="form-control" readonly><?php echo $probs;?> </textarea>

										</div>

									</div>



									<div class="form-group">

										<label class="col-sm-3 control-label">Solutions </label>

										<div class="col-sm-9">

											<textarea name="sol" rows="4" class="form-control" ><?php echo "$solution";//echo $today;?> <?php //echo $user_name;?></textarea>

										</div>

									</div>



									<div class="form-group">

										<label class="col-md-3 control-label">Update Ticket<span class="required">*</span></label>

										<div class="col-md-4">

											<select data-plugin-selectTwo class="form-control populate" name="status" >

												<option value="Working Last Reply <?php  echo $today;?> By <?php echo $user_name;?>">Working</option>

												<option value="Pending <?php  echo $today;?>">Pending</option>

												<option value="Closed By <?php echo $user_name;?> on <?php echo $today;?>">Closed</option>	

											</select>

										</div>

										

										



									</div>



									

									<footer class="panel-footer">

										<div class="row">

											<div class="col-sm-9 col-sm-offset-3">

												<button type="submit" name="asset_return_btn" class="btn btn-primary">Submit</button>

												<button type="reset" class="btn btn-default">Reset</button>

											</div>

										</div>

									</footer>

										

									</form>

									</div>

								</section>

										

							

							<!--tab 1 End Here-->

						</div>



						<div id="tab2" class="tab-pane">

							<!--Start TAB2 from here-->



																		



							<!--END TAB2 from here-->

						</div>

					</div>

				</div>

			</div>

		</div>	









					<!-- end: page -->









	<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	-->				

					

					

						

					<!-- end: page -->

				</section>

			</div>



			<?php require 'inc/r_sidebar.php';?>	



		</section>



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