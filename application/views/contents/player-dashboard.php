<!-- Content================================================== -->
  <div class="container-fluid padding-top-35"> 
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
    
    <!-- Blog Posts -->
    <div class="">
      <div class="row"> 
      <div class="col-lg-3 col-md-4">
          <div class="sidebar"> 
            
            <!-- Widget -->
            <div class="widget margin-bottom-40">
            <form method="post" class="sign-in-form" action="<?php echo site_url();?>/netball/updateplayerdata" enctype="multipart/form-data">
 				<input type="hidden" name="id" value="<?php if (!empty($playerdatainfo->no)) echo $playerdatainfo->no; ?>">
              <div class="edit-profile-photo text-center">
							<img src="<?php echo base_url(); ?>images/<?php echo $playerdatainfo->photo; ?>">
							<div class="change-photo-btn">
								<div class="photoUpload">
								    <span><i class="fa fa-upload"></i> Upload Photo</span>
								    <input type="file" name="image" class="upload">
								</div>
                               
							</div>
                           
						</div>
                        <div class="text-center">
                        <span><?php if (!empty($playerdatainfo->name)) echo $playerdatainfo->name; ?></span>
                        <div class="clearfix"></div>
                        <span>Email:<a> <?php if (!empty($playerdatainfo->email)) echo $playerdatainfo->email; ?> </a></span>
                        <div class="clearfix"></div>
                        </div>

                        <div class="clearfix"></div>
 							<div class="col-md-12 text-center">
								<input type="submit" class="button border fw margin-top-30 margin-bottom-20" value="Update" style="width: 10%" />
							</div>
            </div>
            <!-- Widget / End --> 
            
          </div>
        </div>
        <div class="col-lg-9 col-md-8 padding-right-30">
          <div class="row">
            <div class="col-md-12">
               
              
                <!-- Content -->
                
                


				<div class="style-2">
					<!-- Tabs Navigation -->
					<ul class="tabs-nav">
						<li class="<?php if ($tab == "profile") echo "active"; ?>"><a href="#profile" data-toggle="tab"> Player Information </a></li>
						<li class="<?php if ($tab == "event") echo "active"; ?>"><a href="#event" data-toggle="tab"> My Events </a></li>
						<li class="<?php if ($tab == "payment") echo "active"; ?>"><a href="#payment" data-toggle="tab"> Payments </a></li>
						<li class="<?php if ($tab == "password") echo "active"; ?>"><a href="#password" data-toggle="tab"> Change Password </a></li>
					</ul>

					<!-- Tabs Content -->
					<div class="tabs-container margin-bottom-30 tab-content">
						<div class="tab-pane fade <?php if ($tab == "profile") echo "active in"; ?>" id="profile">
						<form method="post" class="sign-in-form" action="<?php echo site_url();?>/netball/updateplayerdata" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php if (!empty($playerdatainfo->no)) echo $playerdatainfo->no; ?>">
                            <h4 class="headline centered margin-bottom-15 padding-top-25">Personal Details</h4>

                            <p class="form-row form-row-wide">
                            	 <?php if (isset($playerdatainfo->name)) { ?>
								<label for="username12">Username:
									<i class="im im-icon-Male"></i>
									<input class="input-text" name="username12" id="username12" value="<?php if (!empty($playerdatainfo->name)) echo $playerdatainfo->name; ?>" type="text">
								</label>
								<?php } else { ?>
								<label for="username12">Username:
									<i class="im im-icon-Male"></i>
									<input class="input-text" name="username12" id="username12" type="text">
								</label>
								 <?php } ?> 
							</p>

							<p class="form-row form-row-wide">
								 <?php if (isset($playerdatainfo->name)) { ?>
								<label for="email_player">Email Address:
									<i class="im im-icon-Mail"></i>
									<input type="text" class="input-text" name="email" value="<?php if (!empty($playerdatainfo->email)) echo $playerdatainfo->email; ?>" />
								</label>
								<?php } else { ?>
								<label for="email_player">Email Address:
									<i class="im im-icon-Mail"></i>
									<input type="text" class="input-text" name="email"/>
								</label>
								<?php } ?> 
							</p>
								
                            <p class="form-row form-row-wide">
                            	 <?php if (isset($playerdatainfo->birthday)) { ?>
								<label for="dateofbirth">date of Birth:
									<i class="im im-icon-Calendar"></i>
                                  <input id="booking-date" data-lang="en" data-large-mode="true" value="<?php if (!empty($playerdatainfo->birthday)) echo $playerdatainfo->birthday; ?>" name="dateofbirth" data-min-year="1800" data-max-year="2020" data-id="datedropper-0" readonly class="picker-input" type="text">
								</label>
								<?php } else { ?>
								<label for="dateofbirth">date of Birth:
									<i class="im im-icon-Calendar"></i>
                                  <input id="booking-date" data-lang="en" data-large-mode="true" name="dateofbirth" data-min-year="1800" data-max-year="2020" data-id="datedropper-0" type="text">
								</label>
								 <?php } ?> 
							</p>
							 <p class="form-row form-row-wide">
								<label for="position1_player">1st Preference:
	                            <select name="position1"  class="chosen-select-no-single" style="display: none;">
	                            	<?php foreach ($postionlist as $postion) { 
											$str_flag = "";
	                      				if(isset($playerdatainfo->position1)) {
	                        				if($postion->position_title == $playerdatainfo->position1) {
	                          					$str_flag = "selected"; 
	                        				}
	                        				else $str_flag="";
	                      				} 
	                      				?>
							    		<option value="<?php if (!empty($postion->position_title)) echo $postion->position_title; ?>" <?php echo $str_flag;?>>
							    			<?php if (!empty($postion->position_title)) echo $postion->position_title; ?>
							    		</option>
									<?php } ?>
								 </select>
	                            </label>
                            </p>

                            <p class="form-row form-row-wide">
								<label for="position2_player">2st Preference:
	                            <select name="position2"  class="chosen-select-no-single" style="display: none;">
									<?php foreach ($postionlist as $postion) { 
											$str_flag = "";
	                      				if(isset($playerdatainfo->position2)) {
	                        				if($postion->position_title == $playerdatainfo->position2) {
	                          					$str_flag = "selected"; 
	                        				}
	                        				else $str_flag="";
	                      				} 
	                      				?>
							    		<option value="<?php if (!empty($postion->position_title)) echo $postion->position_title; ?>" <?php echo $str_flag;?>>
							    			<?php if (!empty($postion->position_title)) echo $postion->position_title; ?>
							    		</option>
									<?php } ?>
								  </select>
	                            </label>
                            </p>

                            <p class="form-row form-row-wide">
								<label for="position3_player">3st Preference:
	                            <select name="position3" class="chosen-select-no-single" style="display: none;">
									<?php foreach ($postionlist as $postion) { 
											$str_flag = "";
	                      				if(isset($playerdatainfo->position3)) {
	                        				if($postion->position_title == $playerdatainfo->position3) {
	                          					$str_flag = "selected"; 
	                        				}
	                        				else $str_flag="";
	                      				} 
	                      				?>
							    		<option value="<?php if (!empty($postion->position_title)) echo $postion->position_title; ?>" <?php echo $str_flag;?>>
							    			<?php if (!empty($postion->position_title)) echo $postion->position_title; ?>
							    		</option>
									<?php } ?>
								  </select>
	                            </label>
                            </p>

							<p class="form-row form-row-wide">
								 <?php if (isset($playerdatainfo->address)) { ?>
								<label for="address">Address:
									<i class="im im-icon-Location-2"></i>
									<input value="<?php if (!empty($playerdatainfo->address)) echo $playerdatainfo->address; ?>" name="address" type="text">
								</label>
								<?php } else { ?>
								<label for="address">Address:
									<i class="im im-icon-Location-2"></i>
									<input placeholder="e.g. 964 School Street1 street2" name="address" type="text">
								</label>
								 <?php } ?> 
							</p>
							 <p class="form-row form-row-wide">
							 	 <?php if (isset($playerdatainfo->city)) { ?>
								<label for="city1">City:
									<i class="im im-icon-City-Hall"></i>
									<input class="input-text" name="city" value="<?php if (!empty($playerdatainfo->city)) echo $playerdatainfo->city; ?>" type="text">
								</label>
								<?php } else { ?>
								<label for="city1">City:
									<i class="im im-icon-City-Hall"></i>
									<input class="input-text" name="city" type="text">
								</label>
								 <?php } ?> 
							</p>
                             <p class="form-row form-row-wide">
                             	 <?php if (isset($playerdatainfo->state)) { ?>
								<label for="state">State:
									<i class="im im-icon-Globe"></i>
									<input class="input-text" name="state" value="<?php if (!empty($playerdatainfo->state)) echo $playerdatainfo->state; ?>" type="text">
								</label>
								<?php } else { ?>
								<label for="state">State:
									<i class="im im-icon-Globe"></i>
									<input class="input-text" name="state" type="text">
								</label>
								 <?php } ?> 
							</p>
                            <p class="form-row form-row-wide">
                            	 <?php if (isset($playerdatainfo->postcode)) { ?>
								<label for="postcode">Postcode:
									<i class="im im-icon-Post-Office"></i>
									<input class="input-text" name="postcode" value="<?php if (!empty($playerdatainfo->postcode)) echo $playerdatainfo->postcode; ?>" type="text">
								</label>
								<?php } else { ?>
								<label for="postcode">Postcode:
									<i class="im im-icon-Post-Office"></i>
									<input class="input-text" name="postcode" type="text">
								</label>
								 <?php } ?> 
							</p>
							<p class="form-row form-row-wide">
 								<label for="select1">Country
 									<select class="chosen-select-no-single" name="country" style="display: none;">
 										<?php foreach ($countrylist as $country) { 
 											$str_flag = "";
                              				if(isset($playerdatainfo->country)) {
                                				if($country->country_name == $playerdatainfo->country) {
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
                             	 <?php if (isset($playerdatainfo->phone)) { ?>
								<label for="phonenumber">Phone Number:
									<i class="im im-icon-Phone"></i>
									<input name="phone" value="<?php if (!empty($playerdatainfo->phone)) echo $playerdatainfo->phone; ?>" type="tel">
								</label>
								<?php } else { ?>
								<label for="phonenumber">Phone Number:
									<i class="im im-icon-Phone"></i>
									<input name="phone" type="tel">
								</label>
								 <?php } ?> 
							</p>
                            <p class="form-row form-row-wide">
                            	 <?php if (isset($playerdatainfo->mobile)) { ?>
								<label for="mobilenumber">Mobile Number:
									<i class="im im-icon-Phone-4G"></i>
									<input name="mobile" value="<?php if (!empty($playerdatainfo->mobile)) echo $playerdatainfo->mobile; ?>" type="tel">
								</label>
								<?php } else { ?>
								<label for="mobilenumber">Mobile Number:
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

						<div class="tab-pane fade <?php if ($tab == "event") echo "active in"; ?>" id="event">
							<div class="col-lg-10 col-md-12">
								<div class="dashboard-list-box with-icons margin-top-20">
									<h4>Recent Events</h4>
					 				<table class="basic-table">
	          							<tbody>
									        <tr>
									          <th> Title </th>
									          <th> Venue </th>
									          <th> Date </th>
									          <th> Start Time </th>
									          <th> End Time </th>
									          <th> Fee </th>
									          <th> Special Requirements </th> 
									          <th> Status </th> 
									        </tr>
									        <?php foreach ($playereventlist as $playerevent) { ?>
										        <tr>
											        <td> <?php if (!empty($playerevent->title)) echo $playerevent->title; ?> </td>
													<td> <?php if (!empty($playerevent->venue)) echo $playerevent->venue; ?> </td>
													<td> <?php if (!empty($playerevent->date)) echo $playerevent->date; ?> </td>
													<td> <?php if (!empty($playerevent->starttime)) echo $playerevent->starttime; ?> </td>
													<td> <?php if (!empty($playerevent->endtime)) echo $playerevent->endtime; ?> </td>
													<td> <?php if (!empty($playerevent->fee)) echo $playerevent->fee; ?> </td>
													<td> <?php if (!empty($playerevent->special)) echo $playerevent->special; ?> </td>
													<td> 
														<?php if (isset($playerevent->reg_status)) { 
					                                        if($playerevent->reg_status == 0 )
					                                            echo "Not Confirmed";
					                                        else 
					                                            echo "Confirmed";
					                                    } ?>
													</td>
										        </tr>
										    <?php } ?>  
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="tab-pane fade <?php if ($tab == "payment") echo "active in"; ?>" id="payment">
						<div class="col-lg-10 col-md-12">
							<div class="dashboard-list-box with-icons margin-top-20">

								 <table class="basic-table">
				          <tbody>
				         <tr>
				          <th>Account Name</th>
				          <th>Account BSB</th>
				          <th>Account Number</th>
				          <th>Bank/Branch Name</th>
				          
				         </tr>
				         <tr>
				          <td>here ac name</td>
				          <td>here ac BSB</td>
				          <td>012345678912</td>
				          <td>here bank name</td>
				           
				        </tr>
				        <tr>
				          <td>here ac name</td>
				          <td>here ac BSB</td>
				          <td>012345678912</td>
				          <td>here bank name</td>
				          

				        </tr>
				        <tr>
				          <td>here ac name</td>
				          <td>here ac BSB</td>
				          <td>012345678912</td>
				          <td>here bank name</td>
				           
				        </tr>
				        <tr>
				          <td>here ac name</td>
				          <td>here ac BSB</td>
				          <td>012345678912</td>
				          <td>here bank name</td>
				           

				        </tr>
        
    
        
      </tbody>
  </table>

							</div>
							</div>
						</div>



						<div class="tab-pane fade <?php if ($tab == "password") echo "active in"; ?>" id="password">
 						<form method="post" class="sign-in-form" action="<?php echo site_url();?>/netball/updateplayerpassword">
 							<input type="hidden" name="id" value="<?php if (!empty($playerdatainfo->no)) echo $playerdatainfo->no; ?>">
 							<h4 class="headline centered margin-bottom-15 padding-top-25"> Change Password </h4>
							<p class="form-row form-row-wide">
								<label for="password">Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required/>
								</label>
							</p>
							<p class="form-row form-row-wide">
								<label for="password_two">Confirm Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required/>
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
          
        </div>
        
        
    
        
      </div>
      <!-- Sidebar / End --> 
      
    </div>
  </div>
</div>