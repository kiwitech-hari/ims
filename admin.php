<?php 

 ?>


<!doctype html>
<html class="scroll sidebar-left-collapsed">

	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Assets Management System | AMS</title>
		<meta name="keywords" content="Assets Management System | AMS" />
		<meta name="description" content="Inventory Management system">
		<meta name="author" content="Harry The IT Expert">

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

					<?php
						if ($user_type== "Administrator") {
							//echo "You are admin";
						} else {
											$msg= '<div class="alert alert-danger">
															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
															<strong> Unauthorized Access!</strong> You Are Not Authorized to Access This page.<a href="logout.php" class="alert-link">Login With Another User</a>.
														</div>';
														echo "$msg";
							exit();								
						}
					?>





					<div class="row">
						<div class="col-md-0">
						<!--here we can add anything other-->
						</div>

						<div class="col-md-12">
							<div class="tabs tabs-primary">
								<ul class="nav nav-tabs">
									<li class="active">	
										<a  href="#tab1" data-toggle="tab"><i class="fa  fa-plus-square"></i>  Welcome</a>
									</li>

									<li>
										<a href="userlist.php"><i class="fa fa-user"></i> User List</a>
									</li>
									<li>
										<a href="AvailableAssets.php" ><i class="fa fa-book"></i> Asign Hardware</a>
									</li>
									<li>	
									<a href="NewAssets.php"><i class="fa  fa-plus-square"></i>  Add Assets</a>
									</li>
									<!-- <li>	
									<a href="#tab4" data-toggle="tab"><i class="fa  fa-user"></i>  My Profiles</a>
									</li>
									<li>	
									<a href="#tab5" data-toggle="tab"><i class="fa  fa-rocket"></i>  TAB5</a>
									</li>
									<li>	
									<a href="#tab6" data-toggle="tab"><i class="fa  fa-rocket"></i> TAB6</a>
									</li>
									<li>	
									<a href="#tab7" data-toggle="tab"><i class="fa  fa-rocket"></i>  TAB7</a>
									</li> -->
								</ul>
								<div class="tab-content">
									<div id="tab1" class="tab-pane active">
										<!--tab1 Start -->

										<div class="alert alert-info">

														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

														<strong>Successfull!</strong> You <a href="" class="alert-link"> have login Successfully</a>, Now you can check hardware status and other information.

													</div>
																			
										<!--tab 1 End Here-->
									</div>


									<div id="tab2" class="tab-pane">
										<!--Start TAB2 from here-->
										

																					

										<!--END TAB2 from here-->
									</div>
									
									<!--tab Start -->
									<div id="tab3" class="tab-pane">
										<!--Start Table from here-->

										<!--//////////Asset table //////////-->

															
										
										<!--End Table from here-->
									</div>

									<div id="tab4" class="tab-pane">
										<!--Start TAB4 from here-->
										<?php //include 'inc/profile.php'; ?>

										


										<!--END TAB4 from here-->
									</div>
									<div id="tab5" class="tab-pane">
										<!--Start TAB5 from here-->
										<h3>Welcome to you in TAB 5</h3>
										<!--END TAB5 from here-->
									</div>
									<div id="tab6" class="tab-pane">
										<!--Start TAB6 from here-->
										<h3>Welcome to you in TAB 6</h3>
										<!--END TAB6 from here-->
									</div>
									<div id="tab7" class="tab-pane">
										<!--Start TAB7 from here-->
										<h3>Welcome to you in TAB 7</h3>
										<!--END TAB7 from here-->
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