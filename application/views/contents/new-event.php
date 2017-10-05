 <div class="dashboard-content">

 	<!-- Titlebar -->
 	<div id="titlebar">
 		<div class="row">
 			<div class="col-md-12">
 				<h2>Inspire Sports Group :: Add New Event Detail</h2>
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
 						<h3><i class="sl sl-icon-plus"></i> Add New Event Detail</h3>
 					</div>


 					<!-- Row -->
 					<div class="submit-section">
 						<form method="post" id="event_add" action="<?php echo site_url();?>/netball/addeventdata" enctype="multipart/form-data">
 							<input type="hidden" name="id" value="<?php if (!empty($clubdatainfo->no)) echo $clubdatainfo->no; ?>">
 							<!-- Row -->
 							<div class="row with-forms">

                                <!-- Title -->
                                <div class="col-md-6">
                                  <h5>Title</h5>
                                  <input type="text" id="title" name="title" required>
                              </div>

                              <!-- date -->
                              <div class="col-md-6">
                                  <h5>Date</h5>
                                  <input type="text" id="eventdate" name="date" required data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="3000">
                              </div>

                              <!-- Venue -->
                              <div class="col-md-6">
                                  <h5>Venue</h5>
                                  <input placeholder="" id="venue" name="venue" type="text" required>
                              </div>

                              <!-- Start Time -->
                              <div class="col-md-6">
                                  <h5>Start Time</h5>
                                  <input type="text" id="starttime" name="starttime" class="booking-time" required>
                              </div>

                              <!-- Finish Time -->
                              <div class="col-md-6">
                                  <h5>Finish Time</h5>
                                  <input type="text" id="finishtime" name="finishtime" class="booking-time" required>
                              </div>
                              <!-- City -->
                              <div class="col-md-6">
                                  <h5>Special Requirements</h5>
                                  <input type="text" id="requirements" name="requirements" >
                              </div>

                              <!-- Zip-Code -->
                              <div class="col-md-6">
                                  <h5>Player Co-Contribution Amount</h5>
                                  <input type="number" id="fee" name="fee" required>
                              </div>

                              <!-- Image  -->
                              <div class="col-md-6">
                                  <div class="col-md-6">
                                     <h5>Image </h5>
                                 </div>
                                 
                                 <div class="col-md-6 change-photo-btn">
                                    <div class="photoUpload">
                                       <span><i class="fa fa-upload"></i> Upload Photo</span>
                                       <input type="file" name="image" class="upload">
                                   </div>
                               </div>
                               
                           </div>

                           <div class="col-md-12 text-center">
                               <input type="submit" id="submit_event" class="button border fw margin-top-10" name="button" value="Create" />
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


<script type="text/javascript">
    $(document).ready(function(){      
        $(document).on('click','#submit_event', function() {


        	title 		= $('#title').val();
        	eventdate 	= $('#eventdate').val();
        	venue 		= $('#venue').val();
        	starttime 	= $('#starttime').val();
        	finishtime 	= $('#finishtime').val();
        	fee      	= $('#fee').val()

        	if(title == '')
        		$('#title').css("border-color", "red");
        	else
        		$('#title').css("border-color", "green");
        	
        	if(eventdate == '')
        		$('#eventdate').css("border-color", "red");
        	else
        		$('#eventdate').css("border-color", "green");
        	
        	if(venue == '')
        		$('#venue').css("border-color", "red");
        	else 
        		$('#venue').css("border-color", "green");

        	if(starttime == '')
        		$('#starttime').css("border-color", "red");
        	else
        		$('#starttime').css("border-color", "green");


        	if(finishtime == '')
        		$('#finishtime').css("border-color", "red");
        	else 
        		$('#finishtime').css("border-color", "green");

        	if(fee == '')
        		$('#fee').css("border-color", "red");
        	else
        		$('#fee').css("border-color", "green");




        	if( title != '' && eventdate != '' && venue != '' && starttime != '' && finishtime != '' && fee != '') {
        		$('#event_add').submit();
        	}

        });
});
</script>