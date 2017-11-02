<style type="text/css">
    .chosen-container-single .chosen-single {
        border: none;
        box-shadow: none;
        background: unset;
        padding:0px;
    }
</style>


<div class="dashboard-content">
    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2>Event  Details</h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Event  Details</a></li>
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
                      <h3><i class="sl sl-icon-plus"></i> Event  Details</h3>
                    </div>

                    <div class="dashboard-list-box margin-top-0">
                        <ul>
                                <?php if(isset($eventinfo) and !empty($eventinfo)) { ?>
                                <li data-row-id="<?php echo $eventinfo->no;?>"  id="eventAction<?php echo $eventinfo->no;?>">
                                  <div class="list-box-listing">
                                    <div class="list-box-listing-img"><a href="#">
                                      <img src="../admin/assets/images/eventinfo/<?php if(!empty($eventinfo->photo)) echo $eventinfo->photo; ?>" alt=""></a></div>
                                      <div class="list-box-listing-content">
                                          <div class="inner">
                                            <h3><?php if(!empty($eventinfo->title)) echo $eventinfo->title; ?></h3>
                                            <div><b>Date: </b> <?php if(!empty($eventinfo->date)) echo $eventinfo->date; ?></div>
                                            <div><b>Timing: </b> <?php if(!empty($eventinfo->starttime)) echo $eventinfo->starttime; ?> - <?php if(!empty($eventinfo->endtime)) echo $eventinfo->endtime; ?></div>
                                            <div><b>Fee: </b>$<?php if(!empty($eventinfo->fee)) echo $eventinfo->fee; ?>.00</div>
                                            <div><b>Special Requirements: </b> <?php if(!empty($eventinfo->special)) echo $eventinfo->special; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>





                    <div class="add-listing-headline">
                        <h3><i class="sl sl-icon-plus"></i> Event Registration Details</h3>
                    </div>
   
                    <table class="basic-table">
                        <tbody>
                            <tr>
                                <th> Player Name </th>
                                <th> Email </th>
                                <th> Phone </th>
                                <th> Mobile </th>
                                <th> Position </th>
                                <th> Status </th>
                                <th> Action </th>
                            </tr>
                            <?php if(isset($registerplayerinfos) and !empty($registerplayerinfos)) foreach ($registerplayerinfos as $playerinfo) { ?>
                            <tr data-row-id="<?php echo $playerinfo->no;?>"  id="playerAction<?php echo $playerinfo->no;?>">

                                <td> <?php if (!empty($playerinfo->name)) echo $playerinfo->name; ?> </td>
                                <td> <?php if (!empty($playerinfo->email)) echo $playerinfo->email; ?> </td>
                                <td> <?php if (!empty($playerinfo->phone)) echo $playerinfo->phone; ?> </td>
                                <td> <?php if (!empty($playerinfo->mobile)) echo $playerinfo->mobile; ?> </td>
                                <td>




                                <select data-placeholder="All Categories" name="positionid" id="position" col-index='0' class="chosen-select editable-position" style="display: none;" required="required" <?php if($playerinfo->reg_status != 0) echo "disabled"; ?>>
                                    <option value="">Select Position</option>
                                    <option value="<?php echo $playerinfo->position1;?>" <?php if($playerinfo->position==1) echo "selected";?>><?php echo $playerinfo->position1;?></option>
                                    <option value="<?php echo $playerinfo->position2;?>" <?php if($playerinfo->position==2) echo "selected";?>><?php echo $playerinfo->position2;?></option>
                                    <option value="<?php echo $playerinfo->position3;?>" <?php if($playerinfo->position==3) echo "selected";?>><?php echo $playerinfo->position3;?></option>
                                </select>




                                </td>
                                <td> 
                                    <?php if (isset($playerinfo->reg_status)) { 
                                        if($playerinfo->reg_status == 0 )
                                            echo "Not Confirmed";
                                        else 
                                            echo "Confirmed";
                                    } ?>
                                </td>
                                <td>  
                                    <?php if($playerinfo->reg_status == 0) { ?>                          
                                        <a href="javascript:void(0)" class="button gray editable-action" col-index='1' data="0"><i class="sl sl-icon-note"></i> Confirmed </a>
                                    <?php } else { ?>                          
                                        <a href="javascript:void(0)" class="button gray editable-action" col-index='1' data="1"><i class="sl sl-icon-note"></i> Cancel Confirmation </a>
                                    <?php } ?>  
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




<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','.editable-position', function() {
        
        data = {};
        data['val'] = $(this).val();
        data['id'] = $(this).parent('td').parent('tr').attr('data-row-id');
        data['index'] = $(this).attr('col-index');

        $.ajax({ 
            type: "POST",  
            url: "<?php echo base_url(); ?>/index.php/netball/updateInline/position",
            cache:false,  
            data: data,
            dataType: "json",       
            success: function(response)  
            {   
            }   
        });
    });
});
</script>

<script type="text/javascript">
    $(document).ready(function(){      
        $(document).on('click','.editable-action', function() {
            data = {};
            data['val'] = $(this).attr('data');
            data['id'] = $(this).parent('td').parent('tr').attr('data-row-id');
            data['index'] = $(this).attr('col-index');
            
            $.ajax({   

                type: "POST",  
                url: "<?php echo base_url(); ?>/index.php/netball/updateInline/currenteventstatus",  
                cache:false,  
                data: data,
                dataType: "json",       
                success: function(response)  
                {   
                    if(data['index'] == 1)
                        location.reload();
                    else
                        $("#playerAction"+data['id']).load(location.href + " #playerAction"+data['id']);
                }   
            });
        });
    });
</script>
