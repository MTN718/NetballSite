<div class="dashboard-content">
    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2> Notification </h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="<?php echo site_url('admin/index');?>">Home</a></li>
                        <li><a href="#"> Notification </a></li>
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
                      <h3><i class="sl sl-icon-plus"></i> Notification Details</h3>
                    </div>
                    <!-- Row -->
                    <div class="submit-section">
                        <div class="dashboard-list-box with-icons margin-top-20">
                            <ul>
                                <?php foreach ($notificationdatalist as $notificationdata) { ?>
                                    <li>
                                        <i class="list-box-icon sl sl-icon-layers"></i> <?php if (!empty($notificationdata->message)) echo $notificationdata->message; ?>
                                        <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                                    </li>
                                <?php } ?>  
                            </ul>
                        </div>
                    </div>
                    <!-- Row / End -->
                </div>
                <!-- Section / End -->
            </div>
        </div>
        <div class="clearfix"></div>
       
