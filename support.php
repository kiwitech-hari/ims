<?php 

//include 'session.php';
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
									<li>
										<a href="#tab1" data-toggle="tab"><i class="fa fa-user"></i> User Assets</a>
									</li>
									<li class="active">
										<a href="#tab2" data-toggle="tab"><i class="fa fa-book"></i> Support Center</a>
									</li>
									
								</ul>
								<div class="tab-content">
									<div id="tab1" class="tab-pane">
										<!--tab1 Start -->
										
							
							<!--tab 1 End Here-->
						</div>

						<div id="tab2" class="tab-pane active">
							<!--Start TAB2 from here-->
								 <section class="panel">
								<!--
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>
							 		
									<h2 class="panel-title">Asset Details</h2>
								</header> 
								-->
								<div class="panel-body">
									<table class="table table-bordered table-striped mb-none" id="datatable-default">
										<thead>
											<tr>
							                  <th>Date</th>
							                  <th>UserName</th>
							                  <th>Request</th>
							                  <th>Issue</th>
							                  <th>Priority</th>
							                  <th>Status</th>
							                  <th>Actions</th>
							                </tr>
										</thead>
										<tbody>
											<?php 
							              	$sql="SELECT * FROM `itsupport`";       
							         		$query =mysqli_query($conn,$sql);
							                 while ($row = mysqli_fetch_array($query)) { 
							                 //<td><a href='#'>".$row["date"]."</a></td>    
					                      	 echo "<tr>
					                       			  <td>".$row["date"]."</td>
					                       			  <td><a href='uassets.php?uid=".$row['userid']."'data-original-title='Check More Details About users' data-toggle='tooltip' data-placement='top' title=''>".$row["name"]."</a></td>
					                       			 
						                              <td>".$row["sysid"]."</td>         
						                              <td>".$row["probs"]."</td>
						                              <td>".$row["priority"]."</td>	
						                              <td>".$row["status"]."</td>
						                              <td>
						                              <a href=ticket.php?id=".$row['id'].">Update</a>
						                              </td>
						                            </tr>";
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
	</body>
</html>