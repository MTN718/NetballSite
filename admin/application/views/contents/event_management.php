<!-- Content
	================================================== -->
    <div class="dashboard-content">

    <!-- Titlebar -->
    <div id="titlebar">
      <div class="row">
        <div class="col-md-12">
          <h2>Event management</h2>
          <!-- Breadcrumbs -->
          <nav id="breadcrumbs">
            <ul>
              <li><a href="<?php echo site_url('admin/index');?>">Home</a></li>
              <li><a href="#">Event management</a></li>
              
            </ul>
          </nav>
        </div>
      </div>
    </div>

   <div class="row">
      
      <!-- Listings -->
      <div class="col-lg-12 col-md-12">
        <div class="dashboard-list-box margin-top-0">
          <h4>Event Listings</h4>
          <ul>

<?php if(isset($eventList) and !empty($eventList))  foreach ($eventList as $event) { ?>
            <li data-row-id="<?php echo $event->no;?>"  id="eventAction<?php echo $event->no;?>">
              <div class="list-box-listing">
                <div class="list-box-listing-img"><a href="#">
                  <img src="../admin/assets/images/event/<?php if(!empty($event->photo)) echo $event->photo; ?>" alt=""></a></div>
                <div class="list-box-listing-content">
                  <div class="inner">
                    <h3><?php if(!empty($event->title)) echo $event->title; ?></h3>
                    <span>Lorem Ipsum, is simply</span>
                    <h3> Club Name </h3>
                    <?php $club_data = $this->adminmodel->getclubdata($event->club_no); ?>
                    <span><?php if(!empty($club_data->club_name)) echo $club_data->club_name; ?></span>
                    <div class="star-rating" data-rating="2.0">
                      <div class="rating-counter">(17 reviews)</div>
                    <span class="star"></span><span class="star"></span><span class="star empty"></span><span class="star empty"></span><span class="star empty"></span></div>
                  </div>
                </div>
              </div>
              <div class="buttons-to-right">
                <?php if($event->status == 1) { ?>                          
                  <a href="javascript:void(0)" class="button gray editable-action" col-index='1' data="0"><i class="sl sl-icon-note"></i> Active </a>
                <?php } else { ?>                          
                  <a href="javascript:void(0)" class="button gray editable-action" col-index='1' data="1"><i class="sl sl-icon-note"></i> Deactive </a>
                <?php } ?>               
                  <a href="javascript:void(0)" class="button gray editable-action" col-index='2' data="0"><i class="sl sl-icon-close"></i> Delete</a>
              </div>
            </li>
<?php } ?>
          </ul>
        </div>
      </div>

<div class="clearfix"></div>
     <!--  <div class="pagination-container margin-top-30 margin-bottom-0">
          <nav class="pagination">
            <ul>
              <li><a href="#" class="current-page">1</a></li>
              <li><a href="#">2</a></li>
               <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
              <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
            </ul>
          </nav>
        </div> -->

<script type="text/javascript">
    $(document).ready(function(){      
        $(document).on('click','.editable-action', function() {
            data = {};
            data['val'] = $(this).attr('data');
            data['id'] = $(this).parent('div').parent('li').attr('data-row-id');
            data['index'] = $(this).attr('col-index');
            
            $.ajax({   

                type: "POST",  
                url: "<?php echo base_url(); ?>/index.php/admin/updateInline/eventstatus",  
                cache:false,  
                data: data,
                dataType: "json",       
                success: function(response)  
                {   
                    if(data['index'] == 1)
                        location.reload();
                    else
                        $("#eventAction"+data['id']).load(location.href + " #eventAction"+data['id']);
                }   
            });
        });
  });
</script>