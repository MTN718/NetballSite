<?php if ($this->session->flashdata('reg_success_msg') != "") { ?>
<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Successfully</strong> <?php echo $this->session->flashdata('reg_success_msg'); ?>
</div>
<?php } ?>
<?php if ($this->session->flashdata('error_msg') != "") { ?>
<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warning!</strong> <?php echo $this->session->flashdata('error_msg'); ?>
</div>
<?php } ?>
<!-- Content
================================================== -->
<div class="fullwidth-box padding-bottom-35" id="services">
			<div class="container">
            <h3 class="headline centered margin-bottom-45 padding-top-35">Inspire Sports Group :: Player Registration</h3>
				<div class="row">
                
                    <form method="post" id="player_reg" action="<?php echo site_url();?>/netball/playerRegistrationFormdata" class="sign-in-form" enctype="multipart/form-data">
                    	<input type="hidden" name="value_type" value="player">
							<div class="col-md-4 col-md-offset-1">	
                             <h4 class="headline centered margin-bottom-15 padding-top-25">Login Details</h4>
							
							<p class="form-row form-row-wide">
								<label for="email_player">Email Address:
									<i class="im im-icon-Mail"></i>
									<input type="text" class="input-text" name="email" id="email_player" />
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password_player">Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.confrimpassword.pattern = this.value;" placeholder="Password" name="password" id="password_player"/>
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
                            <label for="position1_player">1st Preference:
                            <select name="position1" id="position1_player" class="chosen-select-no-single" style="display: none;">
							    <?php foreach ($postionlist as $postion) { ?>
                                    <option value="<?php if (!empty($postion->position_title)) echo $postion->position_title; ?>"><?php if (!empty($postion->position_title)) echo $postion->position_title; ?></option>
                                <?php } ?>
							</select>
                            </label>
                            </p>
                            <p class="form-row form-row-wide">
                            <label for="position2_player">2nd Preference:
                            <select name="position2" id="position2_player" class="chosen-select-no-single" style="display: none;">
	                           <?php foreach ($postionlist as $postion) { ?>
                                    <option value="<?php if (!empty($postion->position_title)) echo $postion->position_title; ?>"><?php if (!empty($postion->position_title)) echo $postion->position_title; ?></option>
                                <?php } ?>									
							  </select>
                            </label>
                            </p>
                            <p class="form-row form-row-wide">
                            <label for="position3_player">3rd Preference:
                            <select name="position3" id="position3_player" class="chosen-select-no-single" style="display: none;">
								<?php foreach ($postionlist as $postion) { ?>
                                    <option value="<?php if (!empty($postion->position_title)) echo $postion->position_title; ?>"><?php if (!empty($postion->position_title)) echo $postion->position_title; ?></option>
                                <?php } ?>
							 </select>
                            </label>
                            </p>
                            <!-- <div class="col-md-12">
                                <p class="col-md-6 ">
                                    <label class=""> Upload Image: </label>
                                </p>    
                                <div class="col-md-6 change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" name="image" class="upload">
                                    </div>
                                </div>
                                </div> -->
                            </div>
                            <div class="col-md-4 col-md-offset-2">
                            <h4 class="headline centered margin-bottom-15 padding-top-25">Personal Details</h4>
                            <p class="form-row form-row-wide">
								<label for="username_player">Username:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="username" id="username_player" required/>
								</label>
							</p>
								
                            <p class="form-row form-row-wide">
								<label for="dateofbirth_player">Date Of Birth:
									<i class="im im-icon-Calendar"></i>
                                  <input type="text" name="dateofbirth" id="booking-date" data-lang="en" data-large-mode="true" data-min-year="1800" data-max-year="2020" data-format="d/m/Y">
								</label>
							</p>
                            <p class="form-row form-row-wide">
                                <label for="address">Address1:
                                    <i class="im im-icon-Location-2"></i>
                                    <input type="text" name="address1" id="address1" placeholder="e.g. 964 School Street1 street2" required>
                                </label>
                            </p>

                            <p class="form-row form-row-wide">
                                <label for="address">Address2:
                                    <i class="im im-icon-Location-2"></i>
                                    <input type="text" name="address2" id="address2" placeholder="e.g. 964 School Street1 street2" required>
                                </label>
                            </p>
							 <p class="form-row form-row-wide">
								<label for="city_player">City:
									<i class="im im-icon-City-Hall"></i>
									<input type="text" class="input-text" name="city" id="city_player" required />
								</label>
							</p>
                        <p class="form-row form-row-wide">
                            <label for="select1">State</label>
                            <select name="state" id="state" class="chosen-select-no-single"  required>
                                <option value="Australia" selected>Australia</option>
                                <option value="New South Wales">New South Wales</option>
                                <option value="Victoria">Victoria</option>
                                <option value="Tasmania">Tasmania</option>
                                <option value="Queensland">Queensland</option>
                                <option value="Western Australia">Western Australia</option>
                                <option value="South Australia">South Australia</option>
                                <option value="Northern Territory">Northern Territory</option>
                                <option value="Australian Capital Territory">Australian Capital Territory</option>
                            </select>
                        </p>
                            <p class="form-row form-row-wide">
								<label for="postcode_player">Postcode:
									<i class="im im-icon-Post-Office"></i>
									<input type="text" class="input-text" name="postcode" id="postcode_player" required />
								</label>
							</p>
							<p class="form-row form-row-wide">
                            <label for="country_player">Country
                            <select class="chosen-select-no-single" id="country_player" name="country" required style="display: none;">
                                <?php foreach ($countrylist as $country) { ?>
								    <option value="<?php if (!empty($country->country_name)) echo $country->country_name; ?>"><?php if (!empty($country->country_name)) echo $country->country_name; ?></option>
								<?php } ?>
							  </select>
                            </label>
                            </p>
                        <p class="form-row form-row-wide">
                            <label for="phonenumber">Phone Number:
                                <i class="im im-icon-Phone"></i>
                                <input id="phone" type="tel" name="phone" value="(__) ____-____" pattern="^\(\s+)?\(?(17|25|29|33|44)\)?(\s+)?[0-9]{4}-?[0-9]{4}$" required>
                            </label>
                        </p>
                        <p class="form-row form-row-wide">
                            <label for="mobilenumber">Mobile Number:
                                <i class="im im-icon-Phone-4G"></i>
                                <input id="phone2" type="tel" name="mobile" value="____-___-___" pattern="[0-9]{4}-?[0-9]{3}-?[0-9]{3}$" required>
                            </label>
                        </p>
                            </div>
                            
                            <div class="clearfix"></div>
							<div class="col-md-12 text-center">
							<input type="submit" id="submit_action_player" class="button border fw margin-top-30 margin-bottom-20" name="register" value="Register Player" />
                            </div>
	
			       </form>
                </div>
				
			</div>
		</div>








	<script type="text/javascript">
    $(document).ready(function(){      
        $(document).on('click','#submit_action_player', function() {


        	email_player 		= $('#email_player').val();
        	password_player 	= $('#password_player').val();
        	position1_player 	= $('#position1_player').val();
        	position2_player   	= $('#position2_player').val();
        	position3s_player   = $('#position3_player').val();
        	username_player 	= $('#username_player').val();
        	dateofbirth_player 	= $('#booking-date').val();
        	address_player 		= $('#address_player').val();
        	city_player 		= $('#city_player').val();
        	state_player 		= $('#state_player').val();
        	postcode_player 	= $('#postcode_player').val();
        	country_player 		= $('#country_player').val();
        	phone_player 		= $('#phone_player').val();
        	mobile_player 		= $('#mobile_player').val();

        	if(email_player == '')
        		$('#email_player').css("border-color", "red");
        	else
        		$('#email_player').css("border-color", "green");
        	
        	if(password_player == '')
        		$('#password_player').css("border-color", "red");
        	else
        		$('#password_player').css("border-color", "green");
        	
        	if(position1_player == '')
        		$('#position1_player').css("border-color", "red");
        	else 
        		$('#position1_player').css("border-color", "green");

        	if(position2_player == '')
        		$('#position2_player').css("border-color", "red");
        	else
        		$('#position2_player').css("border-color", "green");

        	if(position3_player == '')
        		$('#position3_player').css("border-color", "red");
        	else
        		$('#position3_player').css("border-color", "green");



        	if(username_player == '')
        		$('#username_player').css("border-color", "red");
        	else 
        		$('#username_player').css("border-color", "green");


        	if(dateofbirth_player == '')
        		$('#booking-date').css("border-color", "red");
        	else
        		$('#booking-date').css("border-color", "green");


            if(address1 == '')
                $('#address1').css("border-color", "red");
            else
                $('#address1').css("border-color", "green");


            if(address2 == '')
                $('#address2').css("border-color", "red");
            else
                $('#address2').css("border-color", "green");


        	if(city_player == '')
        		$('#city_player').css("border-color", "red");
        	else
        		$('#city_player').css("border-color", "green"); 


        	if(state_player == '')
        		$('#state_player').css("border-color", "red");
        	else
        		$('#state_player').css("border-color", "green");


        	if(postcode_player == '')
        		$('#postcode_player').css("border-color", "red");
        	else
        		$('#postcode_player').css("border-color", "green");


        	if(country_player == '')
        		$('#country_player').css("border-color", "red");
        	else 
        		$('#country_player').css("border-color", "green");

        	if(phone_player == '')
        		$('#phone_player').css("border-color", "red");
        	else
        		$('#phone_player').css("border-color", "green");

        	if(mobile_player == '')
        		$('#mobile_player').css("border-color", "red");
        	else 
        		$('#mobile_player').css("border-color", "green");
        	

        	if( email_player != '' && password_player != '' && position1_player != '' && position2_player != '' && position3_player != '' && username_player != '' && dateofbirth_player != '' &&
        		address1 != '' && address2 != '' && city_player != '' && state_player != '' && postcode_player != '' && country_player != '' && phone_player != '' && mobile_player != '') {
        		$('#player_reg').submit();
        	}

        });
  });




window.onload = function() {
   MaskedInput({
      elm: document.getElementById('phone'), // select only by id
      format: '(__) ____-____',
      separator: ' ()-'
   });
  
     MaskedInput({
      elm: document.getElementById('phone2'), // select only by id
      format: '____-___-___',
      separator: ' ()-'
   });
};




</script>