 <?php if ($this->session->flashdata('success_msg') != "") { ?>
    <div class="alert alert-success alert-dismissable" style="background-color: #00a65a !important;border-color: #008d4c;border-radius: 3px;padding-right: 35px;padding: 15px;margin-bottom: 20px;border: 1px solid transparent;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: #000;opacity: .2;position: relative;top: -2px;right: 0px;float: right;font-size: 21px;font-weight: 700;line-height: 1;color: #000;text-shadow: 0 1px 0 #fff;filter: alpha(opacity=20);opacity: .2;">&times;</a>
        <strong>Successfully</strong> <?php echo $this->session->flashdata('success_msg'); ?>
    </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error_msg') != "") { ?>
    <div class="alert alert-warning alert-dismissable" style="background-color: #00a65a !important;border-color: #008d4c;border-radius: 3px;padding-right: 35px;padding: 15px;margin-bottom: 20px;border: 1px solid transparent;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: #000;opacity: .2;position: relative;top: -2px;right: 0px;float: right;font-size: 21px;font-weight: 700;line-height: 1;color: #000;text-shadow: 0 1px 0 #fff;filter: alpha(opacity=20);opacity: .2;">&times;</a>
        <strong>Warning!</strong> <?php echo $this->session->flashdata('error_msg'); ?>
    </div>
    <?php } ?>
<!-- Content
================================================== -->
<div class="fullwidth-box padding-bottom-35" id="services">
			<div class="container">
            <h3 class="headline centered margin-bottom-45 padding-top-35">Inspire Sports Group :: Player Registration</h3>
				<div class="row">
                
                    <form method="post" action="<?php echo site_url();?>/netball/playerRegistrationFormdata" class="sign-in-form">
                    	<input type="hidden" name="value_type" value="player">
							<div class="col-md-4 col-md-offset-1">	
                             <h4 class="headline centered margin-bottom-15 padding-top-25">Login Details</h4>
							
							<p class="form-row form-row-wide">
								<label for="email">Email Address:
									<i class="im im-icon-Mail"></i>
									<input type="text" class="input-text" name="email" id="email" />
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password">Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.confrimpassword.pattern = this.value;" placeholder="Password" name="password" id="password"/>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="confrimpassword">Confirm Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="confrimpassword" id="confrimpassword" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required/>
								</label>
							</p>
                            <h4 class="headline centered margin-bottom-15 padding-top-25">Positions</h4>
                            <p class="form-row form-row-wide">
                            <label for="select1">1st Preference:
                            <select name="position1" class="chosen-select-no-single" style="display: none;">
										<option label="gk">GK</option>
										<option>Option2</option>
                                        <option>Option1</option>
                                        <option>Option3</option>
										
							  </select>
                            </label>
                            </p>
                            <p class="form-row form-row-wide">
                            <label for="select2">2nd Preference:
                            <select name="position2" class="chosen-select-no-single" style="display: none;">
										<option label="gk">GK</option>
										<option>Option2</option>
                                        <option>Option1</option>
                                        <option>Option3</option>
										
							  </select>
                            </label>
                            </p>
                            <p class="form-row form-row-wide">
                            <label for="select3">3rd Preference:
                            <select name="position3" class="chosen-select-no-single" style="display: none;">
										<option label="gk">GK</option>
										<option>Option2</option>
                                        <option>Option1</option>
                                        <option>Option3</option>
										
							  </select>
                            </label>
                            </p>
                            </div>
                            <div class="col-md-4 col-md-offset-2">
                            <h4 class="headline centered margin-bottom-15 padding-top-25">Personal Details</h4>
                            <p class="form-row form-row-wide">
								<label for="username">Username:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="username" id="username" required/>
								</label>
							</p>
								
                            <p class="form-row form-row-wide">
								<label for="dateofbirth">date of Birth:
									<i class="im im-icon-Calendar"></i>
                                  <input type="text" id="booking-date" name="dateofbirth" data-lang="en" data-large-mode="true" data-min-year="1800" data-max-year="2020" required>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="address">Address:
									<i class="im im-icon-Location-2"></i>
									<input type="text" placeholder="e.g. 964 School Street1 street2" name="address" required>
								</label>
							</p>
							 <p class="form-row form-row-wide">
								<label for="city">City:
									<i class="im im-icon-City-Hall"></i>
									<input type="text" class="input-text" name="city" id="city" required />
								</label>
							</p>
                             <p class="form-row form-row-wide">
								<label for="state">State:
									<i class="im im-icon-Globe"></i>
									<input type="text" class="input-text" name="state" id="state" required/>
								</label>
							</p>
                            <p class="form-row form-row-wide">
								<label for="postcode">Postcode:
									<i class="im im-icon-Post-Office"></i>
									<input type="text" class="input-text" name="postcode" id="postcode" required />
								</label>
							</p>
							<p class="form-row form-row-wide">
                            <label for="select1">Country
                            <select class="chosen-select-no-single" required style="display: none;">
										<option label="austraila">Austraila</option>
										<option>Option1</option>
                                        <option>Option2</option>
                                        <option>Option3</option>
										
							  </select>
                            </label>
                            </p>
                             <p class="form-row form-row-wide">
								<label for="phonenumber">Phone Number:
									<i class="im im-icon-Phone"></i>
									<input type="tel" name="phonenumber" value="(123) 123-456" type="text" required>
								</label>
							</p>
                            <p class="form-row form-row-wide">
								<label for="mobilenumber">Mobile Number:
									<i class="im im-icon-Phone-4G"></i>
									<input type="tel" name="mobilenumber" value="0 123 456 789" type="text" required>
								</label>
							</p>
                            </div>
                            
                            <div class="clearfix"></div>
							<div class="col-md-12 text-center">
							<input type="submit" class="button border fw margin-top-30 margin-bottom-20" name="register" value="Register Player" />
                            </div>
	
			       </form>
                </div>
				
			</div>
		</div>