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
            		<li class="<?php if ($tab == "profile") echo "active"; ?>"><a href="#profile" data-toggle="tab"> My Profile </a></li>
                    <li class="<?php if ($tab == "position") echo "active"; ?>"><a href="#position" data-toggle="tab"> Position </a></li>
            		<li class="<?php if ($tab == "about") echo "active"; ?>"><a href="#about" data-toggle="tab"> About Us </a></li>
                    <li class="<?php if ($tab == "contact") echo "active"; ?>"><a href="#contact" data-toggle="tab"> Contact Us </a></li>
                    <li class="<?php if ($tab == "privacytab") echo "active"; ?>"><a href="#privacytab" data-toggle="tab"> Privacy Policy </a></li>
                    <li class="<?php if ($tab == "pricing") echo "active"; ?>"><a href="#pricing" data-toggle="tab"> Pricing Policy </a></li>
                    <li class="<?php if ($tab == "term") echo "active"; ?>"><a href="#term" data-toggle="tab"> Terms & Condition </a></li>
                    <li class="<?php if ($tab == "how") echo "active"; ?>"><a href="#how" data-toggle="tab"> How Its Work </a></li>
                    <li class="<?php if ($tab == "faqs") echo "active"; ?>"><a href="#faqs" data-toggle="tab"> Faq's </a></li>
                    <li class="<?php if ($tab == "social") echo "active"; ?>"><a href="#social" data-toggle="tab"> Social Media </a></li>
            	</ul>
		            <!-- Tabs Content -->
	            <div class="tabs-container margin-bottom-30 tab-content">

                    <div class="tab-pane fade <?php if ($tab == "profile") echo "active in"; ?>" id="profile">
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
                                        <input type="submit" class="button border fw margin-top-10" name="button" value="Update" />
                                    </div>
                                </div>   
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade <?php if ($tab == "position") echo "active in"; ?>" id="position" style="padding: 0px 28px;">
                    <div class="col-md-12">
                        <div class="col-md-6 add-listing-headline">
                            <h3><i class="sl sl-icon-plus"></i> Positions
                             <a href="<?php echo site_url('admin/addposition');?>" class="button gray" style="float: right;"><i class="sl sl-icon-plus"></i> Add Position </a>
                             </h3>
                        </div>
                           
                    </div>             
                        <table class="basic-table">
                            <tbody>
                                <tr>
                                    <th>Position Title</th>
                                    <th style="text-align: center;"> Action </th>
                                </tr>
                                <?php foreach ($positioninfolist as $positioninfo) { ?>
                                    <tr data-row-id="<?php echo $positioninfo->position_id;?>" id="positionAction<?php echo $positioninfo->position_id;?>">
                                        <td>
                                            <input type="text" class="editable-col" col-index='1' value="<?php if (!empty($positioninfo->position_title)) echo $positioninfo->position_title; ?>" style="border: none;background: none;box-shadow: none;">
                                        </td>
                                        <td style="float: right;">
                                            <a href="javascript:void(0)" class="button gray editable-action-position" col-index='2' data="0"><i class="sl sl-icon-close"></i> Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>      
                            </tbody>
                        </table>
                    </div>

        			<div class="tab-pane fade <?php if ($tab == "about") echo "active in"; ?>" id="about">
                        <div class="submit-section">
                            <form method="post" action="<?php echo site_url();?>/admin/updateaboutus">
                                <input type="hidden" name="id" value="<?php if (!empty($aboutusinfo->about_id)) echo $aboutusinfo->about_id; ?>">
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <label for="description"> About Us Descripition </label> 
                                        <?php if (isset($aboutusinfo->description)) { ?>     
                                            <textarea type="text" id="WYSIHTML1" class="form-control" name="description"><?php if (!empty($aboutusinfo->description)) echo $aboutusinfo->description; ?></textarea>
                                        <?php } else { ?>
                                            <textarea type="text" id="WYSIHTML1" class="form-control" name="description" placeholder="Description" required="required"></textarea>
                                        <?php } ?>    
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <input type="submit" class="button border fw margin-top-10" name="button" value="Update" />
                                    </div>
                                </div>   
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade <?php if ($tab == "contact") echo "active in"; ?>" id="contact">
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
                                            <textarea type="text" rows="3" id="WYSIHTML" name="address"><?php if (!empty($contactusinfo->address)) echo $contactusinfo->address; ?></textarea>
                                        <?php } else { ?>
                                            <textarea type="text" rows="3" id="WYSIHTML" name="address" required></textarea>
                                        <?php } ?>  
                                        </div>
                                    <div class="col-md-12 text-center">
                                        <input type="submit" class="button border fw margin-top-10" name="button" value="Update" />
                                    </div>
                                </div>   
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade <?php if ($tab == "privacytab") echo "active in"; ?>" id="privacytab">
                        <div class="submit-section">
                            <form method="post" action="<?php echo site_url();?>/admin/updateprivacy">
                                <input type="hidden" name="id" value="<?php if (!empty($privacyinfo->privacy_policy_id)) echo $privacyinfo->privacy_policy_id; ?>">
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <label for="description"> Privacy Policy: </label>    
                                        <?php if (isset($privacyinfo->description)) { ?> 
                                            <textarea type="text" id="WYSIHTML2" name="description"><?php if (!empty($privacyinfo->description)) echo $privacyinfo->description; ?></textarea>
                                         <?php } else { ?>
                                            <textarea type="text" id="WYSIHTML2" name="description" required> </textarea>
                                        <?php } ?>  
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <input type="submit" class="button border fw margin-top-10" name="button" value="Update" />
                                    </div>
                                </div>   
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade <?php if ($tab == "pricing") echo "active in"; ?>" id="pricing">
                        <div class="submit-section">
                            <form method="post" action="<?php echo site_url();?>/admin/updatepricing">
                                <input type="hidden" name="id" value="<?php if (!empty($pricinginfo->pricing_policy_id)) echo $pricinginfo->pricing_policy_id; ?>">
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <label for="description"> Pricing Policy: </label>
                                        <?php if (isset($pricinginfo->description)) { ?> 
                                            <textarea type="text" id="WYSIHTML3" name="description"><?php if (!empty($pricinginfo->description)) echo $pricinginfo->description; ?></textarea>
                                        <?php } else { ?>
                                            <textarea type="text" id="WYSIHTML3" name="description" required> </textarea>
                                        <?php } ?>  
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <input type="submit" class="button border fw margin-top-10" name="button" value="Update" />
                                    </div>
                                </div>   
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade <?php if ($tab == "term") echo "active in"; ?>" id="term">
                        <div class="submit-section">
                            <form method="post" action="<?php echo site_url();?>/admin/updatetermcondition">
                                <input type="hidden" name="id" value="<?php if (!empty($termconditioninfo->term_condition_id)) echo $termconditioninfo->term_condition_id; ?>">
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <label for="description"> Terms & Condition: </label>    
                                        <?php if (isset($termconditioninfo->description)) { ?> 
                                            <textarea type="text" id="WYSIHTML4" name="description"><?php if (!empty($termconditioninfo->description)) echo $termconditioninfo->description; ?></textarea>
                                        <?php } else { ?>
                                            <textarea type="text" id="WYSIHTML4" name="description" required> </textarea>
                                        <?php } ?>  
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <input type="submit" class="button border fw margin-top-10" name="button" value="Update" />
                                    </div>
                                </div>   
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade <?php if ($tab == "how") echo "active in"; ?>" id="how">
                        <div class="submit-section">
                            <form method="post" action="<?php echo site_url();?>/admin/updatehowitwork" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php if (!empty($howitworkinfo->how_its_work_id)) echo $howitworkinfo->how_its_work_id; ?>">
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <label for="description"> How Its Work: </label>   
                                        <?php if (isset($howitworkinfo->description)) { ?> 
                                            <textarea type="text" id="WYSIHTML5" name="description"><?php if (!empty($howitworkinfo->description)) echo $howitworkinfo->description; ?></textarea>
                                        <?php } else { ?>
                                            <textarea type="text" id="WYSIHTML5" name="description" required> </textarea>
                                        <?php } ?>  
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="widget margin-bottom-40">
                                            <div class="edit-profile-photo text-center">
                                                <img src='<?php echo base_url(); ?>images/howitwork/<?php echo $howitworkinfo->image1; ?>' alt="">
                                                <div class="change-photo-btn">
                                                    <div class="photoUpload">
                                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                        <input type="file" name="image1" class="upload">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     <!-- <div class="col-lg-4 col-md-4">
                                        <div class="widget margin-bottom-40">
                                            <div class="edit-profile-photo text-center">
                                                <img src='<?php echo base_url(); ?>images/howitwork/<?php echo $howitworkinfo->image2; ?>' alt="">
                                                <div class="change-photo-btn">
                                                    <div class="photoUpload">
                                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                        <input type="file" name="image2" class="upload">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-lg-4 col-md-4">
                                        <div class="widget margin-bottom-40">
                                            <div class="edit-profile-photo text-center">
                                                <img src='<?php echo base_url(); ?>images/howitwork/<?php echo $howitworkinfo->image3; ?>' alt="">
                                                <div class="change-photo-btn">
                                                    <div class="photoUpload">
                                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                        <input type="file" name="image3" class="upload">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
 -->
                                    <!-- <div class="col-md-12">
                                        <label for="description"> How Its Work: </label>   
                                        <?php if (isset($howitworkinfo->description1)) { ?> 
                                            <textarea type="text" id="WYSIHTML6" name="description1"><?php if (!empty($howitworkinfo->description1)) echo $howitworkinfo->description1; ?></textarea>
                                        <?php } else { ?>
                                            <textarea type="text" id="WYSIHTML6" name="description1" required></textarea>
                                        <?php } ?>  
                                    </div> -->

                                    <div class="col-md-12 text-center">
                                        <input type="submit" class="button border fw margin-top-10" name="button" value="Update" />
                                    </div>
                                </div>   
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade <?php if ($tab == "faqs") echo "active in"; ?>" id="faqs" style="padding: 0px 28px;">
                        <div class="col-md-12">
                            <div class="col-md-6 add-listing-headline">
                                <h3><i class="sl sl-icon-plus"></i> FAQs
                                 <a href="<?php echo site_url('admin/addfaqs');?>" class="button gray" style="float: right;"><i class="sl sl-icon-plus"></i> Add Faqs </a>
                                 </h3>
                            </div>
                        </div>             
                        <table class="basic-table">
                            <tbody>
                                <tr>
                                    <th> Question </th>
                                    <th> Answer </th>
                                    <th style="text-align: center;"> Acition </th>
                                </tr>
                                     <?php foreach ($faqsinfolist as $faqsinfo) { ?>
                                <tr  data-row-id="<?php echo $faqsinfo->faq_id;?>"  id="faqsAction<?php echo $faqsinfo->faq_id;?>">
                                    <td style="width: 20%;">
                                        <?php if (!empty($faqsinfo->question)) echo $faqsinfo->question; ?>
                                    </td>
                                    <td>
                                        <?php if (!empty($faqsinfo->answer)) echo $faqsinfo->answer; ?>
                                    </td>
                                    <td style="width: 16%;">
                                    <a href="<?php echo base_url(); ?>index.php/admin/updatefaqs?faq_id=<?php echo $faqsinfo->faq_id ?>" class="button gray editable-col"><i class="sl sl-icon-note"></i> Edit</a>
                                        <a href="javascript:void(0)" class="button gray editable-action" col-index='1' data="0"><i class="sl sl-icon-close"></i> Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>  
                            </tbody>
                        </table>
                    </div>


                     <div class="tab-pane fade <?php if ($tab == "social") echo "active in"; ?>" id="social" style="padding: 0px 28px;">
                        <div class="col-md-12">
                            <div class="col-md-6 add-listing-headline">
                                <h3><i class="sl sl-icon-plus"></i> Social Media
                                <!--  <a href="<?php echo site_url('admin/addsociallink');?>" class="button gray" style="float: right;"><i class="sl sl-icon-plus"></i> Add Social Link </a> -->
                                 </h3>
                            </div>
                        </div>             
                        <table class="basic-table">
                            <tbody>
                                <tr>
                                    <th> Title </th>
                                 <!--    <th> Icon </th> -->
                                    <th> Link </th>
                                    <th style="text-align: center;"> Acition </th>
                                </tr>
                                <?php foreach ($sociallinkdatalist as $sociallinkdata) { ?>
                                    <tr  data-row-id="<?php echo $sociallinkdata->social_link_id;?>"  id="sociallinkAction<?php echo $sociallinkdata->social_link_id;?>">
                                        <td style="width: 20%;">
                                            <?php if (!empty($sociallinkdata->title)) echo $sociallinkdata->title; ?>
                                        </td>
                                      <!--   <td>
                                            <input type="text" class="editable-col" col-index='2' value="<?php if (!empty($sociallinkdata->icon)) echo $sociallinkdata->icon; ?>" style="width: 90%;">
                                        </td> -->
                                        <td>
                                            <input type="url" class="editable-col" col-index='1' value="<?php if (!empty($sociallinkdata->link)) echo $sociallinkdata->link; ?>" style="width: 90%;">
                                        </td>
                                        <td style="width: 20%;">
                                            <?php if($sociallinkdata->status == 1) { ?>                          
                                                <a href="javascript:void(0)" class="button gray editable-action-social" col-index='1' data="0"><i class="sl sl-icon-note"></i> Active </a>
                                            <?php } else { ?>                          
                                                <a href="javascript:void(0)" class="button gray editable-action-social" col-index='1' data="1"><i class="sl sl-icon-note"></i> Deactive </a>
                                            <?php } ?>               
                                                <a href="javascript:void(0)" class="button gray editable-action-social" col-index='2' data="0"><i class="sl sl-icon-close"></i> Delete </a> 
                                        </td>
                                    </tr>
                                <?php } ?>  
                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div>   
    </div>
    <div class="clearfix"></div>          
</div>


 <script type="text/javascript">
    $(document).ready(function(){      
        $(document).on('click','.editable-action-social', function() {
            data = {};
            data['val'] = $(this).attr('data');
            data['id'] = $(this).parent('td').parent('tr').attr('data-row-id');
            data['index'] = $(this).attr('col-index');
            
            $.ajax({   

                type: "POST",  
                url: "<?php echo base_url(); ?>/index.php/admin/updateInline/socialstatus",  
                cache:false,  
                data: data,
                dataType: "json",       
                success: function(response)  
                {   
                  if(data['index'] == 1)
                        location.reload();
                    else
                  $("#sociallinkAction"+data['id']).load(location.href + " #sociallinkAction"+data['id']);
                }   
            });
        });
  });
</script>


<script type="text/javascript">
        $(document).ready(function(){      
          $(document).on('focusout','.editable-col', function() {
            data = {};
            data['val'] = $(this).val();
            data['index'] = $(this).attr('col-index');
            data['id'] = $(this).parent('td').parent('tr').attr('data-row-id');

            $.ajax({   

                type: "POST",  
                url: "<?php echo base_url(); ?>/index.php/admin/updateInline/social",  
                cache:false,  
                data: data,
                dataType: "json",       
                success: function(response)  
                {   
                }   
            });
        });
      });
</script>


<script type="text/javascript">
        $(document).on('focusout','.editable-col', function() {
            data = {};
            data['val'] = $(this).val();
            data['id'] = $(this).parent('td').parent('tr').attr('data-row-id');
            data['index'] = $(this).attr('col-index');
            
            $.ajax({   

                type: "POST",  
                url: "<?php echo base_url(); ?>/index.php/admin/updateInline/positionstatus",  
                cache:false,  
                data: data,
                dataType: "json",       
                success: function(response)  
                {   
                }   
            });
        });
 
</script>

<script type="text/javascript">
        $(document).on('click','.editable-action-position', function() {
            data = {};
            data['val'] = $(this).val();
            data['id'] = $(this).parent('td').parent('tr').attr('data-row-id');
            data['index'] = $(this).attr('col-index');
            
            $.ajax({   

                type: "POST",  
                url: "<?php echo base_url(); ?>/index.php/admin/updateInline/positionstatus",  
                cache:false,  
                data: data,
                dataType: "json",       
                success: function(response)  
                {   
                        $("#positionAction"+data['id']).load(location.href + " #positionAction"+data['id']);
                }   
            });
        });
 
</script>

<script type="text/javascript">
    $(document).ready(function(){      
        $(document).on('click','.editable-action', function() {
            data = {};
            data['val'] = $(this).attr('data');
            data['id'] = $(this).parent('td').parent('tr').attr('data-row-id');
            data['index'] = $(this).attr('col-index');
            
            $.ajax({   

                type: "POST",  
                url: "<?php echo base_url(); ?>/index.php/admin/updateInline/faqsdelete",  
                cache:false,  
                data: data,
                dataType: "json",       
                success: function(response)  
                {   
                        $("#faqsAction"+data['id']).load(location.href + " #faqsAction"+data['id']);
                }   
            });
        }); 
  });
</script>   


