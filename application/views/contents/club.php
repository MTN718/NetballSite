<div class="container-fluid padding-top-35">     
    <!-- Blog Posts -->
    <div class="blog-page">
        <div class="row"> 
            <!-- Widgets -->
            <div class="col-lg-3 col-md-4">
                <div class="sidebar"> 
                    <!-- Widget -->
                    <div class="widget margin-bottom-40">
                        <h3 class="margin-top-0 margin-bottom-30">Filters</h3>
                        <!-- Row -->
                        <div class="row with-forms"> 
                            <div class="col-md-12">
                                <select data-placeholder="All Categories" class="chosen-select" style="display: none;">
                                    <option>Filter1</option>
                                    <option>option1</option>
                                    <option>option2</option>
                                    <option>option3</option>
                                </select> 
                            </div>
                        </div>
                        <!-- Row -->
                        <div class="row with-forms"> 
                            <div class="col-md-12">
                                <select data-placeholder="All Categories" class="chosen-select" style="display: none;">
                                    <option>Filter1</option>
                                    <option>option1</option>
                                    <option>option2</option>
                                    <option>option3</option>
                                </select>
                            </div>
                        </div> 
                        <!-- Row -->
                        <div class="row with-forms"> 
                            <div class="col-md-12">
                                <select data-placeholder="All Categories" class="chosen-select" style="display: none;">
                                    <option>Filter1</option>
                                    <option>option1</option>
                                    <option>option2</option>
                                    <option>option3</option>
                                </select>
                            </div>
                        </div><!-- Row / End --> <br>
                        <button class="button fullwidth margin-top-25">Search</button>
                    </div>
                    <!-- Widget / End --> 
                </div>
            </div>

            <div class="col-lg-9 col-md-8 padding-left-30">
                <div class="row">
                    <?php foreach ($clubdatalists as $clubdatalist) { ?>
                        <div class="col-md-4">
                            <div class="blog-post single-post"> 
                                <a href="<?php echo site_url('netball/clubdetails?no=').$clubdatalist->no; ?>"> 
                                    <!-- Img --> 
                                    <img class="post-img" src='<?php echo base_url(); ?>images/<?php echo $clubdatalist->photo; ?>' style="height:201px;">
                                </a>    
                                <!-- Content -->
                                <div class="post-content">
                                    <h3>Club Name : <?php if (!empty($clubdatalist->club_name)) echo $clubdatalist->club_name; ?>  </h3>
                                    <h5>Association Afiliated : <?php if (!empty($clubdatalist->association_afiliated)) echo $clubdatalist->association_afiliated; ?>  </h5>
                                    <h5>Stablishes Date : <?php if (!empty($clubdatalist->stablishes_date)) echo $clubdatalist->stablishes_date; ?>  </h5>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>  
                </div>
                <!-- Sidebar / End --> 
            </div>
        </div>
    </div>
</div>
<!-- Wrapper / End --> 
