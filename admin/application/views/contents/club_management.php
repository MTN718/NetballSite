<!-- Content================================================== -->
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
                                <th>User Name</th>
                                <th>Email Address</th>
                                <th>Club Name</th>
                                <th>Association Afiliated</th>
                            </tr>
                            <?php foreach ($results as $clubdatalist) { ?>
                                <tr data-row-id="<?php echo $clubdatalist->no;?>"  id="clubemailAction<?php echo $clubdatalist->no;?>">
                                    <td> <?php if (!empty($clubdatalist->name)) echo $clubdatalist->name; ?> </td>
                                    <td> <?php if (!empty($clubdatalist->email)) echo $clubdatalist->email; ?> </td>
                                    <td> <?php if (!empty($clubdatalist->club_name)) echo $clubdatalist->club_name; ?> </td>
                                    <td> <?php if (!empty($clubdatalist->association_afiliated)) echo $clubdatalist->association_afiliated; ?> </td>
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
                                <th> Stablishes Date </th>
                                <th> Phone Number </th>
                                <th> Mobile Number </th>
                                <th> Action </th>
                            </tr>
                            <?php foreach ($results as $clubdatalist) { ?>
                                <tr data-row-id="<?php echo $clubdatalist->no;?>"  id="clubAction<?php echo $clubdatalist->no;?>">
                                    <td> <?php if (!empty($clubdatalist->name)) echo $clubdatalist->name; ?> </td>
                                    <td> <?php if (!empty($clubdatalist->stablishes_date)) echo $clubdatalist->stablishes_date; ?> </td>
                                    <!-- 
                                    <td> <?php if (!empty($clubdatalist->address)) echo $clubdatalist->address; ?> </td>
                                    <td> <?php if (!empty($clubdatalist->city)) echo $clubdatalist->city; ?> </td>
                                    <td> <?php if (!empty($clubdatalist->state)) echo $clubdatalist->state; ?> </td>
                                    <td> <?php if (!empty($clubdatalist->postcode)) echo $clubdatalist->postcode; ?> </td>
                                    <td> <?php if (!empty($clubdatalist->country)) echo $clubdatalist->country; ?> </td> -->
                                    <td> <?php if (!empty($clubdatalist->phone)) echo $clubdatalist->phone; ?> </td>
                                    <td> <?php if (!empty($clubdatalist->mobile)) echo $clubdatalist->mobile; ?> </td>
                                    <td style="width: 22%;">
                                        <?php if($clubdatalist->status == 1) { ?>                          
                                            <a href="javascript:void(0)" class="button gray editable-action" col-index='1' data="0"><i class="sl sl-icon-note"></i> Active </a>
                                        <?php } else { ?>                          
                                            <a href="javascript:void(0)" class="button gray editable-action" col-index='1' data="1"><i class="sl sl-icon-note"></i> Deactive </a>
                                        <?php } ?>  
                                            <a href="javascript:void(0)" class="button gray editable-action" col-index='2' data="0"><i class="sl sl-icon-close"></i> Delete</a>
                                            <a href="<?php echo base_url(); ?>index.php/admin/cluboverview?no=<?php echo $clubdatalist->no ?>" class="button gray"><i class="sl sl-icon-eye"></i> View </a>
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
                url: "<?php echo base_url(); ?>/index.php/admin/updateInline/clubdelete",  
                cache:false,  
                data: data,
                dataType: "json",       
                success: function(response)  
                {   
                    if(data['index'] == 1)
                        location.reload();
                    else
                        $("#clubAction"+data['id']).load(location.href + " #clubAction"+data['id']);
                        $("#clubemailAction"+data['id']).load(location.href + " #clubemailAction"+data['id']);
                }   
            });
        });
    });
</script>        