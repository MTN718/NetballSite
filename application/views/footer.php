 <!-- Footer
================================================== -->
  <div id="footer"> 
    <!-- Main -->
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-6"> <img class="footer-logo" src="<?php echo base_url('assets/images/logoinspire.jpg');?>" alt=""> <br>
          <br>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
        </div>
        <div class="col-md-4 col-sm-6 ">
          <h4>Helpful Links</h4>
          <ul class="footer-links">
            <li><a href="#">Login</a></li>
            <li><a href="<?php echo site_url('netball/registerAccType');?>">Sign Up</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Add Listing</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
          <ul class="footer-links">
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Our Partners</a></li>
            <li><a href="#">How It Works</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-3  col-sm-12">
          <h4>Contact Us</h4>
          <div class="text-widget"> <span>12345 address line1, country. </span> <br>
            Phone: <span>(123) 456-789 </span><br>
            E-Mail:<span> <a href="#">info@gmail.com</a> </span><br>
          </div>
          <ul class="social-icons margin-top-20">
            <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
            <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
            <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
          </ul>
        </div>
      </div>
      
      <!-- Copyright -->
      <div class="row">
        <div class="col-md-12">
          <div class="copyrights">© 2017 Inspire Sports Group. All Rights Reserved.</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer / End --> 
  
</div>
<!-- Wrapper / End --> 

<!-- Scripts
================================================== --> 
<script>!function(e,t,r,n,c,h,o){function a(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return r}try{for(c=e.getElementsByTagName('a'),o='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(h=c[n]).href.indexOf(o))>-1&&(h.href='mailto:'+a(h.href,t+o.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(h=c[n]).parentNode.replaceChild(e.createTextNode(a(h.getAttribute('data-cfemail'),0)),h)}catch(e){}}catch(e){}}(document);</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/scripts/jquery-2.2.0.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jpanelmenu.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/chosen.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/slick.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/rangeslider.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/magnific-popup.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/waypoints.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/counterup.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery-ui.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/tooltips.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/custom.js');?>"></script> 


  <script type="text/javascript" src="<?php echo base_url('assets/scripts/themepunch.tools.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/themepunch.revolution.min.js');?>"></script> 
<script type="text/javascript">
  var tpj=jQuery;     
  var revapi4;
  tpj(document).ready(function() {
    if(tpj("#rev_slider_4_1").revolution == undefined){
      revslider_showDoubleJqueryError("#rev_slider_4_1");
    }else{
      revapi4 = tpj("#rev_slider_4_1").show().revolution({
        sliderType:"standard",
        jsFileLocation:"scripts/",
        sliderLayout:"auto",
        dottedOverlay:"none",
        delay:9000,
        navigation: {
          keyboardNavigation:"off",
          keyboard_direction: "horizontal",
          mouseScrollNavigation:"off",
          onHoverStop:"on",
          touch:{
            touchenabled:"on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
          }
          ,
          arrows: {
            style:"zeus",
            enable:true,
            hide_onmobile:true,
            hide_under:600,
            hide_onleave:true,
            hide_delay:200,
            hide_delay_mobile:1200,
            tmp:'<div class="tp-title-wrap"></div>',
            left: {
              h_align:"left",
              v_align:"center",
              h_offset:40,
              v_offset:0
            },
            right: {
              h_align:"right",
              v_align:"center",
              h_offset:40,
              v_offset:0
            }
          }
          ,
          bullets: {
        enable:false,
        hide_onmobile:true,
        hide_under:600,
        style:"hermes",
        hide_onleave:true,
        hide_delay:200,
        hide_delay_mobile:1200,
        direction:"horizontal",
        h_align:"center",
        v_align:"bottom",
        h_offset:0,
        v_offset:32,
        space:5,
        tmp:''
          }
        },
        viewPort: {
          enable:true,
          outof:"pause",
          visible_area:"80%"
      },
      responsiveLevels:[1200,992,768,480],
      visibilityLevels:[1200,992,768,480],
      gridwidth:[1180,1024,778,480],
      gridheight:[640,500,400,300],
      lazyType:"none",
      parallax: {
        type:"mouse",
        origo:"slidercenter",
        speed:2000,
        levels:[2,3,4,5,6,7,12,16,10,25,47,48,49,50,51,55],
        type:"mouse",
      },
      shadow:0,
      spinner:"off",
      stopLoop:"off",
      stopAfterLoops:-1,
      stopAtSlide:-1,
      shuffle:"off",
      autoHeight:"off",
      hideThumbsOnMobile:"off",
      hideSliderAtLimit:0,
      hideCaptionAtLimit:0,
      hideAllCaptionAtLilmit:0,
      debugMode:false,
      fallbacks: {
        simplifyAll:"off",
        nextSlideOnWindowFocus:"off",
        disableFocusListener:false,
      }
    });
    }
  }); /*ready*/
  </script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
  (Load Extensions only on Local File Systems ! 
  The following part can be removed on Server for On Demand Loading) --> 

 







<!-- REVOLUTION SLIDER SCRIPT --> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/extensions/revolution.extension.actions.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/extensions/revolution.extension.carousel.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/extensions/revolution.extension.kenburn.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/extensions/revolution.extension.layeranimation.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/extensions/revolution.extension.migration.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/extensions/revolution.extension.navigation.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/extensions/revolution.extension.parallax.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/extensions/revolution.extension.slideanims.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/scripts/extensions/revolution.extension.video.min.js');?>"></script>


</body>
</html>