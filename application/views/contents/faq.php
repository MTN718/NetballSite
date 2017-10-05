<div class="container">
     <?php foreach ($faqsinfolist as $faqsinfo) { ?>
        <div class="panel panel-default ">
            <div class="panel-heading"  style="background-color:#F2642A">
              <h4>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php if (!empty($faqsinfo->faq_id)) echo $faqsinfo->faq_id; ?>" style="color:#fff">
                  <?php if (!empty($faqsinfo->question)) echo $faqsinfo->question; ?>
                </a></h4>
              
            </div>
            <div id="<?php if (!empty($faqsinfo->faq_id)) echo $faqsinfo->faq_id; ?>" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-12" style="background:#fff;">
                        <p>
                          <?php if (!empty($faqsinfo->answer)) echo $faqsinfo->answer; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?> 
</div>