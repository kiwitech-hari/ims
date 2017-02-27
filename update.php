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
										<a href="AvailableAssets.php" data-toggle="tab"><i class="fa fa-book"></i> Available Hardwares</a>
									</li>
									<li>	
									<a href="NewAssets.php" data-toggle="tab"><i class="fa  fa-plus-square"></i>  Add Assets</a>
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


								<?php  
										if (isset($_GET['aid'])) {

											$asset_id=$_GET['aid'];

											$query=mysqli_query($conn,"SELECT * FROM it_assets WHERE id='$asset_id'");

											$row=mysqli_fetch_array($query);

											$category=$row['category'];

											$brand=$row['brand'];
											$model_no=$row['model_no'];
											$serial_no=$row['serial_no'];
											$purchase_date=$row['purchase_date'];
											$other_info=$row['other_info'];

																					

										?>

								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
								
										<h2 class="panel-title">Update Details</h2>
									</header>
									<div class="panel-body">
										
										<!--==============================-->
										


										<div class="form-group">
											<label class="col-md-2 control-label">Assets<span class="required">*</span></label>
											<div class="col-md-4">
												<select data-plugin-selectTwo class="form-control populate" id="select_asset"  >
													<option value=<?php echo $category;  ?>><?php echo $category;  ?></option>
													<option value="Laptops">Laptops</option>
							                        <option value="Desktop">Desktop</option>
							                        <option value="UPS">UPS</option>
							                        <option value="Monitor">Monitor</option>
							                        <option value="CPU">CPU</option>
							                        <option value="Keyboard">Keyboard</option>
							                        <option value="Mouse">Mouse</option>
							                        <option value="Hard Disk">Hard Disk</option>
							                        <option value="RAM">RAM</option>
							                        <option value="Router">Router</option>
							                        <option value="Printer">Printer</option>
							                        <option value="Data Cable">Data Cable</option>
							                        <option value="Battery">Battery</option>
							                        <option value="Switch">Switch</option>
							                         <option value="Mobiles">Mobiles</option>
							                         <option value="Iphone">Iphone</option>
							                         <option value="Ipod">Ipod</option>
							                         <option value="Ipad">Ipad</option>
							                         <option value="MiniMac">MiniMac</option>
							                         <option value="MacBook">MacBook</option>
							                         <option value="Tablet">Tablet</option>
							                        <option value="Power Adaptor">Power Adaptor</option>
							                        <option value="Others">Others</option>
											
												</select>
											</div>
											<label class="col-md-2 control-label">Brand</label>
											<div class="col-md-4">
												<select data-plugin-selectTwo class="form-control populate" id="brand"  >
													<option value=<?php echo $brand;  ?>><?php echo $brand;  ?></option>
							                        <option value="Asus">Asus</option>
							                        <option value="Dell">Dell</option>
							                        <option value="Fujitsu">Fujitsu</option>
							                        <option value="HP">HP</option>
							                        <option value="Lenovo">Lenovo</option>
							                        <option value="Apple">Apple</option>
							                        <option value="Sony">Sony</option>
							                        <option value="NetGear">NetGear</option>
							                        <option value="TP Link">TP Link</option>
							                        <option value="D-Link">D-Link</option>
							                        <option value="AOC">AOC</option>
							                        <option value="HCL">HCL</option>
							                        <option value="Philips">Philips</option>
							                        <option value="Hynix">Hynix</option>
							                        <option value="APC">APC</option>
							                        <option value="Cisco">Cisco</option>
							                        <option value="Others">Others</option>
							                        <option value="KingStone">KingStone</option>
							                        <option value="Intex">Intex</option>
							                        <option value="WD">WD</option>
							                        <option value="Seagate">Seagate</option>
												</select>
											</div>
										</div>


										
										<div class="form-group">
											<label class="col-md-2 control-label" for="inputTooltip">Modal No<span class="required">*</span></label>
											<div class="col-md-4">
												<input type="text"  id="modal" title="" data-toggle="tooltip" data-trigger="hover" class="form-control" data-original-title="Place your Asset Modal No" id="inputTooltip" value='<?php echo $model_no;?>'>
											</div>
											<label class="col-md-2 control-label" for="inputTooltip">Date </label>
											<div class="col-md-4">
												<input type="text" placeholder="Purchased Date" title="" data-toggle="tooltip" data-trigger="hover" class="form-control" data-original-title="Select Purchased Date" data-plugin-datepicker id="pur_dt" id="inputTooltip" value=<?php echo $purchase_date;?>>
											</div>
										</div>
																							
										<div class="form-group">
											<label class="col-md-2 control-label" for="inputTooltip">Serial No<span class="required">*</span></label>
											<div class="col-md-10">
												<input type="text"  title="" data-toggle="tooltip" data-trigger="hover" class="form-control" data-original-title="Please Enter Serial No" id="sn" id="inputTooltip"value='<?php echo $serial_no;?>'>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-2 control-label">Asset Details</label>
											<div class="col-sm-10">
												<textarea name="skills" rows="8" class="form-control" placeholder="Describe about asset configration" id="remark" required><?php echo $other_info;?></textarea>
											</div>
											
										</div>
										
										


									</div>






										
										<footer class="panel-footer">

											<div class="row">
												<div class="col-sm-9 col-sm-offset-3">
													<button id="sub" type="submit" value="add_asset" class="btn btn-primary">Submit</button>
													<button type="reset" class="btn btn-default">Reset</button>
												</div>
											</div>
										</footer>
										<!--==============================-->



											
								</section>

								<?php }; ?>


								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
								
										<h2 class="panel-title">Update Details</h2>
									</header>
									<div class="panel-body">
										
										<!--===========Main Part for Update or any other useses===================-->
										


										<H3>Thanks for Visit My Website</H3>
										
										

										<!--===========Main Part for Update or any other useses===================-->
									</div>






										
										<footer class="panel-footer">

											<div class="row">
												<div class="col-sm-9 col-sm-offset-3">
													<button id="sub" type="submit" value="add_asset" class="btn btn-primary">Submit</button>
													<button type="reset" class="btn btn-default">Reset</button>
												</div>
											</div>
										</footer>
										<!--==============================-->



											
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