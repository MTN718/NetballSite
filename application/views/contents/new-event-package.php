 <div class="dashboard-content">

 	<!-- Titlebar -->
 	<div id="titlebar">
 		<div class="row">
 			<div class="col-md-12">
 				<h2>Inspire Sports Group :: Add New Event Detail</h2>
 				<!-- Breadcrumbs -->
 				<nav id="breadcrumbs">
 					<ul>
 						<li><a href="#">Home</a></li>
 						<li><a href="#">Add New Event Detail</a></li>

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
 						<h3><i class="sl sl-icon-plus"></i> New Event</h3>
 					</div>


 					<form method="post" id="event_add" action="<?php echo site_url();?>/netball/addeventpackagedata" enctype="multipart/form-data">
 						<input type="hidden" name="id" value="<?php if (!empty($id)) echo $id; ?>">
 						<input type="hidden" name="image" value="<?php if (!empty($image)) echo $image; ?>">
 						<input type="hidden" name="title" value="<?php if (!empty($title)) echo $title; ?>">
 						<input type="hidden" name="date" value="<?php if (!empty($date)) echo $date; ?>">
 						<input type="hidden" name="venue" value="<?php if (!empty($venue)) echo $venue; ?>">
 						<input type="hidden" name="starttime" value="<?php if (!empty($starttime)) echo $starttime; ?>">
 						<input type="hidden" name="finishtime" value="<?php if (!empty($finishtime)) echo $finishtime; ?>">
 						<input type="hidden" name="requirements" value="<?php if (!empty($requirements)) echo $requirements; ?>">
 						<input type="hidden" name="fee" value="<?php if (!empty($fee)) echo $fee; ?>">


 						<table class="basic-table">

 							<tbody>
 								<tr>
 									<th></th>
 									<th>Package Name</th>
 									<th>Number of Players Included*</th>
 									<th>Per Event Fee</th>
 									<th>Player Registration Fee</th>
 								</tr>

 								<tr>
 									<td>
 										<input type="radio" name="package" value="1" required="required">
 									</td>
 									<td>1 - 70</td>
 									<td>Up to 70 players</td>
 									<td>$69.95</td>
 									<td>$5.00</td>


 								</tr>

 								<tr>
 									<td>
 										<input type="radio" name="package" value="2" required="required">
 									</td>
 									<td>71 - 100</td>
 									<td>Up to 100 players</td>
 									<td>$99.95</td>
 									<td>$5.00</td>
 								</tr>



 								<tr>
 									<td>
 										<input type="radio" name="package" value="3" required="required">
 									</td>
 									<td>101 - 130</td>
 									<td>Up to 130 players</td>
 									<td>$129.95</td>
 									<td>$5.00</td>
 								</tr>

 								<tr>
 									<td>
 										<input type="radio" name="package" value="4" required="required">
 									</td>
 									<td>131 +</td>
 									<td>No max number of players**</td>
 									<td>$159.95</td>
 									<td>$5.00</td>
 								</tr>

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
