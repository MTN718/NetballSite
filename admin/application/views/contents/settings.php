<div class="dashboard-content">

    <!-- Titlebar -->
    <div id="titlebar">
      <div class="row">
        <div class="col-md-12">
          <h2>Inspire Sports Group :: Settings</h2>
          <!-- Breadcrumbs -->
          <nav id="breadcrumbs">
            <ul>
              <li><a href="<?php echo site_url('netball/admin');?>">Home</a></li>
              <li><a href="#">New Event</a></li>
              
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
			<li class="<?php if ($tab == "profile") echo "active"; ?>"><a href="#profile"> My Profile </a></li>
            <li class="<?php if ($tab == "position") echo "active"; ?>"><a href="#position"> Position </a></li>
			<li class="<?php if ($tab == "about") echo "active"; ?>"><a href="#about"> About Us </a></li>
            <li class="<?php if ($tab == "contact") echo "active"; ?>"><a href="#contact"> Contact Us </a></li>
            <li class="<?php if ($tab == "privacytab") echo "active"; ?>"><a href="#privacytab"> Privacy Policy </a></li>
            <li class="<?php if ($tab == "pricing") echo "active"; ?>"><a href="#pricing"> Pricing Policy </a></li>
            <li class="<?php if ($tab == "term") echo "active"; ?>"><a href="#term"> Terms & Condition </a></li>
            <li class="<?php if ($tab == "how") echo "active"; ?>"><a href="#how"> How Its Work </a></li>
            <li class="<?php if ($tab == "faqs") echo "active"; ?>"><a href="#faqs"> Faq's </a></li>
		</ul>
		<!-- Tabs Content -->
	   <div class="tabs-container margin-bottom-30">

            <div class="tab-content" id="profile" style="display: none;">
                <div class="submit-section">
                    <form method="post" action="<?php echo site_url();?>/admin/adminprofileupdate">
                        <input type="hidden" name="id" value="<?php if (!empty($adminbasicinfo->no)) echo $adminbasicinfo->no; ?>">
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <p class="form-row form-row-wide">    
                                    <label for="username">User Name: </label>
                                    <?php if (isset($adminbasicinfo->user)) { ?>
                                        <input class="input-text" name="username" type="text"  value="<?php if (!empty($adminbasicinfo->user)) echo $adminbasicinfo->user; ?>"/>
                                    <?php } else { ?>
                                        <input class="input-text" name="username" type="text" placeholder="User Name" required/>
                                    <?php } ?> 
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p class="form-row form-row-wide">    
                                    <label for="password">Password: </label>
                                    <input class="input-text" id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required/>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <div class="form-row form-row-wide">    
                                    <label for="password_two">Confirm Password: </label>
                                    <input class="input-text" title="password do not match" id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required/>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <input type="submit" class="button border fw margin-top-10" name="button" value="Create" />
                            </div>
                        </div>   
                    </form>
                </div>
            </div>

            <div class="tab-content" id="position" style="display: none;">
            <div class="col-md-12">
                <div class="col-md-6 add-listing-headline">
                    <h3><i class="sl sl-icon-plus"></i> Positions
                     <a href="#postion-in-dialog" class="popup-with-zoom-anim button gray" style="float: right;"><i class="sl sl-icon-plus"></i> Add Position </a>
                     </h3>
                </div>
                   
            </div>             
                <table class="basic-table">
                    <tbody>
                        <tr>
                            <th>Position Title</th>
                            <th> Acition </th>
                        </tr>
                        <tr data-row-id=""  id="eventAction">
                            <td>
                                <input type="text" class="editable-col" col-index='1' value="dfsfsdfds" style="border: none;background: none;box-shadow: none;">
                            </td>
                            <td style="float: right;">
                                <a href="javascript:void(0)" class="button gray editable-col" col-index='2' data="0"><i class="sl sl-icon-close"></i> Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

			<div class="tab-content" id="about" style="display: none;">
                <div class="submit-section">
                    <form method="post" action="<?php echo site_url();?>/admin/updateaboutus">
                        <input type="hidden" name="id" value="<?php if (!empty($aboutusinfo->about_id)) echo $aboutusinfo->about_id; ?>">
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <label for="description"> About Us Descripition </label> 
                                <?php if (isset($aboutusinfo->description)) { ?>     
                                    <textarea type="text" class="form-control" name="description" required> 
                                        <?php if (!empty($aboutusinfo->description)) echo $aboutusinfo->description; ?>
                                    </textarea>
                                <?php } else { ?>
                                    <textarea type="text" class="form-control" name="description" placeholder="Description" required="required"></textarea>
                                <?php } ?>    
                            </div>
                            <div class="col-md-12 text-center">
                                <input type="submit" class="button border fw margin-top-10" name="button" value="Create" />
                            </div>
                        </div>   
                    </form>
                </div>
            </div>

            <div class="tab-content" id="contact" style="display: none;">
                <div class="submit-section">
                    <form method="post" action="<?php echo site_url();?>/admin/updatecontactus">
                        <input type="hidden" name="id" value="<?php if (!empty($contactusinfo->contact_us_id)) echo $contactusinfo->contact_us_id; ?>">
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <p class="form-row form-row-wide">    
                                    <label for="email">Email: </label>
                                    <?php if (isset($contactusinfo->email)) { ?>
                                        <input class="input-text" placeholder="Email" value="<?php if (!empty($contactusinfo->email)) echo $contactusinfo->email; ?>" name="email" type="email"/>
                                    <?php } else { ?>
                                        <input class="input-text" placeholder="Email" name="email" type="email" required/>
                                    <?php } ?>  
                                </p>    
                            </div>
                             <div class="col-md-12">
                                <div class="form-row form-row-wide">    
                                    <label for="phone"> Phone Number: </label>
                                    <?php if (isset($contactusinfo->phone)) { ?>
                                        <input class="input-text" name="phone" type="number" value="<?php if (!empty($contactusinfo->phone)) echo $contactusinfo->phone; ?>" placeholder="Phone Number"/>
                                    <?php } else { ?>
                                        <input class="input-text" name="phone" type="number" placeholder="Phone Number" required/>
                                    <?php } ?>  
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="phone"> Address: </label>
                                <?php if (isset($contactusinfo->address)) { ?>    
                                    <textarea type="text" rows="3" name="address"> 
                                        <?php if (!empty($contactusinfo->address)) echo $contactusinfo->address; ?>
                                    </textarea>
                                <?php } else { ?>
                                    <textarea type="text" rows="3" name="address" required> </textarea>
                                <?php } ?>  
                                </div>
                            <div class="col-md-12 text-center">
                                <input type="submit" class="button border fw margin-top-10" name="button" value="Create" />
                            </div>
                        </div>   
                    </form>
                </div>
            </div>

            <div class="tab-content" id="privacytab" style="display: none;">
                <div class="submit-section">
                    <form method="post" action="<?php echo site_url();?>/admin/updateprivacy">
                        <input type="hidden" name="id" value="<?php if (!empty($privacyinfo->privacy_policy_id)) echo $privacyinfo->privacy_policy_id; ?>">
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <label for="description"> Privacy Policy: </label>    
                                <?php if (isset($privacyinfo->description)) { ?> 
                                    <textarea type="text" name="description" required>
                                        <?php if (!empty($privacyinfo->description)) echo $privacyinfo->description; ?>
                                    </textarea>
                                 <?php } else { ?>
                                    <textarea type="text" name="description" required> </textarea>
                                <?php } ?>  
                            </div>
                            <div class="col-md-12 text-center">
                                <input type="submit" class="button border fw margin-top-10" name="button" value="Create" />
                            </div>
                        </div>   
                    </form>
                </div>
            </div>

            <div class="tab-content" id="pricing" style="display: none;">
                <div class="submit-section">
                    <form method="post" action="<?php echo site_url();?>/admin/updatepricing">
                        <input type="hidden" name="id" value="<?php if (!empty($pricinginfo->pricing_policy_id)) echo $pricinginfo->pricing_policy_id; ?>">
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <label for="description"> Pricing Policy: </label>
                                <?php if (isset($pricinginfo->description)) { ?> 
                                    <textarea type="text" name="description" required>
                                        <?php if (!empty($pricinginfo->description)) echo $pricinginfo->description; ?>
                                    </textarea>
                                <?php } else { ?>
                                    <textarea type="text" name="description" required> </textarea>
                                <?php } ?>  
                            </div>
                            <div class="col-md-12 text-center">
                                <input type="submit" class="button border fw margin-top-10" name="button" value="Create" />
                            </div>
                        </div>   
                    </form>
                </div>
            </div>

            <div class="tab-content" id="term" style="display: none;">
                <div class="submit-section">
                    <form method="post" action="<?php echo site_url();?>/admin/updatetermcondition">
                        <input type="hidden" name="id" value="<?php if (!empty($termconditioninfo->term_condition_id)) echo $termconditioninfo->term_condition_id; ?>">
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <label for="description"> Terms & Condition: </label>    
                                <?php if (isset($termconditioninfo->description)) { ?> 
                                    <textarea type="text" name="description" required> 
                                        <?php if (!empty($termconditioninfo->description)) echo $termconditioninfo->description; ?>
                                    </textarea>
                                <?php } else { ?>
                                    <textarea type="text" name="description" required> </textarea>
                                <?php } ?>  
                            </div>
                            <div class="col-md-12 text-center">
                                <input type="submit" class="button border fw margin-top-10" name="button" value="Create" />
                            </div>
                        </div>   
                    </form>
                </div>
            </div>

            <div class="tab-content" id="how" style="display: none;">
                <div class="submit-section">
                    <form method="post" action="<?php echo site_url();?>/admin/updatehowitwork">
                        <input type="hidden" name="id" value="<?php if (!empty($howitworkinfo->how_its_work_id)) echo $howitworkinfo->how_its_work_id; ?>">
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <label for="description"> How Its Work: </label>   
                                <?php if (isset($howitworkinfo->description)) { ?> 
                                    <textarea type="text" name="description" required> 
                                        <?php if (!empty($howitworkinfo->description)) echo $howitworkinfo->description; ?>
                                    </textarea>
                                <?php } else { ?>
                                    <textarea type="text" name="description" required> </textarea>
                                <?php } ?>  
                            </div>
                            <div class="col-md-12 text-center">
                                <input type="submit" class="button border fw margin-top-10" name="button" value="Create" />
                            </div>
                        </div>   
                    </form>
                </div>
            </div>





















         </div>
       </div>
     </div>   
   </div>
   <div class="clearfix"></div>          
 </div>
</div>      
</div>
</div>
</div>









<script type="text/javascript">
    $(document).ready(function(){      
        $(document).on('click','.editable-action', function() {
            data = {};
            data['val'] = $(this).attr('data');
            data['id'] = $(this).parent('div').parent('li').attr('data-row-id');
            data['index'] = $(this).attr('col-index');
            
            $.ajax({   

                type: "POST",  
                url: "<?php echo base_url(); ?>/index.php/admin/updateInline/eventstatus",  
                cache:false,  
                data: data,
                dataType: "json",       
                success: function(response)  
                {   
                    if(data['index'] == 1)
                        location.reload();
                    else
                        $("#eventAction"+data['id']).load(location.href + " #eventAction"+data['id']);
                }   
            });
        });
  });
</script>








 <!--  <!-- Sign In Popup 
<div id="position-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Log In</h3>
    </div>
    <div class="sign-in-form style-1">
        <!-- Login                              
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
    </div>
</div> -->
