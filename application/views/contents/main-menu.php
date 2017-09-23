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

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">
                <li><a class="current" href="<?php echo site_url('netball/admin');?>">Home</a></li>
                <li><a href="#">User Panel</a>
                  <ul>
                    <li><a href="<?php echo site_url('netball/admin');?>">Dashboard</a></li>
                    <li><a href="#">Messages</a></li>
                    <li><a href="#">My Listings</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">Bookmarks</a></li>
                    <li><a href="#">Add Listing</a></li>
                    <li><a href="#">My Profile</a></li>
                    <li><a href="#">Invoice</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo site_url('netball/admin');?>">Clubs</a></li>
              </ul>
				</nav>
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
						<div class="user-name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>Test User</div>
						<ul>
							<li><a href="#"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
							<li><a href="#"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
							<li><a href="#"><i class="sl sl-icon-user"></i> My Profile</a></li>
							<li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
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
				<li class="active"><a href="<?php echo site_url('netball/newEvent');?>"><i class="sl sl-icon-plus"></i> New Event</a></li>
				<li><a href="#"><i class="sl sl-icon-action-redo"></i> Current Event</a></li>
			</ul>
			
				

			<ul data-submenu-title="Account">
				<li><a href="#"><i class="sl sl-icon-user"></i> My Profile</a></li>
				<li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>
			
		</div>
	</div>