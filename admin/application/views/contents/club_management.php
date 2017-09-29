<!-- Content
	================================================== -->
    <div class="dashboard-content">

    <!-- Titlebar -->
    <div id="titlebar">
      <div class="row">
        <div class="col-md-12">
          <h2>Clubs management</h2>
          <!-- Breadcrumbs -->
          <nav id="breadcrumbs">
            <ul>
              <li><a href="<?php echo site_url('admin/index');?>">Home</a></li>
              <li><a href="#">Clubs management</a></li>
              
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
              <h3><i class="sl sl-icon-plus"></i> Login Details</h3>
            </div>

            
          <table class="basic-table">
          <tbody>
         <tr>
          <th>Email Address</th>
          <th>Positions</th>
         </tr>
         <tr>
          <td>info@gmail.com</td>
          <td>GK</td>
        </tr>
      </tbody></table>

         <div class="add-listing-headline">
              <h3><i class="sl sl-icon-plus"></i> Personal Details</h3>
            </div>
   
          <table class="basic-table">
          <tbody>
         <tr>
          <th> User Name </th>
          <th> Stablishes Date </th>
          <th> Address </th>
          <th> State </th>
          <th> Postcode </th>
          <th> Country </th>
          <th> Phone Number </th>
          <th> Action </th>

         </tr>
         <?php foreach ($clubdatalists as $clubdatalist) { ?>
         <tr data-row-id="<?php echo $clubdatalist->no;?>"  id="clubAction<?php echo $clubdatalist->no;?>">
           <td> <?php if (!empty($clubdatalist->name)) echo $clubdatalist->name; ?> </td>
           <td> <?php if (!empty($clubdatalist->stablishes_date)) echo $clubdatalist->stablishes_date; ?> </td>
           <td> <?php if (!empty($clubdatalist->address)) echo $clubdatalist->address; ?> </td>
           <td> <?php if (!empty($clubdatalist->state)) echo $clubdatalist->state; ?> </td>
           <td> <?php if (!empty($clubdatalist->postcode)) echo $clubdatalist->postcode; ?> </td>
           <td> <?php if (!empty($clubdatalist->country)) echo $clubdatalist->country; ?> </td>
           <td> <?php if (!empty($clubdatalist->phone)) echo $clubdatalist->phone; ?> </td>
           <td><a href="javascript:void(0)" class="button gray editable-action" col-index='1' data="0"><i class="sl sl-icon-close"></i> Delete</a></td>
        </tr>
       <?php } ?> 
      </tbody></table>


           
          </div>
          <!-- Section / End -->
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="pagination-container margin-top-30 margin-bottom-0">
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


<script type="text/javascript">
    $(document).ready(function(){      
        $(document).on('click','.editable-action', function() {
            data = {};
            data['val'] = $(this).attr('data');
            data['id'] = $(this).parent('td').parent('tr').attr('data-row-id');
            data['index'] = $(this).attr('col-index');
            
            $.ajax({   

                type: "POST",  
                url: "<?php echo base_url(); ?>/index.php/admin/updateInline/clubdelete",  
                cache:false,  
                data: data,
                dataType: "json",       
                success: function(response)  
                {   
                    if(data['index'] == 2)
                        location.reload();
                    else
                        $("#clubAction"+data['id']).load(location.href + " #clubAction"+data['id']);
                }   
            });
        });
  });
</script>        