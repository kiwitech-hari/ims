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
									<li>
										<a href="userlist.php"><i class="fa fa-user"></i> User Assets</a>
									</li>
									<li class="active">
										<a href="AvailableAssets.php"><i class="fa fa-book"></i> Available Hardwares</a>
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
										<section class="panel">
													<header class="panel-heading">
														<div class="panel-actions">
															<a href="#" class="fa fa-caret-down"></a>
															<a href="#" class="fa fa-times"></a>
														</div>
												
														<h2 class="panel-title">Asset Details</h2>
													</header>
													<div class="panel-body">
														<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
															<thead>
																<tr>
												                  <th>ID.</th>
												                  <th>Assets</th>
												                  <th>Brand</th>
												                  <th>Modal No</th>
												                  <th>Serial No</th>
												                   <th>Purchase Date</th>
												                  <th>Action</th>
												                </tr>
															</thead>
															<tbody>
																<?php
																//include 'inc/config.php';
																//$fetch="";

																$sql = "SELECT * FROM `it_assets` WHERE `asign_status`='$asign'";
																//echo "$sql";
																$query=mysqli_query($conn,$sql);
																while ($row=mysqli_fetch_array($query)) {
																
							               						   echo "<tr>";
													               echo "<td>".$row['id']."</td>";
													               echo "<td>".$row['category']."</td>";
													               echo "<td>".$row['brand']."</td>";
													               echo "<td>".$row['model_no']."</td>";
													               //echo "<td>".$row['serial_no']."</td>";

													               echo "<td> <a href=Assets.php?Asset_Details=".$row['serial_no'].">".$row['serial_no']."</a></td>";


													               //echo "<td>".$row['other_info']."</td>";
													               echo "<td>".$row['purchase_date']."</td>";
													                           
													                echo "<td>
									               							<div class='actions'>
									               							<a href=Assets.php?id=".$row['id']." class='fa  fa-send' data-original-title='Asign This Asset to any user' data-toggle='tooltip' data-placement='top' title=''></a>
									               							<a href=Assets.php?Asset_Details=".$row['serial_no']." class='fa fa-pencil'>  </a>
									               							<a href=DeleteRecords.php?id=".$row['id']." class='fa fa-times' data-original-title='Delete Everything of This user' data-toggle='tooltip' data-placement='top' title=''>  </a>
									               							</div></td>";
													               echo "</tr>"; 



																 }?>														
															</tbody>
														</table>
													</div>
												</section>
										
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
	</body>
</html>