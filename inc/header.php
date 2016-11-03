			<?php include 'session.php';  ?>
			<header class="header">
				<div class="logo-container">
					<a href="<?php echo "$index";?>" class="logo">
						<img src="assets/images/logo.png" height="50" alt="Harry Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<!-- <form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form> -->
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<!-- <li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Tasks
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Generating Sales Report</span>
												<span class="message pull-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Importing Contacts</span>
												<span class="message pull-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Uploading something big</span>
												<span class="message pull-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-xs">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li> -->
						<?php 
						if ($user_type == "Administrator") { 

							/// This section will be hidden for users.

							$sql="SELECT COUNT(*) FROM `itsupport` WHERE `status` LIKE 'Pending%'";       
									         		$query =mysqli_query($conn,$sql);
									                 $row = mysqli_fetch_array($query);
									                 	$count =$row["0"];


							?>

						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge"><?php echo $count;?></span>
							</a>			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default"><?php echo $count;?></span>
									Messages
								</div>
			
								<div class="content">
									<ul>
											<?php  
									
												//if ($user_type == "Administrator") {

													$sql="SELECT * FROM `itsupport` WHERE `status` LIKE 'Pending%' LIMIT 6";       
									         		$query =mysqli_query($conn,$sql);
									                 while ($row = mysqli_fetch_array($query)) { 
									                 	$name =$row["name"];
									                 	$probs=$row["probs"];
									                 	$tid=$row["id"];

							                      	 ?>

													<li>
														<a href="ticket.php?id=<?php echo $tid;?>" class="clearfix">
															<figure class="image">
																<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
															</figure>
															<span class="title"><?php echo "$name";?></span>
															<span class="message"><?php echo "$probs";?></span>
														</a>
													</li>


													<?php	
												}
											?>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="support.php" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>

						<?php }; ?>
						<!-- <li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li> -->
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src=<?php echo $profile_pic; ?> alt="<?php echo $user_name; ?>" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name='<?php echo "$user_name"; ?>' data-lock-email='<?php echo "$usermail"; ?>'>
								<span class="name"><?php echo "$user_name";  ?></span>
								<span class="role"><?php echo "$user_type"; ?></span>
							</div>
							
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a href="<?php echo $index; ?>"><i class="fa  fa-dashboard"></i> Dashboard</a>
								</li>
								<li>
									<a href="profile.php" ><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>