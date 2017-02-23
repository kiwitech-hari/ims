<?php 

//include 'session.php';
 ?>


<!doctype html>
<html class="scroll sidebar-left-collapsed">

	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>IMS|By Harry</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Portal Created by Harry">
		<meta name="author" content="Harry">

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
										<a href="<?php echo "$index";  ?>" ><i class="fa  fa-home"></i> Home</a>
									</li>
									<li class="active">
										<a href="#tab2" data-toggle="tab"><i class="fa  fa-users"></i> Users List</a>
									</li>
									<li>
										<a href="#tab1" data-toggle="tab"><i class="fa  fa-suitcase"></i> All Asigned Assets</a>
									</li>
									

									<li>
										<a href="AvailableAssets.php"><i class="fa fa-book"></i> Available Hardwares</a>
									</li>
									<li>	
									<a href="NewAssets.php"><i class="fa  fa-plus-square"></i>  Add Assets</a>
									</li>
									
									
									
								</ul>
								<div class="tab-content">
									<div id="tab1" class="tab-pane">
										<!--tab1 Start -->

										<section class="panel">
											<header class="panel-heading">
												<div class="panel-actions">
													<a href="#" class="fa fa-caret-down"></a>
													<a href="#" class="fa fa-times"></a>
												</div>
										
												<h2 class="panel-title">All Asigned Assets List</h2>
											</header>
											<div class="panel-body">
												<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
													<thead>
														<tr>
										                  <th>User ID.</th>
										                  <th>Full Name</th>
										                  <!-- <th>Mobile No</th> -->
										                  <th>Asset Name</th>
										                  <th>Serial No</th>
									                	   <th>Asigned Date</th>
									                	   <th>Notes</th>
										                  
										                </tr>
													</thead>
													<tbody>
														<?php
														//include 'inc/config.php';
														//$fetch="";

														$sql = "SELECT * FROM `asigned_assets` WHERE `status`='$status_use'";
														//echo "$sql";
														$query=mysqli_query($conn,$sql);
														while ($row=mysqli_fetch_array($query)) {
														
					               						   echo "<tr>";
											               echo "<td>".$row['userid']."</td>";
											               echo "<td><a href='uassets.php?uid=".$row['userid']."' data-original-title='Check More Details About users' data-toggle='tooltip' data-placement='top' title=''>" .$row['fullname']."</a></td>";
											               //echo "<td>".$row['mobile']."</td>";
											               echo "<td>".$row['asset']. $row['model']."</td>";
											              // echo "<td>".$row['serial_no']."</td>";
											               echo "<td><a href='Assets.php?Asset_Details=".$row['serial_no']."' data-original-title='Check More Details About This Assets' data-toggle='tooltip' data-placement='top' title=''>" .$row['serial_no']."</a></td>";
											               echo "<td>".$row['asign_date']."</td>";
											               echo "<td>".$row['note']."</td>";
											               echo "</tr>"; 



														 }?>														
													</tbody>
												</table>
											</div>
										</section>


										
							
							<!--tab 1 End Here-->
						</div>

						<div id="tab2" class="tab-pane active">
							<!--Start TAB2 from here-->

							<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Users List</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
						                  <th>userid</th>
						                  <th>fullname</th>
						                  <th>email</th>
						                  <th>mobile</th>
						                  <th>dob</th>
						                  
						                  <th>Action</th>
						                </tr>
									</thead>
									<tbody>
										<?php
														//include 'inc/config.php';
														//$fetch="";

														$sql = "SELECT * FROM `users`";
														//echo "$sql";
														$query=mysqli_query($conn,$sql);
														while ($row=mysqli_fetch_array($query)) {
														
					               						   echo "<tr>";
					               						   
											               echo "<td>".$row['userid']."</td>";
											               echo "<td><a href='uassets.php?uid=".$row['userid']."' data-original-title='Check More Details About users' data-toggle='tooltip' data-placement='top' title=''>" .$row['fullname']."</a></td>";
											               echo "<td>".$row['email']."</td>";
											               echo "<td>".$row['mobile']."</td>";
											               echo "<td>".$row['dob']."</td>";
											              	
											                           
											                echo "<td>
							               							<div class='actions'>
							               							<a href=uassets.php?uid=".$row['userid']." class='fa fa-list' data-original-title='Check Users Assets and other Details' data-toggle='tooltip' data-placement='top' title=''></a>
							               							<a href=#".$row['id']." class='fa fa-pencil'>  </a>
							               							<a href=DeleteRecords.php?upass=".$row['userid']." class='fa fa-asterisk' data-original-title='RESET Default Password' data-toggle='tooltip' data-placement='top' title=''>  </a>
							               							</div></td>";

							               							

											               echo "</tr>"; 



														 }?>	
									</tbody>
								</table>
							</div>
						</section>

							
																

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