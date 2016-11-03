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
									<li class="active">
										<a href="#tab1" data-toggle="tab"><i class="fa fa-user"></i> User Assets</a>
									</li>
									<li>
										<a href="#tab2" data-toggle="tab"><i class="fa fa-book"></i> Support Center</a>
									</li>
									
								</ul>
								<div class="tab-content">
									<div id="tab1" class="tab-pane active">
										<!--tab1 Start -->
										<div class="row">
											<div class="col-lg-3">

												<section class="panel">
													<div class="panel-body">
														<div class="thumb-info mb-md">
															<img src="assets/images/!logged-user.jpg" class="rounded img-responsive" alt="John Doe">
															<div class="thumb-info-title">
																<span class="thumb-info-inner"><?php echo $user_name ?></span>
																<span class="thumb-info-type"><?php echo $user_type ?></span>
															</div>
														</div>
													</div>
												</section>
											</div>

											<!--User information panel-->
											<div class="panel-body col-md-9">
												<div class="table-responsive">
													<table class="table table-bordered table-striped table-condensed mb-none">
														
														<tr>
															<th>Name</th>
															<td><?php echo $user_name;?></td>
															
														</tr>
														<tr>
															<th>Mobile No.</th>
															<td><?php echo $user_mob;?></td>
															
														</tr>
														<tr>
															<th>User ID</th>
															<td><?php echo $user_id;?></td>
															
														</tr>
														<tr>
															<th>Email</th>
															<td><?php echo $usermail;?></td>
														</tr>
														<tr>
															<th>Date of Birth</th>
															<td><?php echo $user_dob;?></td>
														</tr>
														<!-- <tr>
															<th>User Type</th>
															<td><?php echo $user_type;?></td>
														</tr> -->
														
														
													</table>	
												</div>
											</div>
											<!--User information panel-->
										</div>					
									
										<section class="panel">
											<header class="panel-heading">
												<div class="panel-actions">
													
													<a href="#" class="fa fa-caret-down"></a>
													<a href="#" class="fa fa-times"></a>
												</div>
												<h2 class="panel-title">My Hardwares</h2>
											</header>
											<div class="panel-body">
												<table class="table table-bordered table-striped mb-none" >
													<thead>
														<tr>
										                  <th>ID.</th>
										                  <th>Assets</th>
										                  <th>Brand</th>
										                  <th>Modal No</th>
										                  <th>Serial No</th>
										                   <th>Asign Date</th>
										                   <th>Other Details</th>
										                 
										                 <!--  <th>Action</th> -->
										                </tr>
													</thead>
													<tbody>
														<?php
														//include 'inc/config.php';

														$sql = "SELECT * FROM asigned_assets WHERE userid='$user_id' AND status='$status_use'";
														//echo "$sql";
														$query=mysqli_query($conn,$sql);
														while ($row=mysqli_fetch_array($query)) {
														
					               						   echo "<tr>";
											               echo "<td>".$row['id']."</td>";
											               echo "<td>".$row['asset']."</td>";
											               echo "<td>".$row['brand']."</td>";
											               echo "<td>".$row['model']."</td>";
											               echo "<td>".$row['serial_no']."</td>";
											               echo "<td>".$row['asign_date']."</td>";
											               echo "<td>".$row['note']."</td>";
											               

											          										                           
											               // echo "<td> <a href=ReturnAsset.php?id=".$row['id']."><i class='fa fa-undo'></i> Return</a></td>";
											               echo "</tr>"; 															
														 }?>														
													</tbody>
												</table>
											</div>
										</section>	


										<section class="panel">
											<header class="panel-heading">
												<div class="panel-actions">
													
													<a href="#" class="fa fa-caret-down"></a>
													<a href="#" class="fa fa-times"></a>
												</div>
												<h2 class="panel-title">Returned Assets</h2>
											</header>
											<div class="panel-body">
												
												

												<table class="table table-bordered table-striped mb-none" >
													<thead>
														<tr>
										                  <th>ID.</th>
										                  <th>Assets</th>
										                  <th>Brand</th>
										                 <!-- <th>Modal No</th>-->
										                  <th>Serial No</th>
										                   <th>Asign Date</th>
										                   <th>Remarks</th>
										                  
										                </tr>
													</thead>
													<tbody>
														<?php
														//include 'inc/config.php';

														$sql = "SELECT * FROM asigned_assets WHERE userid='$user_id' AND status='$status_ret'";
														//echo "$sql";
														$query=mysqli_query($conn,$sql);
														while ($row=mysqli_fetch_array($query)) {
														
					               						   echo "<tr>";
											               echo "<td>".$row['id']."</td>";
											               echo "<td>".$row['asset']."</td>";
											               echo "<td>".$row['brand']."</td>";
											               //echo "<td>".$row['model']."</td>";
											               echo "<td>".$row['serial_no']."</td>";
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

									<div id="tab2" class="tab-pane">
										<!--Start TAB2 from here-->

										<script>
											$(document).ready(function(){
												$("#reqest").click(function(){
													var btn_sub=$("#reqest").val();
													var user_name=$("#name").val();
													var user_email=$("#email").val();
													var user_id=$("#userid").val();
													var req_dt=$("#req_dt").val();
													var req_type=$("#sn").val();
													var req_desc=$("#remark").val();
													var priority=$("#priority").val();
													var subject=$("#subject").val();
													
													$.ajax({

														url:'inc/submit.php',
														//data:{saveme:save,name:user_name,email:user_email,password:user_pass},
														data:{
																btn_sub:btn_sub,
																user_name:user_name,
																user_email:user_email,
																user_id:user_id,
																req_dt:req_dt,
																req_type:req_type,
																req_desc:req_desc,
																priority:priority,
																subject:subject,


															},

														type:'POST',
														success:function(data){
															$("#alart").html(data);
														}

													});
													$("input").val('');
													$("textarea").val('');
													//window.alert("data submitted successful!")
													 
												});
											});	
										</script>
										<section class="panel">
											<!--<form action="" method="POST">-->
												<header class="panel-heading">
													<div class="panel-actions">
														<a href="#" class="fa fa-caret-down"></a>
														<a href="#" class="fa fa-times"></a>
													</div>

													<h2 class="panel-title">Request Form</h2>
													<p class="panel-subtitle">Help Desk Support Center</p>
												</header>
												<div class="panel-body">
												<div id="alart">
												<!--Alart masg and error msg will visible here-->
													</div>
																						
												<div class="form-group">
													<label class="col-md-3 control-label">Name</label>
													<div class="col-md-4">
														<input type="text" value="<?php echo $user_name;?>" id="name"  class="form-control" readonly>
													</div>
													<label class="col-md-1 control-label">Email</label>
													<div class="col-md-4">
														<input type="text" value="<?php echo $usermail;?>" id="email"  class="form-control" readonly>
													</div>
													
												</div>
												<div class="form-group hidden">
													<label class="col-md-3 control-label">User id</label>
													<div class="col-md-4">
														<input type="text" value="<?php echo $user_id;?>" id="userid" class="form-control" readonly>
													</div>
													<label class="col-md-1 control-label" for="inputTooltip">Date</label>
													<div class="col-md-4">
														<input type="text" value="<?php echo $today;?>" id="req_dt"  class="form-control" readonly> 
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Request Regarding<span class="required">*</span></label>
													<div class="col-md-4">
														<select data-plugin-selectTwo class="form-control populate" id="sn" >
															<option value="New Hardware">Select Serial No</option>
															<option value="New Hardware">New Hardware</option>
															
															<?php 
																$sql="SELECT * FROM `asigned_assets` WHERE `userid`='$user_id' AND `status`='$status_use'";
																$query=mysqli_query($conn,$sql);
																while ($row=mysqli_fetch_array($query)) {
																echo "<option value=".$row['asset']."(".$row['serial_no'].")>".$row['asset']." (" . $row['serial_no'].")</option>";																		
															}?>
														</select>
													</div>
													<label class="col-md-1 control-label" for="inputTooltip">Priority</label>
													<div class="col-md-4">
														<select data-plugin-selectTwo class="form-control populate" id="priority" >
															<option value="Normal">Normal</option>
															<option value="High">High</option> 
															<option value="Urgent">Urgent</option>
															<option value="Critical">Critical</option> 
														</select> 
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Subject</label>
													<div class="col-md-9">
														<select data-plugin-selectTwo class="form-control populate" id="subject" >
														<option value=""></option>
															<option value="New Hardware">i need New Hardware</option>
															<option value="Other">Other Issue</option>
															<option value="Network Problems">Network Problems</option>
															<option value="Software Problems">Software Problems</option>
															<option value="Server Problems">Server Problems</option>
															<option value="No Power in Socket">No Power in Socket</option>
															<option value="Wifi Not Connecting">Wifi Not Connecting</option>
														</select> 
													</div>
												</div>

												
												<div class="form-group">
													<label class="col-sm-3 control-label">Problems</label>
													<div class="col-sm-9">
														<textarea id="remark" rows="7" class="form-control" placeholder="Describe about This Assets"></textarea>
													</div>
												</div>


												
												<footer class="panel-footer">
													<div class="row">
														<div class="col-sm-9 col-sm-offset-3">
															<button id="reqest" type="submit" value="request" name="asset_return_btn" class="btn btn-primary">Submit</button>
															<button type="reset" class="btn btn-default">Reset</button>
														</div>
													</div>
												</footer>
													
												<!--</form>-->
												</div>
											</section>

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
										                  <th>Request</th>
										                  <th>Issue</th>
										                  <th>Priority</th>
										                  <th>Solutions</th>
										                  <th>Status</th>				                  
										                </tr>
													</thead>
													<tbody>
														<?php 
										              	$sql="SELECT * FROM `itsupport` WHERE `userid`='$user_id'";       
										         		$query =mysqli_query($conn,$sql);
										                 while ($row = mysqli_fetch_array($query)) {     
								                      	 echo "<tr>
								                       			  <td>".$row["date"]."</td>
									                              <td>".$row["sysid"]."</td>         
									                              <td>".$row["probs"]."</td>
									                              <td>".$row["priority"]."</td>	   	
									                              <td>".$row["solutions"]."</td>
									                              <td>".$row["status"]."</td>							                              
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