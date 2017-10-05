<script>
  function onSearchClub()
  {
    data = {};
    data['clubname'] = $('#clubname').val();

    $.ajax({
      type: 'POST',
      url: '<?php echo site_url() . "/netball/ajaxSearchClub"; ?>',
      cache:false,  
      data: data,
      dataType: "json",
      success: function(data)
      {
        appendHorseGrid(data);
      }
    });
  }

  function appendHorseGrid(club)
  {
    console.log(club);


    var gridContainer = document.getElementById("club-list");
    gridContainer.innerHTML = ""; 

    if (club.clubs.length == 0)
      gridContainer.innerHTML = "No Search Result";

    for (i = 0; i < club.clubs.length; i++)
    {
      hors = club.clubs[i];

        gridContainer.innerHTML += "<div class='col-md-4'><div class='blog-post single-post'><a href='<?php echo site_url('netball/clubdetails?no=');?>"+hors.no+"'><img class='post-img' src='<?php echo base_url('images/');?>"+hors.photo+"' style='height:201px;'></a><div class='post-content'><h3>Club Name : "+hors.name+"</h3><h5>Association Afiliated : "+hors.association_afiliated+"</h5><h5>Stablishes Date : "+hors.stablishes_date+"</h5><div class='clearfix'></div></div></div></div>";
    }
  }
</script>

<div class="container-fluid padding-top-35">     
    <!-- Blog Posts -->
    <div class="blog-page">
        <div class="row"> 
            <!-- Widgets -->
            <div class="col-lg-3 col-md-4">
                <div class="sidebar"> 
                    <!-- Widget -->
                    <div class="widget margin-bottom-40">
                        <h3 class="margin-top-0 margin-bottom-30">Filters</h3>
                        <!-- Row -->
                        <div class="row with-forms"> 
                            <div class="col-md-12">
                                <input id="clubname" type="text" name="clubname">
                            </div>
                        </div><!-- Row / End --> <br>
                        <button class="button fullwidth margin-top-25" onclick="onSearchClub()">Search</button>
                    </div>
                    <!-- Widget / End --> 
                </div>
            </div>

            <div class="col-lg-9 col-md-8 padding-left-30">
                <div class="row" id="club-list">
                    <?php foreach ($clubdatalists as $clubdatalist) { ?>
                        <div class="col-md-4">
                            <div class="blog-post single-post"> 
                                <a href="<?php echo site_url('netball/clubdetails?no=').$clubdatalist->no; ?>"> 
                                    <!-- Img --> 
                                    <img class="post-img" src='<?php echo base_url(); ?>images/<?php echo $clubdatalist->photo; ?>' style="height:201px;">
                                </a>    
                                <!-- Content -->
                                <div class="post-content">
                                    <h3>Club Name : <?php if (!empty($clubdatalist->club_name)) echo $clubdatalist->club_name; ?>  </h3>
                                    <h5>Association Afiliated : <?php if (!empty($clubdatalist->association_afiliated)) echo $clubdatalist->association_afiliated; ?>  </h5>
                                    <h5>Stablishes Date : <?php if (!empty($clubdatalist->stablishes_date)) echo $clubdatalist->stablishes_date; ?>  </h5>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>  
                </div>
                <!-- Sidebar / End --> 
            </div>
        </div>
    </div>
</div>
<!-- Wrapper / End --> 
