
<!-- Content================================================== -->
<div class="dashboard-content">
    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2>Clubs Overview</h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="<?php echo site_url('admin/index');?>">Home</a></li>
                        <li><a href="#">Clubs Overview</a></li>
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
                        <h3><i class="sl sl-icon-plus"></i> Login Details
                             <a href="<?php echo site_url('admin/clubManagement');?>" class="button gray" style="float: right;"><i class="sl sl-icon-action-redo" style="padding-right: 0px;"></i></a>
                        </h3>
                    </div>
                    <table class="basic-table">
                        <tbody>
                            <tr>
                                <th>User Name</th>
                                <th>Email Address</th>
                                <th>Club Name</th>
                                <th>Association Afiliated</th>
                            </tr>
                                <tr>
                                    <td> <?php if (!empty($cluboverviewclubinfo->name)) echo $cluboverviewclubinfo->name; ?> </td>
                                    <td> <?php if (!empty($cluboverviewclubinfo->email)) echo $cluboverviewclubinfo->email; ?> </td>
                                    <td> <?php if (!empty($cluboverviewclubinfo->club_name)) echo $cluboverviewclubinfo->club_name; ?> </td>
                                    <td> <?php if (!empty($cluboverviewclubinfo->association_afiliated)) echo $cluboverviewclubinfo->association_afiliated; ?> </td>
                                </tr>
                        </tbody>
                    </table>
                    <div class="add-listing-headline">
                        <h3><i class="sl sl-icon-plus"></i> Personal Details</h3>
                    </div>

                    <table class="basic-table">
                        <tbody>
                            <tr>
                                <th> User Name </th>
                                <th> Stablishes Date </th>
                                <th> Address </th>
                                <th> City </th>
                                <th> State </th>
                                <th> Postcode </th>
                                <th> Country </th>
                                <th> Phone Number </th>
                                <th> Mobile Number </th>
                            </tr>
                            <tr>
                                <td> <?php if (!empty($cluboverviewclubinfo->name)) echo $cluboverviewclubinfo->name; ?> </td>
                                <td> <?php if (!empty($cluboverviewclubinfo->stablishes_date)) echo $cluboverviewclubinfo->stablishes_date; ?> </td>
                                <td> <?php if (!empty($cluboverviewclubinfo->address)) echo $cluboverviewclubinfo->address; ?> </td>
                                <td> <?php if (!empty($cluboverviewclubinfo->city)) echo $cluboverviewclubinfo->city; ?> </td>
                                <td> <?php if (!empty($cluboverviewclubinfo->state)) echo $cluboverviewclubinfo->state; ?> </td>
                                <td> <?php if (!empty($cluboverviewclubinfo->postcode)) echo $cluboverviewclubinfo->postcode; ?> </td>
                                <td> <?php if (!empty($cluboverviewclubinfo->country)) echo $cluboverviewclubinfo->country; ?> </td>
                                <td> <?php if (!empty($cluboverviewclubinfo->phone)) echo $cluboverviewclubinfo->phone; ?> </td>
                                <td> <?php if (!empty($cluboverviewclubinfo->mobile)) echo $cluboverviewclubinfo->mobile; ?> </td>
                            </tr>
                        </tbody>
                    </table>
               
                <!-- Section / End -->



               <div class="add-listing-headline">
                        <h3><i class="sl sl-icon-plus"></i> Event Listings</h3>
                    </div>
                  <div class="dashboard-list-box margin-top-0">
                        
                        <ul>
                            <?php if(isset($cluboverviewdata) and !empty($cluboverviewdata))  foreach ($cluboverviewdata as $cluboverview) { ?>
                                <li data-row-id="<?php echo $cluboverview->no;?>"  id="eventAction<?php echo $cluboverview->no;?>">
                                    <div class="list-box-listing">
                                        <div class="list-box-listing-img"><a href="#">
                                            <img src="../../../images/cluboverview/<?php if(!empty($cluboverview->photo)) echo $cluboverview->photo; ?>" alt=""></a></div>
                                            <div class="list-box-listing-content">
                                                <div class="inner">
                                                    <h3><?php if(!empty($cluboverview->title)) echo $cluboverview->title; ?></h3>
                                                  <!--   <h5> Club Name :
                                                        <?php $club_data = $this->adminmodel->getclubdata($cluboverview->club_no); ?>
                                                        <span><?php if(!empty($club_data->club_name)) echo $club_data->club_name; ?></span>
                                                    </h5> -->
                                                    <h5>Venue :<span><?php if(!empty($cluboverview->venue)) echo $cluboverview->venue; ?></span></h5>  
                                                    <h5>Date :<span><?php if(!empty($cluboverview->date)) echo $cluboverview->date; ?></span></h5>
                                                    <h5>Time :<span><?php if(!empty($cluboverview->starttime)) echo $cluboverview->starttime; ?> to <?php if(!empty($cluboverview->endtime)) echo $cluboverview->endtime; ?></span></h5>  
                                                    <div class="star-rating" data-rating="2.0">
                                                        <div class="rating-counter">(17 reviews)</div>
                                                        <span class="star"></span><span class="star"></span><span class="star empty"></span><span class="star empty"></span><span class="star empty"></span>
                                                    </div>
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
        <div class="pagination-container text-center margin-top-30 margin-bottom-0">
            <nav class="pagination">
                <ul>
                    <li><a href="#" class="current-page">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                </ul>
            </nav>
        </div>


