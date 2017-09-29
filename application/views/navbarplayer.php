<body>
    <div id="wrapper"> 
        <header id="header-container"> 
            <div id="header">
                <div class="container"> 
                    <div class="left-side">  
                        <div id="logo">
                            <a href="<?php echo site_url('netball/index');?>">
                                <img src="<?php echo base_url('assets/images/logoinspire.jpg');?>" alt="">
                            </a> 
                        </div>
                        <div class="menu-responsive"> <i class="fa fa-reorder menu-trigger"></i> </div> 
                    </div>
                    <div class="right-side">
                        <div class="header-widget">
                            <nav id="navigation" class="style-1">
                                <ul id="responsive">
                                    <li><a class="current" href="<?php echo site_url('netball/index');?>">Home</a></li>
                                    <li><a href="<?php echo site_url('netball/club');?>">Club Page</a></li>                                    
                                    <li><a href="#">Account</a>
                                        <ul>
                                            <li><a href="<?php echo site_url('netball/playerdashboard');?>">Dashboard</a></li>
                                            <li><a href="<?php echo site_url('netball/logout');?>">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div> 
        </header>
    </div>    
    <div class="clearfix"></div>
