 <div class="dashboard-content">

 	<!-- Titlebar -->
 	<div id="titlebar">
 		<div class="row">
 			<div class="col-md-12">
 				<h2>Inspire Sports Group :: Add New Event Detail</h2>
 				<!-- Breadcrumbs -->
 				<nav id="breadcrumbs">
 					<ul>
 						<li><a href="#">Home</a></li>
 						<li><a href="#">Add New Event Detail</a></li>

 					</ul>
 				</nav>
 			</div>
 		</div>
 	</div>

 	<div class="row">
 		<div class="col-md-12">
 			
 			
 			<!-- Content -->
 			
 			


 			<div class="style-2">
 				<!-- Tabs Navigation -->
 				<ul class="tabs-nav">
 					<li class="active"><a href="#tab3">Player Information </a></li>
 					<li class=""><a href="#tab4">Profile </a></li>
 				</ul>

 				<!-- Tabs Content -->
 				<div class="tabs-container margin-bottom-30">
 					<div class="tab-content" id="tab3" style="display: none;">
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
 								<label for="dateofbirth">Stablishes Date:
 									<i class="im im-icon-Calendar"></i>
 									<input id="dateofbirth" data-lang="en" name="dateofbirth" value="<?php if (!empty($clubdatainfo->stablishes_date)) echo $clubdatainfo->stablishes_date; ?>" data-large-mode="true" data-min-year="1800" data-max-year="2020" data-id="datedropper-0" class="picker-input" required type="text">
 								</label>
 							<?php } else { ?>
 								<label for="dateofbirth">Stablishes Date:
 									<i class="im im-icon-Calendar"></i>
 									<input id="dateofbirth" data-lang="en" name="dateofbirth" data-large-mode="true" data-min-year="1800" data-max-year="2020" data-id="datedropper-0" class="picker-input" required type="text">
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
 								<?php if (isset($clubdatainfo->state)) { ?>
 								<label for="state">State:
 									<i class="im im-icon-Globe"></i>
 									<input class="input-text" name="state" id="state" value="<?php if (!empty($clubdatainfo->state)) echo $clubdatainfo->state; ?>" type="text">
 								</label>
 								<?php } else { ?>
 								<label for="state">State:
 									<i class="im im-icon-Globe"></i>
 									<input class="input-text" name="state" id="state" type="text">
 								</label>
 								<?php } ?>
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
 									<input name="phone" value="<?php if (!empty($clubdatainfo->phone)) echo $clubdatainfo->phone; ?>" type="tel">
 								</label>
 								<?php } else { ?>
 								<label for="phone">Phone Number:
 									<i class="im im-icon-Phone"></i>
 									<input name="phone" type="tel">
 								</label>
 								<?php } ?>
 							</p>
 							<p class="form-row form-row-wide">
 								<?php if (isset($clubdatainfo->mobile)) { ?>
 								<label for="mobile">Mobile Number:
 									<i class="im im-icon-Phone-4G"></i>
 									<input name="mobile" value="<?php if (!empty($clubdatainfo->mobile)) echo $clubdatainfo->mobile; ?>" type="tel">
 								</label>
 								<?php } else { ?>
 								<label for="mobile">Mobile Number:
 									<i class="im im-icon-Phone-4G"></i>
 									<input name="mobile" type="tel">
 								</label>
 								<?php } ?>
 							</p>
 							<div class="clearfix"></div>
 							<div class="col-md-12 text-center">
								<input type="submit" class="button border fw margin-top-30 margin-bottom-20" value="Update" style="width: 10%" />
							</div>
 						</form>
 					</div>

 					<div class="tab-content" id="tab4"  style="display: block;">
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