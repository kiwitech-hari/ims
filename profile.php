<?php 

//include 'session.php';
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
										<a href="#tab2" data-toggle="tab"><i class="fa fa-book"></i> My Profile</a>
									</li>
									
								</ul>
								<div class="tab-content">
									<div id="tab1" class="tab-pane">
										<!--tab1 Start -->
										
							
							<!--tab 1 End Here-->
						</div>

						<div id="tab2" class="tab-pane active">
							<!--Start TAB2 from here-->


								<?php
								$msg='';
									if (isset($_POST['update'])) 
									{
										// Changed User Password from andmin page
										  $password=$_POST['confirm']; 
									 	$reconfirm=$_POST['reconfirm'];
									 	if(empty($_POST["confirm"]) || empty($_POST["reconfirm"]))
									 	 {
									 		$msg= '<div class="alert alert-danger">
															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
															<strong> Field Empty </strong> You must Enter your new password.
														</div>';
									 	}else{

												if ($password==$reconfirm) 
												{	
													$password = stripslashes($password);										
													$password = mysqli_real_escape_string($conn, $password);
													$password = md5($password);	
													$query = mysqli_query($conn,"UPDATE users SET password='$password' WHERE id='$usercheck'");
													if (! $query) 
													{

														//$msg = "Sorry!  Unable To Changed Your Password";

														$msg= '<div class="alert alert-danger">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																	<strong> Sorry!!</strong> Unable To Changed Your Password.
																</div>';
																
													}else
													{ //$msg = "User Passowrd Changed Successfull";

													$msg= '<div class="alert alert-info">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																	<strong> Successfull!! </strong> User Passowrd Changed Successfully.
																</div>';

													}
												}
											}									
									}	
									 ?>



					<div class="row">
						<div class="col-md-4 col-lg-3">

							<section class="panel">
								<div class="panel-body">
									<div class="thumb-info mb-md">
										<img src=<?php echo $profile_pic; ?> class="rounded img-responsive" alt="John Doe">
										<div class="thumb-info-title">
											<span class="thumb-info-inner"><?php echo $user_name ?></span>
											<span class="thumb-info-type"><?php echo $user_type ?></span>
										</div>
									</div>
	
									<div class="widget-toggle-expand mb-md">
										<div class="widget-header">
											<h6>Profile Completion</h6>
											<div class="widget-toggle">+</div>
										</div>
										<div class="widget-content-collapsed">
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
													60%
												</div>
											</div>
										</div>
										<div class="widget-content-expanded">
											<ul class="simple-todo-list">
												<li class="completed">Update Profile Picture</li>
												<li class="completed">Change Personal Information</li>
												<li>Update Social Media</li>
												<li>Follow Someone</li>
											</ul>
										</div>
									</div>

									<hr class="dotted short">

									<h6 class="text-muted">About</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis vulputate quam. Interdum et malesuada</p>
									<div class="clearfix">
										<a class="text-uppercase text-muted pull-right" href="#">(View All)</a>
									</div>

									<hr class="dotted short">

									<div class="social-icons-list">
										<a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
										<a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
										<a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
									</div>

								</div>
							</section>

							<!--
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">
										<span class="label label-primary label-sm text-normal va-middle mr-sm">198</span>
										<span class="va-middle">Friends</span>
									</h2>
								</header>
								<div class="panel-body">
									<div class="content">
										<ul class="simple-user-list">
											<li>
												<figure class="image rounded">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
												</figure>
												<span class="title">Joseph Doe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
												</figure>
												<span class="title">Joseph Doe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
										</ul>
										<hr class="dotted short">
										<div class="text-right">
											<a class="text-uppercase text-muted" href="#">(View All)</a>
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<div class="input-group input-search">
										<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
											</button>
										</span>
									</div>
								</div>
							</section> 

							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Popular Posts</h2>
								</header>
								<div class="panel-body">
									<ul class="simple-post-list">
										<li>
											<div class="post-image">
												<div class="img-thumbnail">
													<a href="#">
														<img src="assets/images/post-thumb-1.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="#">Nullam Vitae Nibh Un Odiosters</a>
												<div class="post-meta">
													 Jan 10, 2013
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<div class="img-thumbnail">
													<a href="#">
														<img src="assets/images/post-thumb-2.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="#">Vitae Nibh Un Odiosters</a>
												<div class="post-meta">
													 Jan 10, 2013
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<div class="img-thumbnail">
													<a href="#">
														<img src="assets/images/post-thumb-3.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="#">Odiosters Nullam Vitae</a>
												<div class="post-meta">
													 Jan 10, 2013
												</div>
											</div>
										</li>
									</ul>
								</div>
							</section>-->

						
						</div>

						<div class="col-md-8 col-lg-6">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<!-- <li>
										<a href="#overview" data-toggle="tab">Overview</a>
									</li> -->
									<li class="active">
										<a href="#edit" data-toggle="tab">Edit</a>
									</li>
									<li>
										<a href="#updatepic" data-toggle="tab">Update Pic</a>
									</li>
								</ul>

								<div class="tab-content">
									<!--
									<div id="overview" class="tab-pane">
										<h4 class="mb-md">Update Status</h4>

										<section class="simple-compose-box mb-xlg">
											<form method="get" action="/">
												<textarea name="message-text" data-plugin-textarea-autosize placeholder="What's on your mind?" rows="1"></textarea>
											</form>
											<div class="compose-box-footer">
												<ul class="compose-toolbar">
													<li>
														<a href="#"><i class="fa fa-camera"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-map-marker"></i></a>
													</li>
												</ul>
												<ul class="compose-btn">
													<li>
														<a class="btn btn-primary btn-xs">Post</a>
													</li>
												</ul>
											</div>
										</section>


										<h4 class="mb-xlg">Timeline</h4>

										<div class="timeline timeline-simple mt-xlg mb-md">
											<div class="tm-body">
												<div class="tm-title">
													<h3 class="h5 text-uppercase">November 2013</h3>
												</div>
												<ol class="tm-items">
													<li>
														<div class="tm-box">
															<p class="text-muted mb-none">7 months ago.</p>
															<p>
																It's awesome when we find a good solution for our projects, Porto Admin is <span class="text-primary">#awesome</span>
															</p>
														</div>
													</li>
													<li>
														<div class="tm-box">
															<p class="text-muted mb-none">7 months ago.</p>
															<p>
																What is your biggest developer pain point?
															</p>
														</div>
													</li>
													<li>
														<div class="tm-box">
															<p class="text-muted mb-none">7 months ago.</p>
															<p>
																Checkout! How cool is that!
															</p>
															<div class="thumbnail-gallery">
																<a class="img-thumbnail lightbox" href="assets/images/projects/project-4.jpg" data-plugin-options='{ "type":"image" }'>
																	<img class="img-responsive" width="215" src="assets/images/projects/project-4.jpg">
																	<span class="zoom">
																		<i class="fa fa-search"></i>
																	</span>
																</a>
															</div>
														</div>
													</li>
												</ol>
											</div>
										</div>
									</div> -->

									<div id="edit" class="tab-pane active">
									



										<form class="form-horizontal" method="post">
											<!-- <h4 class="mb-xlg">Personal Information</h4> -->
											<?php echo "$msg";  ?>
											<!--
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">First Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileFirstName">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName">Last Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileLastName">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Address</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileAddress">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Company</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileCompany">
													</div>
												</div>
											</fieldset>
											<hr class="dotted tall">
											<h4 class="mb-xlg">About Yourself</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileBio">Biographical Info</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="3" id="profileBio"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-xs-3 control-label mt-xs pt-none">Public</label>
													<div class="col-md-8">
														<div class="checkbox-custom checkbox-default checkbox-inline mt-xs">
															<input type="checkbox" checked="" id="profilePublic">
															<label for="profilePublic"></label>
														</div>
													</div>
												</div>
											</fieldset>
											
											<hr class="dotted tall">
											-->
											<h4 class="mb-xlg">Change Password</h4>
											<fieldset class="mb-xl">
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPassword">New Password</label>
													<div class="col-md-8">
														<input name="confirm" type="password"  class="form-control" id="profileNewPassword">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repeat New Password</label>
													<div class="col-md-8">
														<input name="reconfirm" type="password" class="form-control" id="profileNewPasswordRepeat">
													</div>
												</div>
											</fieldset>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button name="update" type="submit" class="btn btn-primary">Submit</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
											</div>

										</form>

									</div>

									<div id="updatepic" class="tab-pane">
										
										<?php
											//include('config.php');
											if (!isset($_FILES['image']['tmp_name'])) {
												echo "";
												}else{
												$file=$_FILES['image']['tmp_name'];
												$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
												$image_name= addslashes($_FILES['image']['name']);
											    $temp = explode(".", $_FILES["image"]["name"]);
											    $newname=$user_id.'.'.end($temp);
														move_uploaded_file($_FILES["image"]["tmp_name"],"assets/images/profile/" .$newname);	
														 $location="assets/images/profile/" .$newname;
														///$caption=$_POST['caption'];
														$save = mysqli_query($conn, "UPDATE `users` SET userpic='$location' WHERE `userid`='$user_id'");						
												}
											?>
										<form action=" " method="post" enctype="multipart/form-data" name="addroom">
											<h4 class="mb-xlg">Update Profile Picture</h4>
											<fieldset class="mb-xl">

											<div class="thumb-info mb-md"> 
													<img src=<?php echo $profile_pic; ?> class="rounded img-responsive" alt="John Doe">
													<div class="thumb-info-title">
														<span class="thumb-info-inner"><?php echo $user_name ?></span>
														<span class="thumb-info-type"><?php echo $user_type ?></span>
													</div>
												</div>


												<div class="form-group">
													<label class="col-md-5 control-label">Upload New Profile Pic </label>
													<div class="col-md-5">
														<input name="image" type="file"  >
													</div>
												</div>
												
											</fieldset>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button name="Submit" type="submit" class="btn btn-primary">Upload</button>

														<!-- <button type="reset" class="btn btn-default">Reset</button> -->
													</div>
												</div>
											</div>

										</form>

										
									</div><!--//////////////////////-->



								</div>
							</div>
						</div>

						<!--
						<div class="col-md-12 col-lg-3">

							<h4 class="mb-md">Sale Stats</h4>
							<ul class="simple-card-list mb-xlg">
								<li class="primary">
									<h3>488</h3>
									<p>Nullam quris ris.</p>
								</li>
								<li class="primary">
									<h3>$ 189,000.00</h3>
									<p>Nullam quris ris.</p>
								</li>
								<li class="primary">
									<h3>16</h3>
									<p>Nullam quris ris.</p>
								</li>
							</ul>

							<h4 class="mb-md">Projects</h4>
							<ul class="simple-bullet-list mb-xlg">
								<li class="red">
									<span class="title">Porto Template</span>
									<span class="description truncate">Lorem ipsom dolor sit.</span>
								</li>
								<li class="green">
									<span class="title">Tucson HTML5 Template</span>
									<span class="description truncate">Lorem ipsom dolor sit amet</span>
								</li>
								<li class="blue">
									<span class="title">Porto HTML5 Template</span>
									<span class="description truncate">Lorem ipsom dolor sit.</span>
								</li>
								<li class="orange">
									<span class="title">Tucson Template</span>
									<span class="description truncate">Lorem ipsom dolor sit.</span>
								</li>
							</ul>

							<h4 class="mb-md">Messages</h4>
							<ul class="simple-user-list mb-xlg">
								<li>
									<figure class="image rounded">
										<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
									</figure>
									<span class="title">Joseph Doe Junior</span>
									<span class="message">Lorem ipsum dolor sit.</span>
								</li>
								<li>
									<figure class="image rounded">
										<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
									</figure>
									<span class="title">Joseph Junior</span>
									<span class="message">Lorem ipsum dolor sit.</span>
								</li>
								<li>
									<figure class="image rounded">
										<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
									</figure>
									<span class="title">Joe Junior</span>
									<span class="message">Lorem ipsum dolor sit.</span>
								</li>
								<li>
									<figure class="image rounded">
										<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
									</figure>
									<span class="title">Joseph Doe Junior</span>
									<span class="message">Lorem ipsum dolor sit.</span>
								</li>
							</ul>
						</div>

					</div>
					--><!-- end: page -->
																

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