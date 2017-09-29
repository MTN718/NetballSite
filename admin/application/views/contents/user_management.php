<div class="dashboard-content">

    <!-- Titlebar -->
    <div id="titlebar">
      <div class="row">
        <div class="col-md-12">
          <h2>Player management</h2>
          <!-- Breadcrumbs -->
          <nav id="breadcrumbs">
            <ul>
              <li><a href="<?php echo site_url('admin/index');?>">Home</a></li>
              <li><a href="#">Player management</a></li>
              
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
          <th> Date of Birth </th>
          <th> Address </th>
          
          <th> State </th>
          <th> Postcode </th>
          <th> Country </th>
          <th> Phone Number </th>
          <th> Action </th>

         </tr>
         <?php foreach ($playerdatalists as $playerdatalist) { ?>
         <tr data-row-id="<?php echo $playerdatalist->no;?>"  id="playerAction<?php echo $playerdatalist->no;?>">

           <td> <?php if (!empty($playerdatalist->name)) echo $playerdatalist->name; ?> </td>
           <td> <?php if (!empty($playerdatalist->birthday)) echo $playerdatalist->birthday; ?> </td>
           <td> <?php if (!empty($playerdatalist->address)) echo $playerdatalist->address; ?> </td>
           <td> <?php if (!empty($playerdatalist->state)) echo $playerdatalist->state; ?> </td>
           <td> <?php if (!empty($playerdatalist->postcode)) echo $playerdatalist->postcode; ?> </td>
           <td> <?php if (!empty($playerdatalist->country)) echo $playerdatalist->country; ?> </td>
           <td> <?php if (!empty($playerdatalist->phone)) echo $playerdatalist->phone; ?> </td>
           <td>  
              <a href="javascript:void(0)" class="button gray editable-action" col-index='1' data="0"><i class="sl sl-icon-close"></i> Delete</a>
           </td>

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
                url: "<?php echo base_url(); ?>/index.php/admin/updateInline/playerdelete",  
                cache:false,  
                data: data,
                dataType: "json",       
                success: function(response)  
                {   
                    if(data['index'] == 2)
                        location.reload();
                    else
                        $("#playerAction"+data['id']).load(location.href + " #playerAction"+data['id']);
                }   
            });
        });
  });
</script>