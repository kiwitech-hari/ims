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
									<li>
										<a href="AvailableAssets.php"><i class="fa fa-book"></i> Available Hardwares</a>
									</li>
									<li class="active">	
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
								
										<!--Start Table from here-->

										<!--//////////Asset table //////////-->

										
										 <div class="row">
          					            	<div class="panel-heading nopaddingbottom">
							            		<div class="row">
									            	<div class="col-md-3">
										                <h4 class="panel-title">Total Assets</h4>
										                <p>Hey! Just Click on Check Button</p>
									                </div>
									             	<div class="col-md-4">
									                   <form id="basicForm" action="" method="post" >
										                  <div class="form-group">
									                    
									                    <div>
									                      
									                    <select data-plugin-selectTwo class="form-control populate" id="brands" name="category">
									                        
									                       
									                        <option value="All">All</option>									                       
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
									                        <option value="Power Adaptor">Power Adaptor</option>
									                        <option value="Others">Others</option>
									                       
									                      </select>
									                      <label class="error" for="brands"></label>
									                    </div>
									            </div>

							                  </div><!-- form-group -->
							 				
							 				<div class="form-group"> 
							                    <div class="col-sm-3">
											    <button  type="submit" name="submit" id="submit" value="submit" class="btn btn-quirk btn-wide btn-primary mr5">Check</button>
							  				    </div>
							                </div> 

							              </form>
							                </div>
							                </div>

							             </div> <!--row-->

							           
										

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
												<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
													<thead>
														<tr>
										                  <th>ID.</th>
										                  <th>Assets</th>
										                  <th>Brand</th>
										                  <th>Modal No</th>
										                  <th>Serial No</th>
										                   <th>Purchase Date</th>
										                  <th>Asign Status</th>
														  <th>Actions</th>

										                </tr>
													</thead>
													<tbody>
														<?php 
										              // include 'includes/config.php'; 



										                            
										          if (isset($_POST['category']))
										             {
										               
										                  $category=$_POST['category'];
										                   if ($category == 'All') {
										                    $data= 'it_assets';
										                    }else{
										                    $data="it_assets WHERE category ='$category'";
										                          }
										                    //final code for execute
										                   $sql="SELECT * FROM $data";
										                  // echo "$sql";  
										                    $query =mysqli_query($conn,$sql);
										                 while ($row = mysqli_fetch_array($query)) {     
										                       echo "<tr>
										                       			<td>".$row["id"]."</td>
										                              <td>".$row["category"]."</td>
										                              <td>".$row["brand"]."</td>         
										                              <td>".$row["model_no"]."</td>
										                              <td><a href=Assets.php?Asset_Details=".$row['serial_no'].">".$row["serial_no"]."</a></td>

										                              <td>".$row["purchase_date"]."</td>
										                              <td>".$row["asign_status"]."</td>
										                              <td><div class='actions'>
										               							<a href=#?id=".$row['id']." class='fa fa-plus'>  </a>
										               							<a href=Assets.php?Asset_Details=".$row['serial_no']." class='fa fa-pencil'>  </a>
										               							<a href=DeleteRecords.php?id=".$row['id']." class='fa fa-times' data-original-title='Delete Everything of This user' data-toggle='tooltip' data-placement='top' title=''>  </a>
									               							</div>
									               						</td>
										                              
										                            </tr>";
										                         }                      
										                    }         
										               ?>           
										              </tbody>
												</table>
											</div>
										</section>

												

										<script>
											$(document).ready(function(){
												$("#sub").click(function(){
													var btn_sub=$("#sub").val();
													var asset_new=$("#select_asset").val();
													var asset_brand=$("#brand").val();
													var asset_modal=$("#modal").val();
													var asset_pdate=$("#pur_dt").val();
													var asset_sn=$("#sn").val();
													var asset_remark=$("#remark").val();
													
													$.ajax({

														url:'inc/submit.php',
														//data:{saveme:save,name:user_name,email:user_email,password:user_pass},
														data:{
																Asset_sub:btn_sub,
																asset_new:asset_new,
																asset_brand:asset_brand,
																asset_modal:asset_modal,
																asset_pdate:asset_pdate,
																asset_sn:asset_sn,
																asset_remark:asset_remark
															},

														type:'POST',
														success:function(data){
															$("#result").html(data);
														}

													});
													$("input").val('');
													$("textarea").val('');
													//window.alert("data submitted successful!")
													 
												});
											});	
										</script>

										<div class="row">
											<div class="col-md-9">
												<section class="panel">
													<header class="panel-heading">
														<div class="panel-actions">
															<a href="#" class="fa fa-caret-down"></a>
															<a href="#" class="fa fa-times"></a>
														</div>

														<h2 class="panel-title">Add New Asset</h2>
														<p class="panel-subtitle">Add All New Purchased Assets</p>
													</header>
													<div class="panel-body">

													<!--Alart msg when data submitted-->
													<div id="result">

													</div>
													<!--Alart msg when data submitted-->

													<div class="form-group">
														<label class="col-md-2 control-label">Assets<span class="required">*</span></label>
														<div class="col-md-4">
															<select data-plugin-selectTwo class="form-control populate" id="select_asset"  >
																<option value="">Select Asset</option>
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
										                        <option value="Power Adaptor">Power Adaptor</option>
										                        <option value="Others">Others</option>
														
															</select>
														</div>
														<label class="col-md-2 control-label">Brand</label>
														<div class="col-md-4">
															<select data-plugin-selectTwo class="form-control populate" id="brand"  >
																<option value="">&nbsp;</option>
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
															<input type="text" placeholder="Enter Asset Modal No" id="modal" title="" data-toggle="tooltip" data-trigger="hover" class="form-control" data-original-title="Place your Asset Modal No" id="inputTooltip">
														</div>
														<label class="col-md-2 control-label" for="inputTooltip">Date </label>
														<div class="col-md-4">
															<input type="text" placeholder="Purchased Date" title="" data-toggle="tooltip" data-trigger="hover" class="form-control" data-original-title="Select Purchased Date" data-plugin-datepicker id="pur_dt" id="inputTooltip">
														</div>
													</div>
																										
													<div class="form-group">
														<label class="col-md-2 control-label" for="inputTooltip">Serial No<span class="required">*</span></label>
														<div class="col-md-10">
															<input type="text" placeholder="Serial NO." title="" data-toggle="tooltip" data-trigger="hover" class="form-control" data-original-title="Please Enter Serial No" id="sn" id="inputTooltip">
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-sm-2 control-label">Asset Details</label>
														<div class="col-sm-10">
															<textarea name="skills" rows="5" class="form-control" placeholder="Describe about asset configration" id="remark" required></textarea>
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
														

													</div>
												</section>

												
											</div>
											<div class="col-md-3">
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
					                    							$sql="SELECT category,COUNT(*) FROM it_assets WHERE `asign_status`='$asign' GROUP BY category"; // LIMIT 8
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
																				<th>Available</th>
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

															<?php 
					                    							$sql="SELECT COUNT(*) FROM `it_assets` WHERE `category`='Laptops'";
					                    							$query=mysqli_query($conn,$sql);
					                    							$row=mysqli_fetch_array($query);
					                    							$totallaptops=$row['0'];
					                    							 ?>
																
																<table class="table table-bordered table-striped mb-none">
																		<thead>
																			<tr>
																				<th>Laptops</th>
																				<th>Total Laptops : <?php echo "$totallaptops";  ?></th>
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
										</div>

										





										
										
										<!--End Table from here-->
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