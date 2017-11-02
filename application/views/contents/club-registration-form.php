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
			<h3 class="headline centered margin-bottom-45 padding-top-35">Inspire Sports Group :: Club Registration</h3>
			<div class="row">

				<form action="<?php echo site_url();?>/netball/clubRegistrationFormdata" method="post" id="club_reg" class="sign-in-form" enctype="multipart/form-data">
					<input type="hidden" name="value_type" value="club">
					<div class="col-md-4 col-md-offset-1">	
						<h4 class="headline centered margin-bottom-15 padding-top-25">Login Details</h4>

						<p class="form-row form-row-wide">
							<label for="email2">Email Address:
								<i class="im im-icon-Mail"></i>
								<input type="email" class="input-text" name="email" id="email2"  required/>
							</label>
						</p>

						<div class="form-row form-group form-row-wide">
							<label for="password">Password:
								<i class="im im-icon-Lock-2" style="top: 48px;"></i>
								<input class="input-text exampleInputPassword1" id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;"  placeholder="Password" required/>
								<div class="progress">
					                <div class="progress-bar"></div>
					            </div>
							</label>
						</div>
						




						<p class="form-row form-row-wide">
							<label for="password_two">Confirm Password:
								<i class="im im-icon-Lock-2"></i>
								<input class="input-text" title="password do not match" id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required/>
							</label>
						</p>
						<h4 class="headline centered margin-bottom-15 padding-top-25">Club Details</h4>
						<p class="form-row form-row-wide">
							<label for="username3">Club Name:
								<i class="im im-icon-Tennis-Ball"></i>
								<input type="text" class="input-text" name="clubname" id="clubname" required/>
							</label>
						</p>
						<p class="form-row form-row-wide">
							<label for="username4">Association Afiliated With:
								<i class="im im-icon-Data-Yes"></i>
								<input type="text" class="input-text" name="association" id="association"  required/>
							</label>
						</p>
						<!-- Widget -->
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
						</div>	 -->	
 						<!-- Widget / End --> 
					</div>


					<div class="col-md-4 col-md-offset-2">
						<h4 class="headline centered margin-bottom-15 padding-top-25">Treasurer Details</h4>
						<p class="form-row form-row-wide">
							<label for="username2">Username:
								<i class="im im-icon-Male"></i>
								<input type="text" class="input-text" name="username" id="username2" required/>
							</label>
						</p>

						<p class="form-row form-row-wide">
							<label for="dateofbirth">Date Of Birth:
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
								<input type="text" name="address2" id="address2" placeholder="e.g. 964 School Street1 street2">
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
							<label for="postcode">Postcode:
								<i class="im im-icon-Post-Office"></i>
								<input type="text" class="input-text" name="postcode" id="postcode"  required/>
							</label>
						</p>
						<p class="form-row form-row-wide">
							<label for="select1">Country</label>
							<select name="country" id="country" class="chosen-select-no-single"  required>
								<?php foreach ($countrylist as $country) { ?>
							    	<option value="<?php if (!empty($country->country_name)) echo $country->country_name; ?>"><?php if (!empty($country->country_name)) echo $country->country_name; ?></option>
								<?php } ?>
							</select>
						</p>
						<p class="form-row form-row-wide">
							<label for="phonenumber">Phone Number:
								<i class="im im-icon-Phone"></i>
								<input id="phone" type="tel" name="phone" value="(__) ____-____" >
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
						<input type="submit" id="submit-action" class="button border fw margin-top-30 margin-bottom-20" name="register" value="Next" style="width: 10%" />
					</div>

				</form>
			</div>

		</div>
	</div>



	<script type="text/javascript">
    $(document).ready(function(){      
        $(document).on('click','#submit-action', function() {


        	email2 		= $('#email2').val();
        	password 	= $('#password').val();
        	clubname 	= $('#clubname').val();
        	association = $('#association').val();
        	username2 	= $('#username2').val();
        	dateofbirth = $('#booking-date').val();
        	address1 	= $('#address1').val();
        
        	city 		= $('#city').val();
        	state 		= $('#state').val();
        	postcode 	= $('#postcode').val();
        	country 	= $('#country').val();
        	phone 		= $('#phone').val();
        	mobile 		= $('#mobile').val();

        	if(email2 == '')
        		$('#email2').css("border-color", "red");
        	else
        		$('#email2').css("border-color", "green");
        	
        	if(password == '')
        		$('#password').css("border-color", "red");
        	else
        		$('#password').css("border-color", "green");
        	
        	if(clubname == '')
        		$('#clubname').css("border-color", "red");
        	else 
        		$('#clubname').css("border-color", "green");

        	if(association == '')
        		$('#association').css("border-color", "red");
        	else
        		$('#association').css("border-color", "green");


        	if(username2 == '')
        		$('#username2').css("border-color", "red");
        	else 
        		$('#username2').css("border-color", "green");


        	if(dateofbirth == '')
        		$('#booking-date').css("border-color", "red");
        	else
        		$('#booking-date').css("border-color", "green");


        	if(address1 == '')
        		$('#address1').css("border-color", "red");
        	else
        		$('#address1').css("border-color", "green");


        	if(city == '')
        		$('#city').css("border-color", "red");
        	else
        		$('#city').css("border-color", "green"); 


        	if(state == '')
        		$('#state').css("border-color", "red");
        	else
        		$('#state').css("border-color", "green");


        	if(postcode == '')
        		$('#postcode').css("border-color", "red");
        	else
        		$('#postcode').css("border-color", "green");


        	if(country == '')
        		$('#country').css("border-color", "red");
        	else 
        		$('#country').css("border-color", "green");

        	if(phone == '')
        		$('#phone').css("border-color", "red");
        	else
        		$('#phone').css("border-color", "green");

        	if(mobile == '')
        		$('#mobile').css("border-color", "red");
        	else 
        		$('#mobile').css("border-color", "green");
        	

        	if( email2 != '' && password != '' && clubname != '' && association != '' && username != '' && dateofbirth != '' &&
        		address1 != '' && city != '' && state != '' && postcode != '' && country != '') {
        		if (phone != '' || mobile != '') {
        			$('#club_reg').submit();
        		}
        		
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

<script>
  $(".success-alert").fadeTo(2000, 500).slideUp(500, function()
  {
    $(".success-alert").slideUp(500);
  });   
 </script>

 
 <script>
  $(".alert-danger").fadeTo(2000, 500).slideUp(500, function()
  {
    $(".alert-danger").slideUp(500);
  });   
 </script>


