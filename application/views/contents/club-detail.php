 <!-- Content ================================================== -->
<div class="container-fluid padding-top-35"> 
    <!-- Blog Posts -->
    <div class="blog-page">
        <div class="row"> 
            <div class="col-lg-9 col-md-8 padding-right-30">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-post single-post"> 
                            <!-- Content -->
                            <div class="post-content">
                                <h3>Club Name</h3>
                                <p><?php if (!empty($clubdatainfo->club_name)) echo $clubdatainfo->club_name; ?></p>
                                <div class="clearfix"></div>
                                <h3>Association Afiliated</h3>
                                <p><?php if (!empty($clubdatainfo->association_afiliated)) echo $clubdatainfo->association_afiliated; ?></p>
                                 <h3>Stablishes Date</h3>
                                <p><?php if (!empty($clubdatainfo->stablishes_date)) echo $clubdatainfo->stablishes_date; ?></p>
                                <div class="clearfix"></div> 
                            </div>
                            <div class="dashboard-list-box margin-top-0">		
					            <ul>
						            <li>
							            <div class="comments listing-reviews">
                                            <h3>Your Reviews</h3>
							                <ul>
								                <li>
									                <div class="avatar"><img src="images/reviews-avatar.jpg" alt=""> </div>
									                <div class="comment-content">
                                                        <div class="arrow-comment"></div>
    										            <div class="comment-by">Your review 
                                                            <div class="comment-by-listing own-comment">on 
                                                                <a href="#">Tom's Restaurant</a>
                                                            </div> 
                                                            <span class="date">May 2017</span>
                                                          
    											        <div class="star-rating" data-rating="4.5">
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star half"></span>
                                                        </div>
        										        <p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.
                                                        </p>
        										        <a href="#" class="rate-review"><i class="sl sl-icon-note"></i> Edit</a>
									                </div>
									            </li>
								            </ul>
							            </div>
						            </li>
					            </ul>
				            </div>
                            <!-- Content -->
                            <div class="post-content">
                                <h3>Events</h3>
                                <?php foreach ($eventinfos as $eventinfo) { ?>
                                    <ul>
                                        <li><h4>Title : <?php if (!empty($eventinfo->title)) echo $eventinfo->title; ?></h4>
                                            <p>Venue : <?php if (!empty($eventinfo->venue)) echo $eventinfo->venue; ?> </p>
                                            <p>Date : <?php if (!empty($eventinfo->date)) echo $eventinfo->date; ?></p>
                                        </li>
                                    </ul>
                                <div class="clearfix"></div>
                                <?php } ?>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- Content / End --> 
            <!-- Widgets -->
            <div class="col-lg-3 col-md-4">
                <div class="sidebar">
                    <!-- Widget -->
                    <div class="widget margin-bottom-40">
                        <!-- Row -->
                         <div class="row with-forms"> 
                            <!-- Type -->
                            <div class="col-md-12">
                                <select data-placeholder="All Categories" class="chosen-select" style="display: none;">
                                    <option>Event</option>
                                    <option>option1</option>
                                    <option>option2</option>
                                    <option>option3</option>
                                </select>
                            </div>
                        </div>
                        <!-- Row / End --> 
                        <!-- Row -->
                        <div class="row with-forms"> 
                            <!-- Type -->
                            <div class="col-md-12">
                                <input type="text" placeholder="Title">
                            </div>
                        </div>
                        <!-- Row / End --> 
                        <!-- Row -->
                        <div class="row with-forms"> 
                            <!-- Type -->
                            <div class="col-md-12">
                                <input type="text" placeholder="Proposal">
                            </div>
                        </div>
                        <!-- Row / End -->  <br>
                        <button class="button fullwidth margin-top-25">Submit Proposal</button>
                    </div>
                    <!-- Widget / End --> 
                </div>
            </div>
        </div>
        <!-- Sidebar / End -->   
    </div>
</div>
 </div>