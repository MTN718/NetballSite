<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
				
					<a href="index.html" class="dashboard-logo"><img src="<?php echo base_url('assets/images/logoinspire.jpg');?>" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="menu-responsive">
					<i class="fa fa-reorder menu-trigger"></i>
				</div>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="<?php echo base_url('assets/images/user-avatar.jpg');?>" alt=""></span>Test User</div>
						<ul>
							<li><a href="<?php echo site_url('netball');?>"><i class="sl sl-icon-settings"></i> Front End </a></li>
							<li><a href="<?php echo site_url('netball/club_notification');?>"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
							<li><a href="<?php echo site_url('netball/clubProfile');?>"><i class="sl sl-icon-user"></i> My Profile</a></li>
							<li><a href="<?php echo site_url('netball/logout');?>"><i class="sl sl-icon-power"></i> Logout</a></li>
						</ul>
					</div>

				
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="<?php echo site_url('netball/admin');?>" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li class="<?php if($pageName == "NEW_EVENT") echo "active"; ?>" ><a href="<?php echo site_url('netball/newEvent');?>"><i class="sl sl-icon-plus"></i> New Event</a></li>
				<li class="<?php if($pageName == "CURRENT_EVENT") echo "active"; ?>" ><a href="<?php echo site_url('netball/currentEvent');?>"><i class="sl sl-icon-action-redo"></i> Current Event</a></li>
			</ul>
			
				

			<ul data-submenu-title="Account">
				<li class="<?php if($pageName == "CLUB_PROFILE") echo "active"; ?>" ><a href="<?php echo site_url('netball/clubProfile');?>"><i class="sl sl-icon-user"></i> My Profile</a></li>
				<li><a href="<?php echo site_url('netball/logout');?>"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>
			
		</div>
	</div>