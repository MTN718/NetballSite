<div class="dashboard-content">

    <!-- Titlebar -->
    <div id="titlebar">
      <div class="row">
        <div class="col-md-12">
          <h2>Transaction History</h2>
          <!-- Breadcrumbs -->
          <nav id="breadcrumbs">
            <ul>
              <li><a href="<?php echo site_url('admin/index');?>">Home</a></li>
              <li><a href="#">Transaction History</a></li>
              
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

          

         <div class="add-listing-headline">
              <h3><i class="sl sl-icon-plus"></i> Account Details</h3>
            </div>
   
          <table class="basic-table">
          <tbody>
         <tr>
          <th> Transaction Id </th>
          <th>Account Name</th>
          <th>Account Number</th>
           <th>Amount</th>
          <th>Bank/Branch Name</th>
          <th> Transaction Date </th>
          <th> Action </th>
         </tr>
      <?php foreach ($results as $transactioninfo) { ?>
        <tr>
          <td> <?php if (!empty($transactioninfo->transaction_id)) echo $transactioninfo->transaction_id; ?> </td>
          <td> <?php if (!empty($transactioninfo->account_holder_name)) echo $transactioninfo->account_holder_name; ?> </td>
          <td> <?php if (!empty($transactioninfo->bank_account_number)) echo $transactioninfo->bank_account_number; ?> </td>
          <td> <?php if (!empty($transactioninfo->amount)) echo $transactioninfo->amount; ?> </td>
          <td> <?php if (!empty($transactioninfo->bank_name)) echo $transactioninfo->bank_name; ?> </td>
          <td> <?php if (!empty($transactioninfo->trasaction_date)) echo $transactioninfo->trasaction_date; ?> </td>
           <td style="padding: 15px 0px;"> <a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a></td>
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
              <?php foreach ($links as $link) {
            echo "<li>". $link."</li>";
            } ?>
            </ul>
          </nav>
      </div>
      