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


          
        </div>
        <!-- Left Side Content / End -->

      <!-- Right Side Content / End -->
      <div class="right-side">
        <!-- Header Widget -->
        <div class="header-widget">
          
          <!-- User Menu -->
          <div class="user-menu">
            <div class="user-name"><span><img src="<?php echo base_url('assets/images/profile_img.jpg');?>" alt=""></span>Test User</div>
            <ul>
              <!-- <li><a href="#"><i class="sl sl-icon-settings"></i> Dashboard</a></li> -->
             <!--  <li><a href="#"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
              <li><a href="#"><i class="sl sl-icon-user"></i> My Profile</a></li> -->
              <li><a href="<?php echo site_url('admin/logout');?>"><i class="sl sl-icon-power"></i> Logout</a></li>
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
    <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
    <div class="dashboard-nav">
      <div class="dashboard-nav-inner">
        <ul data-submenu-title="Main"> 
        <?php
            if ($pageName == "ADMIN_PAGE1")
              echo "<li class='active'>";
            else
              echo "<li>";
          ?>    
            <a href="<?php echo site_url('admin');?>"> Dashboard </a>
          </li>
          <?php
            if ($pageName == "USER")
              echo "<li class='active'>";
            else
              echo "<li>";
          ?>    
            <a href="<?php echo site_url('admin/userManagement');?>"> Players management</a>
          </li>
          <?php
            if ($pageName == "CLUB")
              echo "<li class='active'>";
            else
              echo "<li>";
          ?>
            <a href="<?php echo site_url('admin/clubManagement');?>">Clubs management</a>
          </li>
          <?php
            if ($pageName == "EVENT")
              echo "<li class='active'>";
            else
              echo "<li>";
          ?>
            <a href="<?php echo site_url('admin/eventManagement');?>">Event management</a>
          </li>
          <?php
            if ($pageName == "TRANSACTION")
              echo "<li class='active'>";
            else
              echo "<li>";
          ?>  
            <a href="<?php echo site_url('admin/transaction');?>">Transaction History</a>
          </li>
          <?php
            if ($pageName == "SETTINGS")
              echo "<li class='active'>";
            else
              echo "<li>";
          ?>  
            <a href="<?php echo site_url('admin/settings');?>">Settings</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Navigation / End --> 



