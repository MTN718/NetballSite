 <div class="dashboard-content">
    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2>Inspire Sports Group :: Update Faqs </h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#"> Setting</a></li>
                        <li><a href="#">Update Faqs</a></li>

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
                        <h3><i class="sl sl-icon-plus"></i> Update Faqs 
                          <a href="<?php echo site_url('admin/settings/faqs');?>" class="button gray" style="float: right;"><i class="sl sl-icon-action-redo" style="padding-right: 0px;"></i></a>
                        </h3>
                    </div>


                    <!-- Row -->
                    <div class="submit-section">
                        <form method="post" action="<?php echo site_url();?>/admin/updatefaqsdata">
                          <input type="hidden" name="id" value="<?php if (!empty($faqsupadatedata->faq_id)) echo $faqsupadatedata->faq_id; ?>">
                            <div class="row with-forms">
                                <div class="col-md-12">
                                  <h5> Question </h5>
                                  <?php if (isset($faqsupadatedata->question)) { ?>
                                    <input type="text" name="question" value="<?php if (!empty($faqsupadatedata->question)) echo $faqsupadatedata->question; ?>" placeholder="Question">
                                  <?php } else { ?>  
                                    <input type="text" name="question" placeholder="Question" required>
                                  <?php } ?>   
                              </div>
                               <div class="col-md-12">
                                  <h5> Answer </h5>
                                  <?php if (isset($faqsupadatedata->answer)) { ?>
                                    <textarea type="text" id="WYSIHTML1" class="form-control" name="answer" placeholder="Answer"><?php if (!empty($faqsupadatedata->answer)) echo $faqsupadatedata->answer; ?></textarea>
                                  <?php } else { ?>
                                    <textarea type="text" id="WYSIHTML1" class="form-control" name="answer" placeholder="Answer" required="required"></textarea>
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


