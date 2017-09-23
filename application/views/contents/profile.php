
 <!-- Content
================================================== -->
  <div class="container-fluid padding-top-35"> 
    
    <!-- Blog Posts -->
    <div class="">
      <div class="row"> 
      <div class="col-lg-3 col-md-4">
          <div class="sidebar"> 
            
            <!-- Widget -->
            <div class="widget margin-bottom-40">
              <div class="edit-profile-photo text-center">
							<img src="<?php echo base_url('assets/images/user-avatar.jpg');?>" alt="">
							<div class="change-photo-btn">
								<div class="photoUpload">
								    <span><i class="fa fa-upload"></i> Upload Photo</span>
								    <input type="file" class="upload">
								</div>
                               
							</div>
                           
						</div>
                        <div class="text-center">
                        <span>Username</span>
                        <div class="clearfix"></div>
                        <span>Email:<a href="mailto:user@hotmail.com"> user@hotmail.com</a></span>
                        <div class="clearfix"></div>
                        <span>Total Events:29129</span>
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
						<li class="active"><a href="#tab3"> Player Information</a></li>
						<li class=""><a href="#tab4"> My Events</a></li>
						<li class=""><a href="#tab5"> Payments</a></li>
					</ul>

					<!-- Tabs Content -->
					<div class="tabs-container margin-bottom-30">
						<div class="tab-content" id="tab3" style="display: inline-block;">
						<form class="sign-in-form">
                            <h4 class="headline centered margin-bottom-15 padding-top-25">Personal Details</h4>
                            <p class="form-row form-row-wide">
								<label for="username2">Username:
									<i class="im im-icon-Male"></i>
									<input class="input-text" name="username" id="username2" value="" type="text">
								</label>
							</p>
								
                            <p class="form-row form-row-wide">
								<label for="dateofbirth">date of Birth:
									<i class="im im-icon-Calendar"></i>
                                  <input id="booking-date" data-lang="en" data-large-mode="true" data-min-year="1800" data-max-year="2020" data-id="datedropper-0" class="picker-input" readonly="" type="text">
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="address">Address:
									<i class="im im-icon-Location-2"></i>
									<input placeholder="e.g. 964 School Street1 street2" type="text">
								</label>
							</p>
							 <p class="form-row form-row-wide">
								<label for="city1">City:
									<i class="im im-icon-City-Hall"></i>
									<input class="input-text" name="city1" id="city1" value="" type="text">
								</label>
							</p>
                             <p class="form-row form-row-wide">
								<label for="state">State:
									<i class="im im-icon-Globe"></i>
									<input class="input-text" name="state" id="state" value="" type="text">
								</label>
							</p>
                            <p class="form-row form-row-wide">
								<label for="postcode">Postcode:
									<i class="im im-icon-Post-Office"></i>
									<input class="input-text" name="postcode" id="postcode" value="" type="text">
								</label>
							</p>
							<p class="form-row form-row-wide">
                            <label for="select1">Country
                            <select class="chosen-select-no-single" style="display: none;">
										<option label="blank">Austraila</option>
										<option>Option1</option>
                                        <option>Option2</option>
                                        <option>Option3</option>
										
							  </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 100%;" title=""><a class="chosen-single"><span>Austraila</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input autocomplete="off" readonly="" type="text"></div><ul class="chosen-results"></ul></div></div>
                            </label>
                            </p>
                             <p class="form-row form-row-wide">
								<label for="phonenumber">Phone Number:
									<i class="im im-icon-Phone"></i>
									<input name="phonenumber" value="(123) 123-456" type="tel">
								</label>
							</p>
                            <p class="form-row form-row-wide">
								<label for="mobilenumber">Mobile Number:
									<i class="im im-icon-Phone-4G"></i>
									<input name="mobilenumber" value="0 123 456 789" type="tel">
								</label>
							</p>
                          </form>
						</div>

						<div class="tab-content" id="tab4" style="display: none;"><div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box with-icons margin-top-20">
					<h4>Recent Events</h4>
					<ul>
						<li>
							<i class="list-box-icon sl sl-icon-layers"></i> Your listing <strong><a href="#">Hotel Govendor</a></strong> has been approved!
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>

						<li>
							<i class="list-box-icon sl sl-icon-star"></i> Kathy Brown left a review <div class="numerical-rating high" data-rating="5.0"></div> on <strong><a href="#">Burger House</a></strong>
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>

						<li>
							<i class="list-box-icon sl sl-icon-heart"></i> Someone bookmarked your <strong><a href="#">Burger House</a></strong> listing!
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>

						<li>
							<i class="list-box-icon sl sl-icon-star"></i> Kathy Brown left a review <div class="numerical-rating mid" data-rating="3.0"></div> on <strong><a href="#">Airport</a></strong>
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>

						<li>
							<i class="list-box-icon sl sl-icon-heart"></i> Someone bookmarked your <strong><a href="#">Burger House</a></strong> listing!
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>

						<li>
							<i class="list-box-icon sl sl-icon-star"></i> John Doe left a review <div class="numerical-rating high" data-rating="4.0"></div> on <strong><a href="#">Burger House</a></strong>
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>

						<li>
							<i class="list-box-icon sl sl-icon-star"></i> Jack Perry left a review <div class="numerical-rating low" data-rating="2.5"></div> on <strong><a href="#">Tom's Restaurant</a></strong>
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>
					</ul>
				</div>
			</div>

						<div class="tab-content" id="tab5" style="display: none;">
				<div class="dashboard-list-box invoices with-icons margin-top-20">
					<h4>Invoices</h4>
					<ul>
						
						<li><i class="list-box-icon sl sl-icon-doc"></i>
							<strong>Professional Plan</strong>
							<ul>
								<li class="unpaid">Unpaid</li>
								<li>Order: #00124</li>
								<li>Date: 20/07/2017</li>
							</ul>
							<div class="buttons-to-right">
								<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
							</div>
						</li>
						
						<li><i class="list-box-icon sl sl-icon-doc"></i>
							<strong>Extended Plan</strong>
							<ul>
								<li class="paid">Paid</li>
								<li>Order: #00108</li>
								<li>Date: 14/07/2017</li>
							</ul>
							<div class="buttons-to-right">
								<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
							</div>
						</li>

						<li><i class="list-box-icon sl sl-icon-doc"></i>
							<strong>Extended Plan</strong>
							<ul>
								<li class="paid">Paid</li>
								<li>Order: #00097</li>
								<li>Date: 10/07/2017</li>
							</ul>
							<div class="buttons-to-right">
								<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
							</div>
						</li>
						
						<li><i class="list-box-icon sl sl-icon-doc"></i>
							<strong>Basic Plan</strong>
							<ul>
								<li class="paid">Paid</li>
								<li>Order: #00091</li>
								<li>Date: 30/06/2017</li>
							</ul>
							<div class="buttons-to-right">
								<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
							</div>
						</li>

					</ul>
				</div>
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