<!-- Content
	================================================== -->
    <div class="dashboard-content">

    <!-- Titlebar -->
    <div id="titlebar">
      <div class="row">
        <div class="col-md-12">
          <h2>Package Details</h2>
          <!-- Breadcrumbs -->
          <nav id="breadcrumbs">
            <ul>
              <li><a href="<?php echo site_url('admin/index');?>">Home</a></li>
              <li><a href="#">Package</a></li>
              
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

      </tbody></table>

         <div class="add-listing-headline">
              <h3><i class="sl sl-icon-plus"></i> Package Details
                <a href="<?php echo site_url('admin/addpackage');?>" class="button gray" style="float: right;"><i class="sl sl-icon-plus"></i> Add Package </a>
              </h3>
            </div>
   
          <table class="basic-table">
          <tbody>
         <tr>
          <th> Package Name </th>
          <th> Number of Player </th>
          <th> Per Event Fee </th>
          <th> Player Regisatration Fee </th>
          <th> Action </th>

         </tr>
         <?php foreach ($packagedatalist as $packagedata) { ?>
         <tr data-row-id="<?php echo $packagedata->package_id;?>"  id="packageAction<?php echo $packagedata->package_id;?>">
           <td> <?php if (!empty($packagedata->package_name)) echo $packagedata->package_name; ?> </td>
           <td> <?php if (!empty($packagedata->number_of_player)) echo $packagedata->number_of_player; ?> </td>
           <td> <?php if (!empty($packagedata->per_event_fee)) echo $packagedata->per_event_fee; ?> </td>
           <td> <?php if (!empty($packagedata->player_regisatration_fee)) echo $packagedata->player_regisatration_fee; ?> </td>
           <td>                          
              <a href="<?php echo base_url(); ?>index.php/admin/updatepackage?package_id=<?php echo $packagedata->package_id ?>" class="button gray"><i class="sl sl-icon-note"></i> Edit</a> 
              <a href="javascript:void(0)" class="button gray editable-action" col-index='1' data="0"><i class="sl sl-icon-close"></i> Delete</a></td>
        </tr>
       <?php } ?> 
      </tbody></table>


           
          </div>
          <!-- Section / End -->
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


<script type="text/javascript">
    $(document).ready(function(){      
        $(document).on('click','.editable-action', function() {
            data = {};
            data['val'] = $(this).attr('data');
            data['id'] = $(this).parent('td').parent('tr').attr('data-row-id');
            data['index'] = $(this).attr('col-index');
            
            $.ajax({   

                type: "POST",  
                url: "<?php echo base_url(); ?>/index.php/admin/updateInline/packagedelete",  
                cache:false,  
                data: data,
                dataType: "json",       
                success: function(response)  
                {   
                    if(data['index'] == 2)
                        location.reload();
                    else
                        $("#packageAction"+data['id']).load(location.href + " #packageAction"+data['id']);
                }   
            });
        });
  });
</script>        