<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 <!-- Footer
================================================== -->
  <div id="footer"> 
    <!-- Main -->
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-6"> 
          <img class="footer-logo" src="<?php echo base_url('assets/images/logoinspire.jpg');?>" alt=""> <br>
          <br>
          <p><?php if (!empty($aboutusinfo->description)) echo $aboutusinfo->description; ?>.</p>
        </div>
        <div class="col-md-4 col-sm-6 ">
          <h4>Helpful Links</h4>
          <ul class="footer-links">
            <!-- <li><a id="footerlogin">Login</a></li> -->
            <li><a href="<?php echo site_url('netball/registerAccType');?>">Sign Up</a></li>
            <!-- <li><a href="#">My Account</a></li> -->
            <li><a href="<?php echo site_url('netball/pricing');?>">Pricing</a></li>
            <li><a href="<?php echo site_url('netball/privacy');?>">Privacy Policy</a></li>
            <li><a href="<?php echo site_url('netball/help_password');?>">Help Password</a></li>
          </ul>
          <ul class="footer-links">
            <li><a href="<?php echo site_url('netball/faq');?>">FAQ</a></li>
            <!-- <li><a href="#">Events</a></li> -->
            <!-- <li><a href="<?php echo site_url('netball/partner');?>">Our Partners</a></li> -->
            <li><a href="<?php echo site_url('netball/terms_condition');?>">Terms & Condition</a></li>
            <li><a href="<?php echo site_url('netball/working');?>">How It Works</a></li>
            <li><a href="<?php echo site_url('netball/contact');?>">Contact</a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-3  col-sm-12">
          <h4>Contact Us</h4>
          <div class="text-widget"> <span><?php if (!empty($contactusinfo->address)) echo $contactusinfo->address; ?></span> <br>
            Phone: <span><?php if (!empty($contactusinfo->phone)) echo $contactusinfo->phone; ?></span><br>
            E-Mail:<span> <a href="#"><?php if (!empty($contactusinfo->email)) echo $contactusinfo->email; ?></a> </span><br>
          </div>
          <ul class="social-icons margin-top-20">



             <?php
              $fade = "";
              $service = "";
              $index = 0;
              foreach ($sociallinkdatalist as $sociallinkdata) { 

                if($index == 0) {
                  $service = "facebook";
                  $fade = "icon-facebook";
                }
                else if($index == 1) {
                  $service = "twitter";
                  $fade = "icon-twitter";
                }
                else if($index == 2) {
                  $service = "gplus";
                  $fade = "icon-gplus";
                }
                else if($index == 3) {
                  $service = "vimeo";
                  $fade = "icon-vimeo";
                }
                 else if($index == 4) {
                 break;
                }
              ?>

                <li><a class="<?php echo $service; ?>" href="<?php if (!empty($sociallinkdata->link)) echo $sociallinkdata->link; ?>" target="new"><i class="<?php echo $fade; ?>"></i></a></li>
            <?php $index++; } ?>

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


<script>
    paypal.Button.render({

        env: 'sandbox', // sandbox | production

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create
        client: {
            sandbox:    'AWXVdwBotoO8HEpfc7-yeYJceYuSjtOGhcDFKtthXlBRVuf0_giYBYSk8Yqs49pL0rYXR4-iWbOThXgS',
            production: '<insert production client id>'
        },

        // Show the buyer a 'Pay Now' button in the checkout flow
        commit: true,

        // payment() is called when the button is clicked
        payment: function(data, actions) {
           var finalamount = $("#event_fee").val();
        
            // Make a call to the REST api to create the payment
            return actions.payment.create({
             //   payment: {
                    transactions: [
                        {
                            amount: { total: finalamount, currency: 'USD' }
                        }
                    ]
               // }
            });
        },

        // onAuthorize() is called when the buyer approves the payment
        onAuthorize: function(data, actions) {

            // Make a call to the REST api to execute the payment
            return actions.payment.execute().then(function (data) {
               console.log(data);

                var event_id = $("#event").val();
                var playerid = $("#playerid").val();
                var id = data.id;
                var cart = data.cart;
                var create_time = data.create_time;
                var payment_method = data.payer.payment_method;
                var email = data.payer.payer_info.email;
                var first_name = data.payer.payer_info.first_name;
                var middle_name = data.payer.payer_info.middle_name;
                var last_name = data.payer.payer_info.last_name;
                var country_code = data.payer.payer_info.country_code;
                var line1 = data.payer.payer_info.shipping_address.line1;
                var city = data.payer.payer_info.shipping_address.city;
                var state = data.payer.payer_info.shipping_address.state;
                var postal_code = data.payer.payer_info.shipping_address.postal_code;
                var country_code = data.payer.payer_info.shipping_address.country_code;
                var total = data.transactions[0].amount.total;
                var currency = data.transactions[0].amount.currency;

                console.log(event_id);
                console.log(playerid); 
                console.log(id);
                console.log(cart);
                console.log(create_time);
                console.log(payment_method);
                console.log(email);
                console.log(first_name);
                console.log(middle_name);
                console.log(last_name);
                console.log(country_code);
                console.log(line1);
                console.log(city);
                console.log(state);
                console.log(postal_code);
                console.log(country_code);
                console.log(total);
                console.log(currency);

                $.ajax({
                    type: 'POST',
                    url:'<?php echo base_url();?>index.php/netball/savetransaction',
                    data: {
                        'event_id': event_id,
                        'playerid': playerid,
                        'id': id,
                        'cart': cart,
                        'create_time': create_time,
                        'payment_method': payment_method,
                        'email': email,
                        'first_name': first_name,
                        'middle_name': middle_name,
                        'last_name': last_name,
                        'country_code': country_code,
                        'line1': line1,
                        'city': city,
                        'state': state,
                        'postal_code': postal_code,
                        'country_code': country_code,
                        'total': total,
                        'currency': currency,
                    },
                    success: function (data) {
                        window.alert('Payment Complete!');
                        //location.reload();
                    }
                });

            });
        }

    }, '#paypal-button-container');

</script>



<script type="text/javascript">            
    $(document).on('click', '#errorcheckout', function () {
        $('#errorcheckoutdata').css("display", "block");
    });
</script>


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

<link href="<?php echo base_url('assets/css/plugins/datedropper.css');?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/scripts/datedropper.js');?>"></script>
<script>
  $('#booking-date').dateDropper();
</script>

</body>
</html>



