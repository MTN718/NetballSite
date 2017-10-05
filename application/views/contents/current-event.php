<!-- Content================================================== -->
<div class="dashboard-content">
	<!-- Titlebar -->
	<div id="titlebar">
		<div class="row">
			<div class="col-md-12">
				<h2>Inspire Sports Group :: Current Event</h2>
				<!-- Breadcrumbs -->
				<!-- <nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Current Event</a></li>
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
						<h3><i class="sl sl-icon-plus"></i> Current Event</h3>
					</div>
					<table class="basic-table">
						<tbody>
							<tr>
								<th> Image </th>
								<th> Title </th>
								<th> Venue </th>
								<th> Date </th>
								<th> Start Time </th>
								<th> End Time </th>
								<th> Fee </th>
								<th> Requirements </th>
								<th> Action </th>
							</tr>
							<?php foreach ($eventinfos as $eventinfo) { ?>
								<tr>
									<td> <img src='<?php echo base_url(); ?>images/event/<?php echo $eventinfo->photo; ?>' style="width: 100px;"> </td>
									<td> <?php if (!empty($eventinfo->title)) echo $eventinfo->title; ?> </td>
									<td> <?php if (!empty($eventinfo->venue)) echo $eventinfo->venue; ?> </td>
									<td> <?php if (!empty($eventinfo->date)) echo $eventinfo->date; ?> </td>
									<td> <?php if (!empty($eventinfo->starttime)) echo $eventinfo->starttime; ?> </td>
									<td> <?php if (!empty($eventinfo->endtime)) echo $eventinfo->endtime; ?> </td>
									<td> <?php if (!empty($eventinfo->fee)) echo $eventinfo->fee; ?> </td>
									<td> <?php if (!empty($eventinfo->special)) echo $eventinfo->special; ?> </td>
									<td>
										<a href="<?php echo base_url(); ?>index.php/netball/view_current_event?no=<?php echo $eventinfo->no ?>" class="button gray"><i class="sl sl-icon-eye"></i> View </a>
										<!-- <a href="<?php echo base_url(); ?>index.php/admin/edit_current_event?no=<?php echo $eventinfo->no ?>&package_id=<?php echo $eventinfo->package_id ?>club_no=<?php echo $eventinfo->club_no ?>" class="button gray"><i class="sl sl-icon-note"></i> Edit </a> -->
									</td>
								</tr>
							<?php } ?>	
						</tbody>
					</table>
					<!-- <input type="submit" class="button border fw margin-top-20" name="button" value="Order Event Package" />
					<p>*Extra players can be added for $x per player, per event not including the players contribution amount<br/>
					**There is no ceiling on the number of players, but each player will still need the $5 player contribution</p> -->
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