<?php $this->load->view('site/include/header'); ?>

<?php
$productinfo = $productinfo;
$txnid = time();
$surl = $surl;
$furl = $furl;        
$key_id = "rzp_test_50rtRMdOFa6pPV";
$currency_code = $currency_code;            
$total = ($order_amount_with_tax *100);
$amount = $order_amount_with_tax;
$merchant_order_id = $order_id;
$card_holder_name = $order_firstname;
$email = $order_email;
$phone = $order_phone;
$name = "Test";
// live
$return_url = $return_url;
?>

    <main class="theia-exception">
        <div id="results">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                       <h4>Payment</h4>
                    </div>
                    <div class="col-md-6">
                       
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /results -->
<div class="container margin_60" style="transform: none;">
      <div class="row" style="transform: none;">
        <div class="col-xl-12 col-lg-12">
        <div class="success-main" style="text-align: center;">
            <i class="icon-money success-bg"></i>
            <h2>Total Payment: <i class="pricing-b">₹ <?php echo $amount; ?></i></h2>
            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>-->
             <form name="razorpay-form" id="razorpay-form" action="<?php echo $return_url; ?>" method="POST">
          <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
          <input type="hidden" name="merchant_order_id" id="merchant_order_id" value="<?php echo $merchant_order_id; ?>"/>
          <input type="hidden" name="merchant_trans_id" id="merchant_trans_id" value="<?php echo $txnid; ?>"/>
          <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="<?php echo $productinfo; ?>"/>
          <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?php echo $surl; ?>"/>
          <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?php echo $furl; ?>"/>
          <input type="hidden" name="card_holder_name_id" id="card_holder_name_id" value="<?php echo $card_holder_name; ?>"/>
          <input type="hidden" name="merchant_total" id="merchant_total" value="<?php echo $total; ?>"/>
          <input type="hidden" name="merchant_amount" id="merchant_amount" value="<?php echo $amount; ?>"/>
        </form>
         <input  id="submit-pay" type="submit" onclick="razorpaySubmit(this);" value="Pay Now" class="btn btn-primary" />
        </div>
        </div>
        
        <!-- /asdide -->
      </div>
      <!-- /row -->
    </div>
        <!-- /container -->
    </main>
    <!-- /main -->
<style>
    i.icon-money.success-bg {
color: #116fff;
}
.success-main {
padding: 70px 0;
}
.success-main h2 {
color: #116fff;
font-weight: 600;
font-style: normal;
}
</style>



<?php $this->load->view('site/include/footer'); ?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  var razorpay_options = {
    key: "<?php echo $key_id; ?>",
    amount: "<?php echo $total; ?>",
    name: "<?php echo $name; ?>",
    description: "Order # <?php echo $merchant_order_id; ?>",
    netbanking: true,
    currency: "<?php echo $currency_code; ?>",
    prefill: {
      name:"<?php echo $card_holder_name; ?>",
      email: "<?php echo $email; ?>",
      contact: "<?php echo $phone; ?>"
    },
    notes: {
      soolegal_order_id: "<?php echo $merchant_order_id; ?>",
    },
    handler: function (transaction) {
        document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
        document.getElementById('razorpay-form').submit();
    },
    "modal": {
        "ondismiss": function(){
            location.reload()
        }
    }
  };
  var razorpay_submit_btn, razorpay_instance;

  function razorpaySubmit(el){
    if(typeof Razorpay == 'undefined'){
      setTimeout(razorpaySubmit, 200);
      if(!razorpay_submit_btn && el){
        razorpay_submit_btn = el;
        el.disabled = true;
        el.value = 'Please wait...';  
      }
    } else {
      if(!razorpay_instance){
        razorpay_instance = new Razorpay(razorpay_options);
        if(razorpay_submit_btn){
          razorpay_submit_btn.disabled = false;
          razorpay_submit_btn.value = "Pay Now";
        }
      }
      razorpay_instance.open();
    }
  }  
</script>