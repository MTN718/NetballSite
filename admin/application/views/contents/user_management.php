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
                                <th>User Name</th>
                                <th>Email Address</th>
                                <th>Position1</th>
                                <th>Position2</th>
                                <th>Position3</th>
                            </tr>
                            <?php foreach ($results as $playerdatalist) { ?>
                                <tr data-row-id="<?php echo $playerdatalist->no;?>"  id="playeremailAction<?php echo $playerdatalist->no;?>">
                                    <td> <?php if (!empty($playerdatalist->name)) echo $playerdatalist->name; ?> </td>
                                    <td> <?php if (!empty($playerdatalist->email)) echo $playerdatalist->email; ?> </td>
                                    <td> <?php if (!empty($playerdatalist->position1)) echo $playerdatalist->position1; ?> </td>
                                    <td> <?php if (!empty($playerdatalist->position2)) echo $playerdatalist->position2; ?> </td>
                                    <td> <?php if (!empty($playerdatalist->position3)) echo $playerdatalist->position3; ?> </td>
                                </tr>
                            <?php } ?>  
                        </tbody>
                    </table>
                     <div class="add-listing-headline">
                        <h3><i class="sl sl-icon-plus"></i> Personal Details</h3>
                    </div>
                    <table class="basic-table">
                        <tbody>
                            <tr>
                                <th> User Name </th>
                                <th> Date of Birth </th>
                                <th> Address </th>
                                <th> City </th>
                                <th> State </th>
                                <th> Postcode </th>
                                <th> Country </th>
                                <th> Phone Number </th>
                                <th> Mobile Number </th>
                                <th> Action </th>
                            </tr>
                            <?php foreach ($results as $playerdatalist) { ?>
                                <tr data-row-id="<?php echo $playerdatalist->no;?>"  id="playerAction<?php echo $playerdatalist->no;?>">
                                    <td> <?php if (!empty($playerdatalist->name)) echo $playerdatalist->name; ?> </td>
                                    <td> <?php if (!empty($playerdatalist->birthday)) echo $playerdatalist->birthday; ?> </td>
                                    <td> <?php if (!empty($playerdatalist->address1)) echo $playerdatalist->address1; ?> <?php if (!empty($playerdatalist->address2)) echo $playerdatalist->address2; ?> </td>
                                    <td> <?php if (!empty($playerdatalist->city)) echo $playerdatalist->city; ?> </td>
                                    <td> <?php if (!empty($playerdatalist->state)) echo $playerdatalist->state; ?> </td>
                                    <td> <?php if (!empty($playerdatalist->postcode)) echo $playerdatalist->postcode; ?> </td>
                                    <td> <?php if (!empty($playerdatalist->country)) echo $playerdatalist->country; ?> </td>
                                    <td> <?php if (!empty($playerdatalist->phone)) echo $playerdatalist->phone; ?> </td>
                                    <td> <?php if (!empty($playerdatalist->mobile)) echo $playerdatalist->mobile; ?> </td>
                                    <td style="width: 18%;">  
                                        <?php if($playerdatalist->status == 1) { ?>                          
                                            <a href="javascript:void(0)" class="button gray editable-action" col-index='1' data="0"><i class="sl sl-icon-note"></i> Active </a>
                                        <?php } else { ?>                          
                                            <a href="javascript:void(0)" class="button gray editable-action" col-index='1' data="1"><i class="sl sl-icon-note"></i> Deactive </a>
                                        <?php } ?>  
                                        <a href="javascript:void(0)" class="button gray editable-action" col-index='2' data="0"><i class="sl sl-icon-close"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>  
                        </tbody>
                    </table>           
                </div>
                <!-- Section / End -->
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="pagination-container text-center margin-top-30 margin-bottom-0">
          <nav class="pagination">
            <ul>
              <?php foreach ($links as $link) {
            echo "<li>". $link."</li>";
            } ?>
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
                    if(data['index'] == 1)
                        location.reload();
                    else
                        $("#playerAction"+data['id']).load(location.href + " #playerAction"+data['id']);
                        $("#playeremailAction"+data['id']).load(location.href + " #playeremailAction"+data['id']);
                }   
            });
        });
    });
</script>
