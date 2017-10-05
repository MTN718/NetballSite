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
                            <!-- <div class="dashboard-list-box margin-top-0">		
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
                            </div> -->
                            <!-- Content -->



                            <div class="dashboard-list-box margin-top-0">
                              <h4>Event Listings</h4>
                              <ul>

                                <?php if(isset($eventinfos) and !empty($eventinfos))  foreach ($eventinfos as $event) { ?>
                                <li data-row-id="<?php echo $event->no;?>"  id="eventAction<?php echo $event->no;?>">
                                  <div class="list-box-listing">
                                    <div class="list-box-listing-img"><a>
                                      <img src="<?php echo base_url(); ?>images/event/<?php if(!empty($event->photo)) echo $event->photo; ?>" alt=""></a></div>
                                      <div class="list-box-listing-content">
                                          <div class="inner">
                                            <h3><?php if(!empty($event->title)) echo $event->title; ?></h3>
                                            <div><b>Date: </b> <?php if(!empty($event->date)) echo $event->date; ?></div>
                                            <div><b>Timing: </b> <?php if(!empty($event->starttime)) echo $event->starttime; ?> - <?php if(!empty($event->endtime)) echo $event->endtime; ?></div>
                                            <div><b>Fee: </b> <?php if(!empty($event->fee)) echo $event->fee; ?></div>
                                            <div><b>Special Requirements: </b> <?php if(!empty($event->special)) echo $event->special; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
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

                <h3 id="errorcheckoutdata" style="display: none; color: red;">You are not a player. please login as a player</h3>
                <!-- Row -->
                <form method="post" class="form-horizontal" action="<?php echo site_url();?>/netball/addeventproposal">

                    <?php if($this->session->userdata('login_data')) { 
                        $userInfo = $this->session->userdata('login_data');
                        
                        $player_id = $userInfo->no;
                    ?>
                    <input type="hidden" name="playerid" value="<?php if (!empty($player_id)) echo $player_id; ?>">
                    <input type="hidden" name="club_id" value="<?php if (!empty($clubdatainfo->no)) echo $clubdatainfo->no; ?>">
                    <?php } ?>

                    <div class="row with-forms"> 
                        <!-- Type -->
                        <div class="col-md-12">
                            <select data-placeholder="All Categories" name="eventid" id="event" class="chosen-select" style="display: none;" required="required">
                                <option value="">Select Event</option>
                                <?php if(isset($eventinfos) and !empty($eventinfos))  foreach ($eventinfos as $event) { 
                                    $event_date = strtotime($event->date);
                                    $event_date = date('Y-m-d',$event_date);
                                    $current_date = date('Y-m-d');
                                    print_r($event_date);
                                    if($event_date > $current_date) {
                                        ?>
                                        <option value="<?php echo $event->no; ?>"><?php if(!empty($event->title)) echo $event->title; ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- Row / End --> 

                        <!-- <div class="row with-forms"> 
                            <div class="col-md-12">
                                <input type="text" placeholder="Title">
                            </div>
                        </div> -->

                        <!-- Row -->
                        <div class="row with-forms"> 
                            <!-- Type -->
                            <div class="col-md-12">
                                <input type="text" id="event_fee" placeholder="Proposal" disabled="disabled" value="" required="required">
                            </div>
                        </div>
                        <!-- Row / End -->  <br>
                         <div id="paypal-button-container"></div>
                        <div class="col-md-12">
                            <?php if(!$this->session->userdata('login_data')) { ?>
                                <a href="#sign-in-dialog" class="button border fw margin-top-10 popup-with-zoom-anim" style="width: 100%; text-align: center;">Login</a>
                            <?php } else { ?>
                                <?php if($userInfo->user_type == "player") { ?>                                
                                    <input type="submit" class="button border fw margin-top-10" name="button" value="Checkout" style="width: 100%;" />
                                <?php } else { ?>                                    
                                    <input type="button" id="errorcheckout" class="button border fw margin-top-10" name="button" value="Checkout" style="width: 100%;" />
                                <?php } ?>
                            <?php } ?>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>  
</div>
</div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('#event').on('change',function(){
            var event_id = $(this).val();
            if(event_id){
                $.ajax({
                    type:'POST',
                    url:'<?php echo base_url();?>index.php/netball/eventfee',
                    data:'event_id='+event_id,
                    success:function(fee){
                        fee = JSON.parse("["+fee+"]");
                        $('#event_fee').val('$'+fee);
                    }
                }); 
            }else{
            }
        });  
    });
</script>
