 <div class="dashboard-content">
 	<!-- Titlebar -->
 	<div id="titlebar">
 		<div class="row">
 			<div class="col-md-12">
 				<h2>Inspire Sports Group ::Event User Agreement</h2>
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
 						<h3><i class="sl sl-icon-plus"></i>Event User Agreement</h3>
 					</div>
 					<!-- Row -->
 					<div class="submit-section">
 						<form method="post" action="<?php echo site_url();?>/netball/addeventdataanduseragreement">
                            <input type="hidden" name="id" value="<?php if (!empty($id)) echo $id; ?>">
                            <input type="hidden" name="package" value="<?php if (!empty($package)) echo $package; ?>">
                            <input type="hidden" name="image" value="<?php if (!empty($image)) echo $image; ?>">
                            <input type="hidden" name="title" value="<?php if (!empty($title)) echo $title; ?>">
                            <input type="hidden" name="date" value="<?php if (!empty($date)) echo $date; ?>">
                            <input type="hidden" name="venue" value="<?php if (!empty($venue)) echo $venue; ?>">
                            <input type="hidden" name="starttime" value="<?php if (!empty($starttime)) echo $starttime; ?>">
                            <input type="hidden" name="finishtime" value="<?php if (!empty($finishtime)) echo $finishtime; ?>">
                            <input type="hidden" name="requirements" value="<?php if (!empty($requirements)) echo $requirements; ?>">
                            <input type="hidden" name="fee" value="<?php if (!empty($fee)) echo $fee; ?>">
 							<!-- Row -->

                            <div class="row with-forms">
                                 <div class="col-md-12">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                    nisi ut aliquip ex ea commodo consequat.
                                 </div>
                            </div>
                            <div class="row with-forms">
                                 <div class="col-md-1">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="useragreement" value="1" required> </label>
                                    </div>
                                 </div>
                                 <div class="col-md-10">
                                    <p style="margin-top: 26px;margin-left: -25px;"> * Have read the event terms and conditions and agree to them. </p>
                                 </div>
                            </div>

 							<div class="row with-forms">
                                <div class="col-md-6">
                                    <h5>Full Name</h5>
                                    <input type="text" id="fullname" name="fullname" required>
                                </div>
                                <div class="col-md-6">
                                    <h5> Signature  </h5>
                                    <textarea id="signature" name="signature"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <input type="submit" class="button border fw margin-top-10" name="button" value="Create" />
                                </div>
                            </div>
                            <!-- Row / End -->
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


