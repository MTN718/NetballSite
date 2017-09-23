<?php include ('head.php') ?>
<?php include ('main-menu.php') ?>
<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Inspire Sports Group :: New Event</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="<?php echo site_url('netball/admin');?>">Home</a></li>
							<li><a href="#">New Event</a></li>
							
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

						
					<table class="basic-table">

				<tbody><tr>
					<th>Package Name</th>
					<th>Number of Players Included*</th>
                    <th>Per Event Fee</th>
                    <th>Player Registration Fee</th>
				</tr>

				<tr>
					<td>1 - 70</td>
					<td>Up to 70 players</td>
                    <td>$69.95</td>
                    <td>$5.00</td>
                    
                    
				</tr>

				<tr>
					<td>71 - 100</td>
					<td>Up to 100 players</td>
                    <td>$99.95</td>
                    <td>$5.00</td>
				</tr>

				<tr>
					<td>101 - 130</td>
					<td>Up to 130 players</td>
                    <td>$129.95</td>
                    <td>$5.00</td>
				</tr>

				<tr>
					<td>131 +</td>
					<td>No max number of players**</td>
                    <td>$159.95</td>
                    <td>$5.00</td>
				</tr>
			</tbody></table>
            <input type="submit" class="button border fw margin-top-20" name="button" value="Order Event Package" />
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