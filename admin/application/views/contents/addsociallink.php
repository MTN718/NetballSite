 <div class="dashboard-content">
    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2>Inspire Sports Group :: Add Social Link </h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#"> Setting</a></li>
                        <li><a href="#">Add Social Link</a></li>

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
                        <h3><i class="sl sl-icon-plus"></i> Add Social Link 
                           <a href="<?php echo site_url('admin/settings/social');?>" class="button gray" style="float: right;"><i class="sl sl-icon-action-redo" style="padding-right: 0px;"></i></a>
                        </h3>
                    </div>


                    <!-- Row -->
                    <div class="submit-section">
                        <form method="post" action="<?php echo site_url();?>/admin/addsociallinkdata">
                            <div class="row with-forms">
                              <div class="col-md-12">
                                  <h5> Title </h5>
                                  <input type="text" name="title" placeholder="Title" required>
                              </div>
                              <div class="col-md-12">
                                  <h5> Font Awesome Icons </h5>
                                  <input type="text" name="icon" placeholder="Font Awesome Icons" required>
                              </div>
                              <div class="col-md-12">
                                  <h5> Link </h5>
                                  <input type="url" name="link" placeholder="Link" required>
                              </div>
                           <div class="col-md-12 text-center">
                               <input type="submit" class="button border fw margin-top-10" name="button" value="Add" />
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


