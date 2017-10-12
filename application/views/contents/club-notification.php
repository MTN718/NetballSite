 <div class="dashboard-content">
 	<!-- Titlebar -->
 	<div id="titlebar">
 		<div class="row">
 			<div class="col-md-12">
 				<h2>Inspire Sports Group ::  Club Notification </h2>
 				<!-- Breadcrumbs -->
 				<!-- <nav id="breadcrumbs">
 					<ul>

 					</ul>
 				</nav> -->
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
 						<h3><i class="sl sl-icon-plus"></i> Notification </h3>
 					</div>
 					<!-- Row -->
 					<div class="submit-section">
                        <div class="dashboard-list-box with-icons margin-top-20">
                            <ul>
                                <?php foreach ($clubnotificationdatalist as $clubnotificationdata) { ?>
                                    <li>
                                        <i class="list-box-icon sl sl-icon-layers"></i> <?php if (!empty($clubnotificationdata->message)) echo $clubnotificationdata->message; ?>
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
        <!-- Copyrights -->
        <div class="col-md-12">
            <div class="copyrights">© 2017 Inspire Sports Group. All Rights Reserved.</div>
        </div>
    </div>
</div>
<!-- Content / End -->