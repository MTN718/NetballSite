 <div class="dashboard-content">
 	<!-- Titlebar -->
 	<div id="titlebar">
 		<div class="row">
 			<div class="col-md-12">
 				<h2>Inspire Sports Group :: Add New Event Package Detail </h2>
 				<!-- Breadcrumbs -->
 				<nav id="breadcrumbs">
 					<ul>
 						<li><a href="#">Home</a></li>
 						<li><a href="#">Add New Event Package</a></li>

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
 						<h3><i class="sl sl-icon-plus"></i>Add New Event Package </h3>
 					</div>
 					<form method="post" id="event_add" action="<?php echo site_url();?>/netball/addeventpackagedata" enctype="multipart/form-data">
 						<!-- <input type="hidden" name="id" value="<?php if (!empty($id)) echo $id; ?>">
 						<input type="hidden" name="image" value="<?php if (!empty($image)) echo $image; ?>">
 						<input type="hidden" name="title" value="<?php if (!empty($title)) echo $title; ?>">
 						<input type="hidden" name="date" value="<?php if (!empty($date)) echo $date; ?>">
 						<input type="hidden" name="venue" value="<?php if (!empty($venue)) echo $venue; ?>">
 						<input type="hidden" name="starttime" value="<?php if (!empty($starttime)) echo $starttime; ?>">
 						<input type="hidden" name="finishtime" value="<?php if (!empty($finishtime)) echo $finishtime; ?>">
 						<input type="hidden" name="requirements" value="<?php if (!empty($requirements)) echo $requirements; ?>">
 						<input type="hidden" name="fee" value="<?php if (!empty($fee)) echo $fee; ?>"> -->
 						<input type="hidden" name="id" value="<?php if (!empty($clubdatainfo->no)) echo $clubdatainfo->no; ?>">

 						<table class="basic-table">
 							<tbody>
 								<tr>
 									<th></th>
 									<th>Package Name</th>
 									<th>Number of Players Included*</th>
 									<th>Per Event Fee</th>
 									<th>Player Registration Fee</th>
 								</tr>
 								<?php foreach ($eventpackagelist as $eventpackage) { ?>
	 								<tr> 
	 									<td>
	 										<input type="radio" name="package" value=" <?php if (!empty($eventpackage->package_id)) echo $eventpackage->package_id; ?>" required="required">
	 									</td>
	 									<td> <?php if (!empty($eventpackage->package_name)) echo $eventpackage->package_name; ?> </td>
	 									<td> <?php if (!empty($eventpackage->number_of_player)) echo $eventpackage->number_of_player; ?> </td>
	 									<td> <?php if (!empty($eventpackage->per_event_fee)) echo $eventpackage->per_event_fee; ?> </td>
	 									<td> <?php if (!empty($eventpackage->player_regisatration_fee)) echo $eventpackage->player_regisatration_fee; ?> </td>
	 								</tr>
 								<?php } ?>  
 							</tbody>
 						</table>
 						<input type="submit" class="button border fw margin-top-20" name="button" value="Order Event Package" />
 					</form>
 					<p>*Extra players can be added for $x per player, per event not including the players contribution amount<br/>
 						**There is no ceiling on the number of players, but each player will still need the $5 player contribution</p>
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
