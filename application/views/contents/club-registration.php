 
<!-- Content
================================================== -->
<div class="fullwidth-box padding-bottom-35" id="services">
			<div class="container">
            <h3 class="headline centered margin-bottom-45 padding-top-35">Inspire Sports Group :: Club Registration</h3>
				<div class="row">
                
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-xs-12">
                <div class="style-2">
					<!-- Tabs Navigation -->
					<ul class="tabs-nav">
						<li class="active"><a href="#tab1a"><img src="<?php echo base_url('assets/images/paypal.png');?>" alt="Image alternate text" class="img-rounded"></a></li>
						<li class=""><a href="#tab2a"><img src="<?php echo base_url('assets/images/banktransfer.png');?>" alt="Image alternate text" class="img-rounded"></a></li>
					
					</ul>

					<!-- Tabs Content -->
					<div class="tabs-container">
						<div class="tab-content" id="tab1a" style="display: inline-block;">
                        <h4 class="headline centered margin-bottom-45 padding-top-25"> Transfer to Paypal Account</h4>
						<form method="post" class="sign-in-form" action="<?php echo site_url();?>/netball/clubRegistrationPaypalAccount">
							<input type="hidden" name="club_id" value="<?php echo $club_id ?>">
							<input type="hidden" name="type" value="0">
							<p class="form-row form-row-wide">
								<label for="email3">Paypal Email Account:
									<i class="im im-icon-Mail"></i>
									<input type="email" class="input-text" name="email13" value="" required="required" />
								</label>
							</p>
							<p class="form-row form-row-wide">
								<label for="email3">Confirm Paypal Email:
									<i class="im im-icon-Mail"></i>
									<input type="email" class="input-text" name="confirm_email13" value="" required="required" />
								</label>
							</p>
							

							<input type="submit" class="button border fw margin-top-10" name="register" value="Complete Registration" />
                          </form>	
						</div>

						<div class="tab-content" id="tab2a" style="display: none;">
                        <h4 class="headline centered margin-bottom-45 padding-top-25"> Transfer to Bank Account</h4>
                        <form method="post" class="sign-in-form" action="<?php echo site_url();?>/netball/clubRegistrationBankAccount">
							<input type="hidden" name="club_id" value="<?php echo $club_id ?>">
							<input type="hidden" name="type" value="1">
							<p class="form-row form-row-wide">
								<label for="accountname">Account Name:
									<i class="im im-icon-ATM"></i>
									<input type="text" class="input-text" name="accountname" value="" required="required" />
								</label>
							</p>
                            <p class="form-row form-row-wide">
								<label for="accountbsb">Account BSB:
									<i class="im im-icon-Bank"></i>
									<input type="text" class="input-text" name="accountbsb" value="" required="required" />
								</label>
							</p>
                             <p class="form-row form-row-wide">
								<label for="accountbsb">Account Number:
									<i class="im im-icon-Band-Aid"></i>
									<input type="tel" class="input-text" name="accountnumber" value="" required="required" />
								</label>
							</p>
                             <p class="form-row form-row-wide">
								<label for="accountbb">Bank / Branch Name:
									<i class="im im-icon-Bank"></i>
									<input type="text" class="input-text" name="accountbb" value="" required="required" />
								</label>
							</p>
							
							

							<input type="submit" class="button border fw margin-top-10" name="register" value="Complete Registration" />
                          </form>
                        </div>

						
					</div>
				</div>
                </div>
                </div>
				
			</div>
		</div>