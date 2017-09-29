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
                                    <!-- <li><a href="#">User Panel</a>
                                        <ul>
                                            <li><a href="<?php echo site_url('netball/admin');?>">Dashboard</a></li>
                                            <li><a href="#">Messages</a></li>
                                            <li><a href="#">My Listings</a></li>
                                            <li><a href="#">Reviews</a></li>
                                            <li><a href="#">Bookmarks</a></li>
                                            <li><a href="#">Add Listing</a></li>
                                            <li><a href="<?php echo site_url('netball/profile');?>">Profile</a></li>
                                            <li><a href="#">Invoice</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="<?php echo site_url('netball/accountSignUp');?>">Account Signup</a></li>
                                            <li><a href="<?php echo site_url('netball/clubdetails');?>">Club Detail</a></li>
                                            <li><a href="<?php echo site_url('netball/playerRegistration');?>">Player Registration</a></li>
                                            <li><a href="<?php echo site_url('netball/clubRegistrationForm');?>">Club Registration Form</a></li>
                                            <li><a href="<?php echo site_url('netball/helpPassword');?>">Help Password</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="<?php echo site_url('netball/club');?>">Club Page</a></li>                                    
                                    <li><a href="#">Account</a>
                                        <ul>
                                            <?php if($this->session->userdata('login_data')) { ?>

                                                <?php if($this->session->userdata('login_data')->user_type == "club") { ?>
                                                    <li><a href="<?php echo site_url('netball/clubdashboard');?>">Dashboard</a></li>
                                                    <li><a href="<?php echo site_url('netball/logout');?>">Logout</a></li>
                                                <?php } else { ?>
                                                    <li><a href="<?php echo site_url('netball/playerdashboard');?>">Dashboard</a></li>
                                                    <li><a href="<?php echo site_url('netball/logout');?>">Logout</a></li>
                                                <?php } ?>
                                            
                                            <?php } else { ?>
                                                <li><a href="#sign-in-dialog" class="popup-with-zoom-anim">Login</a></li>
                                                <li><a href="<?php echo site_url('netball/registerAccType');?>">Sign Up</a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- <?php if($this->session->userdata('login_data')) { ?>
                            <a class="sign-in" href="<?php echo site_url('netball/logout');?>"><i class="sl sl-icon-user"></i> Logout</a>
                            <?php } else { ?>
                            <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-user"></i> Login</a> 
                            <a href="<?php echo site_url('netball/registerAccType');?>" class="sign-in"><i class="sl sl-icon-login"></i> Sign Up</a> 
                            <?php } ?> -->
                        </div>
                    </div>

                    <!-- Sign In Popup -->
                    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
                        <div class="small-dialog-header">
                            <h3>Log In</h3>
                        </div>
                        <div class="sign-in-form style-1">
                            <!-- <ul class="tabs-nav">
                                <li><a href="#tab1">Log In</a></li>
                                <li><a href="#tab2">Register Player / Club</a></li>
                            </ul>
                            <div class="tabs-container alt">  --> 






                                <!-- Login -->
                                <div id="tab1">
                                    <form method="post"  action="<?php echo site_url();?>/netball/loginfrom" class="login">
                                        <p class="form-row form-row-wide">
                                            <label for="username">Username: <i class="im im-icon-Male"></i>
                                                <input type="text" class="input-text" name="username" id="username" required="required" />
                                            </label>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label for="password">Password: <i class="im im-icon-Lock-2"></i>
                                                <input class="input-text" type="password" name="password" id="password" required="required" />
                                            </label>
                                        </p>
                                        <div class="form-row">
                                            <input type="submit" class="button border margin-top-5" name="login" value="Login" />
                                            <span class="lost_password" style="float: right;">
                                                <a class="cs-forgot-switch">Lost Your Password?</a>
                                            </span> 
                                        </div>
                                    </form>
                                </div>







                                <!-- 
                                <div class="tab-content" id="tab2" style="display: none;">
                                    <form method="post"  action="#" class="register">
                                        <input type="hidden" name="value_type" value="club">
                                        <p class="form-row form-row-wide">
                                            <label for="username2">Username: <i class="im im-icon-Male"></i>
                                                <input type="text" class="input-text" name="username" id="username2" value="" />
                                            </label>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label for="email">Email Address: <i class="im im-icon-Mail"></i>
                                                <input type="email" class="input-text" name="email" id="email" value="" />
                                            </label>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label for="password">Password: <i class="im im-icon-Lock-2"></i>
                                                <input class="input-text" type="password" id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required/>
                                            </label>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label for="password2">Repeat Password: <i class="im im-icon-Lock-2"></i>
                                                <input class="input-text" type="password" id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required/>
                                            </label>
                                        </p>
                                        <input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
                                    </form>
                                </div> -->







                                <!-- forggot password  -->
                                <div id="lostpassword" style="display: none;">
                                    <h1>Forgot Password ?</h1><br>
                                    <form action="<?php echo site_url('netball/forgotpassword'); ?>" method="POST">
                                        <p class="form-row form-row-wide">
                                            <label for="email">Email Address: <i class="im im-icon-Mail"></i>
                                                <input type="email" name="email" placeholder="Email Address" required="required">
                                            </label>
                                        </p>    
                                        <input type="submit" class="button border fw margin-top-10" value="Reset Password">
                                        <span class="lost_password" style="float: right;">
                                            <a class="cs-forgot-switch2 button border fw margin-top-10" style="text-align: center;background-color: #f2642a;color: white;">
                                                <b>Login</b>
                                            </a>
                                        </span> 
                                    </form>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </header>
        <div class="clearfix"></div>

        <script type="text/javascript">            
            $(document).on('click', '.cs-forgot-switch', function () {
                $('#tab1').hide();
                $('#lostpassword').show();
            });
        </script>

        <script type="text/javascript">            
            $(document).on('click', '.cs-forgot-switch2', function () {
                $('#tab1').show();
                $('#lostpassword').hide();
            });
        </script>