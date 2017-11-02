<div class="dashboard-content">

	<?php if ($this->session->flashdata('success_msg') != "") { ?>
	<div class="alert alert-success alert-dismissable" style="background-color: #00a65a !important;border-radius: 3px;color: #000;padding: 15px;border: 1px solid transparent;">
		<a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: #000;opacity: .2;position: relative;top: -2px;right: 0px;float: right;font-size: 21px;font-weight: 700;line-height: 1;color: #000;text-shadow: 0 1px 0 #fff;filter: alpha(opacity=20);opacity: .2;">&times;</a>
		<strong style="color: #000;">Successfully</strong> <?php echo $this->session->flashdata('success_msg'); ?>
	</div>
	<?php } ?>
	<?php if ($this->session->flashdata('error_msg') != "") { ?>
	<div class="alert alert-warning alert-dismissable" style="background-color: #00a65a !important;border-radius: 3px;color: #000;padding: 15px;border: 1px solid transparent;">
		<a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: #000;position: relative;top: -2px;right: 0px;float: right;font-size: 21px;font-weight: 700;line-height: 1;text-shadow: 0 1px 0 #fff;filter: alpha(opacity=20);opacity: .2;">&times;</a>
		<strong style="color: #000;">Warning!</strong> <?php echo $this->session->flashdata('error_msg'); ?>
	</div>
	<?php } ?>

	<!-- Titlebar -->
	<div id="titlebar">
		<div class="row">
			<div class="col-md-12">
				<h2>Inspire Sports Group :: Club Information</h2>
				<!-- Breadcrumbs -->
 				<!-- <nav id="breadcrumbs">
 					<ul>
 						
 						<li><a href="#">Add New Event Detail</a></li>

 					</ul>
 				</nav> -->
 			</div>
 		</div>
 	</div>

 	<div class="row">
 		<div class="col-md-12">
 			
 			
 			<!-- Content -->
 			
 			


 			<div class="style-2">
 				<!-- Tabs Navigation -->
 				<ul class="tabs-nav">
 					<li class="<?php if ($tab == "profile") echo "active"; ?>"><a href="#profile" data-toggle="tab">Club Information </a></li>
 					<li class="<?php if ($tab == "picture") echo "active"; ?>"><a href="#picture" data-toggle="tab">Profile </a></li>
 					<li class="<?php if ($tab == "password") echo "active"; ?>"><a href="#password" data-toggle="tab">Change Password </a></li>
 				</ul>

 				<!-- Tabs Content -->
 				<div class="tabs-container margin-bottom-30 tab-content ">
 					<div class="tab-pane fade <?php if ($tab == "profile") echo "active in"; ?>" id="profile">
 						<form method="post" class="sign-in-form" action="<?php echo site_url();?>/netball/updateclubdata" enctype="multipart/form-data">
 							<input type="hidden" name="id" value="<?php if (!empty($clubdatainfo->no)) echo $clubdatainfo->no; ?>">
 							<h4 class="headline centered margin-bottom-15 padding-top-25">Personal Details</h4>
 							<p class="form-row form-row-wide">
 								<?php if (isset($clubdatainfo->name)) { ?>
 								<label for="username">Username:
 									<i class="im im-icon-Male"></i>
 									<input class="input-text" name="username" id="username" value="<?php if (!empty($clubdatainfo->name)) echo $clubdatainfo->name; ?>" type="text" required>
 								</label>
 								<?php } else { ?>
 								<label for="username">Username:
 									<i class="im im-icon-Male"></i>
 									<input class="input-text" name="username" id="username" type="text" required>
 								</label>
 								<?php } ?> 
 							</p>
 							<p class="form-row form-row-wide">
 								<?php if (isset($clubdatainfo->email)) { ?>
 								<label for="email">Email Address:
 									<i class="im im-icon-Mail"></i>
 									<input type="email" class="input-text" name="email" id="email" value="<?php if (!empty($clubdatainfo->email)) echo $clubdatainfo->email; ?>"  required/>
 								</label>
 								<?php } else { ?>
 								<label for="email">Email Address:
 									<i class="im im-icon-Mail"></i>
 									<input type="email" class="input-text" name="email" id="email"  required/>
 								</label>
 								<?php } ?> 
 							</p>
 							
 							<p class="form-row form-row-wide">
 								<?php if (isset($clubdatainfo->club_name)) { ?>
 								<label for="clubname">Club Name:
 									<i class="im im-icon-Tennis-Ball"></i>
 									<input type="text" class="input-text" name="clubname" id="clubname" value="<?php if (!empty($clubdatainfo->club_name)) echo $clubdatainfo->club_name; ?>" required/>
 								</label>
 								<?php } else { ?>
 								<label for="clubname">Club Name:
 									<i class="im im-icon-Tennis-Ball"></i>
 									<input type="text" class="input-text" name="clubname" id="clubname" required/>
 								</label>
 								<?php } ?> 
 							</p>

 							<p class="form-row form-row-wide">
 								<?php if (isset($clubdatainfo->association_afiliated)) { ?>
 								<label for="association">Association Afiliated With:
 									<i class="im im-icon-Data-Yes"></i>
 									<input type="text" class="input-text" name="association" id="association" value="<?php if (!empty($clubdatainfo->association_afiliated)) echo $clubdatainfo->association_afiliated; ?>"  required/>
 								</label>
 								<?php } else { ?>
 								<label for="association">Association Afiliated With:
 									<i class="im im-icon-Data-Yes"></i>
 									<input type="text" class="input-text" name="association" id="association"  required/>
 								</label>
 								<?php } ?> 
 							</p>

 							<p class="form-row form-row-wide">
 								<?php if (isset($clubdatainfo->stablishes_date)) { ?>
 								<label for="dateofbirth">Date Of Birth:
 									<i class="im im-icon-Calendar"></i>
 									<?php 
 									$dateofbirth = date("d/m/Y",strtotime($clubdatainfo->stablishes_date));
 									 ?>
 									<input id="dateofbirth" data-lang="en" name="dateofbirth" value="<?php if (!empty($dateofbirth)) echo $dateofbirth; ?>" data-large-mode="true" data-min-year="1800" data-max-year="2020" data-id="datedropper-0" readonly class="picker-input" type="text">
 								</label>
 								<?php } else { ?>
 								<label for="dateofbirth">Date Of Birth:
 									<i class="im im-icon-Calendar"></i>
 									<input id="dateofbirth" data-lang="en" name="dateofbirth" data-large-mode="true" data-min-year="1800" data-max-year="2020" data-id="datedropper-0" required type="text">
 								</label>
 								<?php } ?> 

 							</p>

 							<p class="form-row form-row-wide">
 								<?php if (isset($clubdatainfo->address)) { ?>
 								<label for="address">Address:
 									<i class="im im-icon-Location-2"></i>
 									<input placeholder="e.g. 964 School Street1 street2" name="address" value="<?php if (!empty($clubdatainfo->address)) echo $clubdatainfo->address; ?>" type="text">
 								</label>
 								<?php } else { ?>
 								<label for="address">Address:
 									<i class="im im-icon-Location-2"></i>
 									<input placeholder="e.g. 964 School Street1 street2" name="address" type="text">
 								</label>
 								<?php } ?>
 							</p>
 							<p class="form-row form-row-wide">
 								<?php if (isset($clubdatainfo->city)) { ?>
 								<label for="city">City:
 									<i class="im im-icon-City-Hall"></i>
 									<input class="input-text" name="city" id="city" value="<?php if (!empty($clubdatainfo->city)) echo $clubdatainfo->city; ?>" type="text">
 								</label>
 								<?php } else { ?>
 								<label for="city">City:
 									<i class="im im-icon-City-Hall"></i>
 									<input class="input-text" name="city" id="city" type="text">
 								</label>
 								<?php } ?>
 							</p> 							
 							<p class="form-row form-row-wide">
 								<label for="select1">State</label>
 								<select name="state" id="state" class="chosen-select-no-single"  required>
 									<option value="Australia"  <?php if($clubdatainfo->state == "Australia") echo "selected" ?> >Australia</option>
 									<option value="New South Wales" <?php if($clubdatainfo->state == "New South Wales") echo "selected" ?> >New South Wales</option>
 									<option value="Victoria" <?php if($clubdatainfo->state == "Victoria") echo "selected" ?> >Victoria</option>
 									<option value="Tasmania" <?php if($clubdatainfo->state == "Tasmania") echo "selected" ?> >Tasmania</option>
 									<option value="Queensland" <?php if($clubdatainfo->state == "Queensland") echo "selected" ?> >Queensland</option>
 									<option value="Western Australia" <?php if($clubdatainfo->state == "Western Australia") echo "selected" ?> >Western Australia</option>
 									<option value="South Australia" <?php if($clubdatainfo->state == "South Australia") echo "selected" ?> >South Australia</option>
 									<option value="Northern Territory" <?php if($clubdatainfo->state == "Northern Territory") echo "selected" ?> >Northern Territory</option>
 									<option value="Australian Capital Territory" <?php if($clubdatainfo->state == "Australian Capital Territory") echo "selected" ?> >Australian Capital Territory</option>
 								</select>
 							</p>
 							<p class="form-row form-row-wide">
 								<?php if (isset($clubdatainfo->postcode)) { ?>
 								<label for="postcode">Postcode:
 									<i class="im im-icon-Post-Office"></i>
 									<input class="input-text" name="postcode" id="postcode" value="<?php if (!empty($clubdatainfo->postcode)) echo $clubdatainfo->postcode; ?>" type="text">
 								</label>
 								<?php } else { ?>
 								<label for="postcode">Postcode:
 									<i class="im im-icon-Post-Office"></i>
 									<input class="input-text" name="postcode" id="postcode" type="text">
 								</label>
 								<?php } ?>
 							</p>
 							<p class="form-row form-row-wide">
 								<label for="select1">Country
 									<select class="chosen-select-no-single" name="country" style="display: none;">
 										<?php foreach ($countrylist as $country) { 
 											$str_flag = "";
 											if(isset($clubdatainfo->country)) {
 												if($country->country_name == $clubdatainfo->country) {
 													$str_flag = "selected"; 
 												}
 												else $str_flag="";
 											} 
 											?>
 											<option value="<?php if (!empty($country->country_name)) echo $country->country_name; ?>" <?php echo $str_flag;?>>
 												<?php if (!empty($country->country_name)) echo $country->country_name; ?>
 											</option>
 											<?php } ?>
 										</select>
 									</label>
 								</p>
 								<p class="form-row form-row-wide">
 									<?php if (isset($clubdatainfo->phone)) { ?>
 									<label for="phone">Phone Number:
 										<i class="im im-icon-Phone"></i>
 										<input id="phone" type="tel" name="phone" value="<?php if (!empty($clubdatainfo->phone)) echo $clubdatainfo->phone; ?>" pattern="^\(\s+)?\(?(17|25|29|33|44)\)?(\s+)?[0-9]{4}-?[0-9]{4}$" required>
 									</label>
 									<?php } else { ?>
 									<label for="phone">Phone Number:
 										<i class="im im-icon-Phone"></i>
 										<input id="phone" type="tel" name="phone" value="(__) ____-____" pattern="^\(\s+)?\(?(17|25|29|33|44)\)?(\s+)?[0-9]{4}-?[0-9]{4}$" required>
 									</label>
 									<?php } ?>
 								</p>
 								<p class="form-row form-row-wide">
 									<?php if (isset($clubdatainfo->mobile)) { ?>
 									<label for="mobile">Mobile Number:
 										<i class="im im-icon-Phone-4G"></i>
 										<input id="phone2" type="tel" name="mobile" value="<?php if (!empty($clubdatainfo->mobile)) echo $clubdatainfo->mobile; ?>" pattern="[0-9]{4}-?[0-9]{3}-?[0-9]{3}$" required>
 									</label>
 									<?php } else { ?>
 									<label for="mobile">Mobile Number:
 										<i class="im im-icon-Phone-4G"></i>
 										<input id="phone2" type="tel" name="mobile" value="____-___-___" pattern="[0-9]{4}-?[0-9]{3}-?[0-9]{3}$" required>
 									</label>
 									<?php } ?>
 								</p>
 								<div class="clearfix"></div>
 								<div class="col-md-12 text-center">
 									<input type="submit" class="button border fw margin-top-30 margin-bottom-20" value="Update" style="width: 10%" />
 								</div>
 							</form>
 						</div>

 						<div class="tab-pane fade <?php if ($tab == "picture") echo "active in"; ?>" id="picture">
 							<div class="col-lg-6 col-md-12">
 								<div class="sidebar"> 
 									<form method="post" class="sign-in-form" action="<?php echo site_url();?>/netball/updateclubdata" enctype="multipart/form-data">
 										<input type="hidden" name="id" value="<?php if (!empty($clubdatainfo->no)) echo $clubdatainfo->no; ?>">
 										<!-- Widget -->
 										<div class="widget margin-bottom-40">
 											<div class="edit-profile-photo text-center">
 												<img src='<?php echo base_url(); ?>images/<?php echo $clubdatainfo->photo; ?>' alt="">

 												<?php if (isset($clubdatainfo->photo)) { ?>
 												<div class="change-photo-btn">
 													<div class="photoUpload">
 														<span><i class="fa fa-upload"></i> Upload Photo</span>
 														<input type="file" name="image" value="<?php if (!empty($clubdatainfo->photo)) echo $clubdatainfo->photo; ?>" class="upload">
 													</div>
 												</div>
 												<?php } else { ?>
 												<div class="change-photo-btn">
 													<div class="photoUpload">
 														<span><i class="fa fa-upload"></i> Upload Photo</span>
 														<input type="file" name="image" class="upload">
 													</div>
 												</div>
 												<?php } ?>
 											</div>
 										</div>
 										<!-- Widget / End --> 
 										<div class="clearfix"></div>
 										<div class="col-md-12 text-center">
 											<input type="submit" class="button border fw margin-top-30 margin-bottom-20" value="Update" style="width: 10%" />
 										</div>
 									</form>	
 								</div>
 							</div>
 						</div>



 						<div class="tab-pane fade <?php if ($tab == "password") echo "active in"; ?>" id="password">
 							<form method="post" class="sign-in-form" action="<?php echo site_url();?>/netball/updateclubpassword">
 								<input type="hidden" name="id" value="<?php if (!empty($clubdatainfo->no)) echo $clubdatainfo->no; ?>">
 								<h4 class="headline centered margin-bottom-15 padding-top-25"> Change Password </h4>
 								<p class="form-row form-row-wide">
 									<label for="password">Password:
 										<i class="im im-icon-Lock-2"></i>
 										<input class="input-text" name="password" type="password" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 4 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required/>
 									</label>
 								</p>
 								<p class="form-row form-row-wide">
 									<label for="password_two">Confirm Password:
 										<i class="im im-icon-Lock-2"></i>
 										<input class="input-text" name="password_two" type="password" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required/>
 									</label>
 								</p>
 								<div class="clearfix"></div>
 								<div class="col-md-12 text-center">
 									<input type="submit" class="button border fw margin-top-30 margin-bottom-20" value="Update" style="width: 10%" />
 								</div>
 							</form>
 						</div>

 						
 					</div>
 				</div>

 			</div>
 			<!-- Content -->
 			
 			
 			
 			
 			
 		</div>
 		<div class="clearfix"></div>
 		
 		
 		<!-- Sidebar / End --> 


 		<!-- Copyrights -->
 		<div class="col-md-12">
 			<div class="copyrights">© 2017 Inspire Sports Group. All Rights Reserved.</div>
 		</div>

 	</div>

 </div>
 <!-- Content / End -->


 <script type="text/javascript">


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