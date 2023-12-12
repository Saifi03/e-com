<?php $this->load->view('site/include/header'); ?>
<style type="text/css">
        div#confirm {
    text-align: center;
}
.container.margin_120 {
    margin: 100px auto;
}


    </style>
        <main>
        <div class="container margin_120">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="confirm"  class="confirm-style">
                        <div class="icon icon--order-success svg add_bottom_15">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                                <g fill="none" stroke="#8EC343" stroke-width="2">
                                    <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                    <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                </g>
                            </svg>
                        </div>
                    <h2>Order Placed</h2>
                    
                    <p>"Hi <?php echo $orderData->order_name; ?>, <br>
                    Thanks for order with Ecom, Your Order No.: <?php echo $orderData->order_unique_id; ?><br>
<a href="<?php echo base_url(); ?>" class="btn-normal btn mt-3">Continue Shopping</a> <a href="<?php echo base_url('order-history.html'); ?>" class="btn-normal btn mt-3">View Order History</a></p>
                
                
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->
    
    <?php $this->load->view('site/include/footer'); ?>