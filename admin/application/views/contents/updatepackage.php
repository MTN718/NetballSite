 <div class="dashboard-content">
    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2>Inspire Sports Group :: Update Package </h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Update Package</a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <div id="add-listing">

                <!-- Section -->
                <div class="add-listing-section">

                    <!-- Headline -->
                    <div class="add-listing-headline">
                        <h3><i class="sl sl-icon-plus"></i> Update Package 
                          <a href="<?php echo site_url('admin/package');?>" class="button gray" style="float: right;"><i class="sl sl-icon-action-redo" style="padding-right: 0px;"></i></a>
                        </h3>
                    </div>


                    <!-- Row -->
                    <div class="submit-section">
                        <form method="post" action="<?php echo site_url();?>/admin/updatepackagedata">
                           <input type="hidden" name="id" value="<?php if (!empty($packageupadatedata->package_id)) echo $packageupadatedata->package_id; ?>">
                            <div class="row with-forms">
                                <div class="col-md-12">
                                  <h5> Package Name </h5>
                                  <?php if (isset($packageupadatedata->package_name)) { ?>
                                    <input type="text" name="packagename" value="<?php if (!empty($packageupadatedata->package_name)) echo $packageupadatedata->package_name; ?>">
                                  <?php } else { ?>  
                                    <input type="text" name="packagename" required>
                                  <?php } ?> 
                              </div>
                              <div class="col-md-12">
                                  <h5> Number of Player </h5>
                                  <?php if (isset($packageupadatedata->number_of_player)) { ?>
                                    <input type="text" name="numberofplayer" value="<?php if (!empty($packageupadatedata->number_of_player)) echo $packageupadatedata->number_of_player; ?>">
                                  <?php } else { ?>  
                                    <input type="text" name="numberofplayer" required>
                                  <?php } ?> 
                              </div>
                              <div class="col-md-12">
                                  <h5> Per Event Fee </h5>
                                  <?php if (isset($packageupadatedata->per_event_fee)) { ?>
                                    <input type="text" name="pereventfee" value="<?php if (!empty($packageupadatedata->per_event_fee)) echo $packageupadatedata->per_event_fee; ?>">
                                  <?php } else { ?>  
                                    <input type="text" name="pereventfee" required>
                                  <?php } ?> 
                              </div>
                              <div class="col-md-12">
                                  <h5> Player Registration Fee </h5>
                                  <?php if (isset($packageupadatedata->player_regisatration_fee)) { ?>
                                    <input type="text" name="playerregisatrationfee" value="<?php if (!empty($packageupadatedata->player_regisatration_fee)) echo $packageupadatedata->player_regisatration_fee; ?>">
                                  <?php } else { ?>  
                                    <input type="text" name="playerregisatrationfee" required>
                                  <?php } ?> 
                              </div>
                           <div class="col-md-12 text-center">
                               <input type="submit" class="button border fw margin-top-10" name="button" value="Update" />
                           </div>
                       </div>
                   </form>
               </div>
               <!-- Row / End -->
           </div>
           <!-- Section / End -->

       </div>
   </div>

   <!-- Copyrights -->
   <div class="col-md-12">
    <div class="copyrights">© 2017 Inspire Sports Group. All Rights Reserved.</div>
</div>

</div>

</div>
<!-- Content / End -->


