<?php 



$asset_id=$_GET['id'];



$alart="info hidden"



 ?>





<!doctype html>

<html class="scroll sidebar-left-collapsed">



	<head>



		<!-- Basic -->

		<meta charset="UTF-8">



		<title>Invantory Management System | IMS</title>

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

					if (isset($_POST['asset_asign_btn'])) {

						 $userid=$_POST['userid'];

						

						

						$sql2="SELECT fullname,email,mobile FROM users WHERE userid='$userid'";

						$query=mysqli_query($conn,$sql2);

						$row=mysqli_fetch_array($query);

						

						$fullname=$row['fullname'];

					 	$emails=$row['email'];

					  	$mobile=$row['mobile'];



						//data retrived from form.

						$userid=$_POST['userid'];

						$asset=$_POST['asset'];

						$brand=$_POST['brand'];															

						$modal=$_POST['modal'];

						$issue_dt=$_POST['issued'];

						$serial=$_POST['serial'];

						$notes=$_POST['notes'];

						if (empty($userid)) {

						$alart="danger";

						$type= "Mandatory";

						$msg= "Please Select username first";



						}else

						{

						

							$checked=mysqli_query($conn,"SELECT asign_status FROM it_assets WHERE serial_no ='$serial'");

							$row=mysqli_fetch_array($checked);

							$AStatus=$row['asign_status'];

							if ($AStatus!==$asign) {

								$alart="danger";

								$type= "Opps!!";

								$msg= $asset."  ".$brand." (" .$serial.") This Asset Already Asigned To someone"; 

							}else

							{

								$asigned="Asigned";

								$sql_asign= "INSERT INTO `asigned_assets`(`fullname`, `userid`, `email`, `mobile`, `asset`, `brand`, `model`, `serial_no`, `asign_date`, `note`, `status`) VALUES ('$fullname','$userid','$emails','$mobile','$asset','$brand','$modal','$serial','$issue_dt','$notes','$status_use')";

								//echo "$sql_asign";

								$sql_query=mysqli_query($conn,$sql_asign);

								$my_sql=mysqli_query($conn,"UPDATE `it_assets` SET asign_status='$asigned' WHERE `id`='$asset_id'");



								if ($sql_query AND $my_sql) {

									$alart="info";

									$type= "Successful!!";

									$msg= "Asset Asigned Successfuly to ".$fullname." (".$userid.") and Record Updated Successfuly";								

								}else{

									$alart="danger";

									$type= "Failed";

									$msg= "Asset NOT Asigned. Try again".mysql_errno().mysql_error(); 

								}

							}

						}

					} ?>



















					<?php



						if ($user_type== "Administrator") {

							//echo "You are admin";

						} else {

							$alart="danger";

							$type= "Unauthorized Access!";

							$msg= 'You Are Not Authorized to Access This page.<a href="logout.php" class="alert-link">Login With Another User</a>.'.mysql_errno().mysql_error();

							exit();	



						}

					?>





					<!--Thiss is Alart box for php msg-->

						<div class="alert alert-<?php echo "$alart";  ?>">

							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

							<strong><?php echo "$type"; ?> - </strong><?php echo "$msg";// header("refresh:10; index.php");?>

							

							

							



						</div>













					<div class="row">

						<div class="col-md-0">

						<!--here we can add anything other-->

						</div>



						<div class="col-md-12">

							<div class="tabs tabs-primary">

								<ul class="nav nav-tabs">

									<li class="active">

										<a href="#tab1" data-toggle="tab"><i class="fa fa-user"></i> User Assets</a>

									</li>

									<li >

										<a href="<?php echo $index; ?>" ><i class="fa fa-book"></i> Dashboard</a>

									</li>

									

								</ul>

								<div class="tab-content">

									<div id="tab1" class="tab-pane active">

										<!--tab1 Start -->									

										<section class="panel">

											<div class="panel-body">

												

												<div class="row">

													<div class="col-md-8">

														<section class="panel">

														<form action="" method="POST">

															<header class="panel-heading">

																<div class="panel-actions">

																	<a href="#" class="fa fa-caret-down"></a>

																	<a href="#" class="fa fa-times"></a>

																</div>



																<h2 class="panel-title">Asset Asignment System(AAS)</h2>

																<p class="panel-subtitle">Assets Managing on your tips</p>

															</header>

															<div class="panel-body">

															<?php  

																//$asset_id=$_GET['id'];



																$query = mysqli_query($conn,"SELECT * FROM `it_assets` WHERE `id`='$asset_id'");

																$row=mysqli_fetch_array($query);

																$asset=$row['category'];

																$brand=$row['brand'];

																$modal=$row['model_no'];

																$serial=$row['serial_no'];

																$remark=$row['other_info'];

																?>

															

															<div class="form-group">

																<label class="col-md-3 control-label">User Name<span class="required">*</span></label>

																<div class="col-md-9">

																	<select data-plugin-selectTwo class="form-control populate" name="userid" >

																		<option value="" >Select User</option>

																		<?php 



																		$query= mysqli_query($conn," SELECT userid,fullname FROM users");

																		while ($row=mysqli_fetch_array($query)) {

																		echo "<option value=".$row['userid'].">".$row['fullname']." (" . $row['userid'].")</option>";																		

																		}?>

																

																	</select>

																</div>

															</div>															

															<div class="form-group">

																<label class="col-md-3 control-label">Asset</label>

																<div class="col-md-4">

																	<input type="text" name="asset" value="<?php echo "$asset";  ?>" class="form-control" readonly>

																</div>

																<label class="col-md-1 control-label">Brand</label>

																<div class="col-md-4">

																	<input type="text" name="brand" value="<?php echo "$brand";  ?>" class="form-control" readonly>

																</div>

																

															</div>

															<div class="form-group">

																<label class="col-md-3 control-label">Modal No</label>

																<div class="col-md-4">

																	<input type="text" name="modal" value="<?php echo "$modal";  ?>" class="form-control" readonly>

																</div>

																<label class="col-md-1 control-label" for="inputTooltip">Date</label>

																<div class="col-md-4">

																	<input type="text" name="issued" value="<?php echo "$today";  ?>" class="form-control"  data-plugin-datepicker readonly>

																</div>

															</div>

																												

															<div class="form-group">

																<label class="col-md-3 control-label" >Serial No</label>

																<div class="col-md-9">

																	<input type="text" name="serial" value="<?php echo "$serial";  ?>" class="form-control" readonly>

																</div>

															</div>

															

															<div class="form-group">

																<label class="col-sm-3 control-label">Notes</label>

																<div class="col-sm-9">

																	<textarea name="notes" rows="5" class="form-control" placeholder="Describe about This Assets.  <?php echo "$remark";  ?>"></textarea>

																</div>

															</div>





															

															<footer class="panel-footer">

																<div class="row">

																	<div class="col-sm-9 col-sm-offset-3">

																		<button id="sub" type="submit" name="asset_asign_btn" class="btn btn-primary">Submit</button>

																		<button type="reset" class="btn btn-default">Reset</button>

																	</div>

																</div>

															</footer>

																

															</form>

															</div>

														</section>

														

													</div>

													<div class="col-md-4">

													<div class="panel-group" id="accordion2">

														<div class="panel panel-accordion panel-accordion-primary">

															<div class="panel-heading">

																<h4 class="panel-title">

																	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2One">

																		<i class="fa fa-star"></i>Available Assets

																	</a>

																</h4>

															</div>

															<div id="collapse2One" class="accordion-body collapse in">

																

																	

																	<div class="panel-body">

																		<table class="table table-bordered table-striped mb-none">

																			<thead>

																				<tr>

																					<th>Assets</th>

																					<th>Available</th>

																				</tr>

																			</thead>

																			<tbody>

																				

						                    							<?php 

						                    							$sql="SELECT category,COUNT(*) FROM it_assets WHERE `asign_status`='$asign' GROUP BY category LIMIT 10";

						                    							$query=mysqli_query($conn,$sql);

						                    							while ($rowdata=mysqli_fetch_array($query)) {

						                    								

						                    								echo "<tr>

													                              <td>".$rowdata["category"]."</td>

													                              <td>".$rowdata["1"]."</td>   

													                             

													                              </tr>";

						                    							}

						                    							 ?>

						                      

						                     

						                 

						                 							 </tbody>

																	</table>

																</div>

																

																

															</div>

														</div>

														<div class="panel panel-accordion panel-accordion-primary">

															<div class="panel-heading">

																<h4 class="panel-title">

																	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2Two">

																		<i class="fa fa-cogs"></i> Total Assets.

																	</a>

																</h4>

															</div>

															<div id="collapse2Two" class="accordion-body collapse">

																<div class="panel-body">

																	

																	<table class="table table-bordered table-striped mb-none">

																			<thead>

																				<tr>

																					<th>Assets</th>

																					<th>Total</th>

																				</tr>

																			</thead>

																			<tbody>

																				

						                    							<?php 

						                    							$sql="SELECT category,COUNT(*) FROM it_assets GROUP BY category";

						                    							$query=mysqli_query($conn,$sql);

						                    							while ($row=mysqli_fetch_array($query)) {

						                    								

						                    								echo "<tr>

													                              <td>".$row["category"]."</td>

													                              <td>".$row["1"]."</td>   

													                             

													                              </tr>";

						                    							}

						                    							 ?>

						                      

						                     

						                 

						                 							 </tbody>

																	</table>

																	

																		

																



																</div>

															</div>

														</div>

														<div class="panel panel-accordion panel-accordion-primary">

															<div class="panel-heading">

																<h4 class="panel-title">

																	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2Three">

																		<i class="fa fa-cloud"></i> Total Laptops

																	</a>

																</h4>

															</div>

															<div id="collapse2Three" class="accordion-body collapse">

																<div class="panel-body">

																	

																	<table class="table table-bordered table-striped mb-none">

																			<thead>

																				<tr>

																					<th>Laptops</th>

																					<th>Total Laptops</th>

																				</tr>

																			</thead>

																			<tbody>

																				

						                    							<?php 

						                    							$sql="SELECT brand,COUNT(*) FROM `it_assets` WHERE `category`='Laptops' GROUP BY `brand`";

						                    							$query=mysqli_query($conn,$sql);

						                    							while ($row=mysqli_fetch_array($query)) {

						                    								

						                    								echo "<tr>

													                              <td>".$row["brand"]."</td>

													                              <td>".$row["1"]."</td>   

													                             

													                              </tr>";

						                    							}

						                    							 ?>

						                      

						                     

						                 

						                 							 </tbody>

																	</table>







																</div>

															</div>

														</div>

													</div>

												</div>									

										

										<!--tab 1 End Here-->

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