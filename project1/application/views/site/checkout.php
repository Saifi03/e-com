<?php $this->load->view('site/include/header'); ?>


<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2" style="font-weight: 900;  background-color: green;"><a href="<?php echo base_url(); ?>"><b>Home</b></a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">

			<form method="post" action="<?php echo base_url('SiteCon/orderNow'); ?>" class="billing-form">
				<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="firstname">Full Name</label>
	                  <input type="text" name="order_name" class="form-control" placeholder="">
	                </div>
	              </div>
	              
                <div class="w-100"></div>
		            
		            <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" name="order_address" class="form-control" placeholder="House number and street name">
	                </div>
		            </div>
		            
		            
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" name="order_phone" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" name="order_email" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	
                </div>
	            </div>
	        <!-- END -->
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
						  <?php $total=0; foreach($this->cart->contents() as $items){ ?>
							<?php $productData=$this->SiteModel->getProductDataByID($items['id']); ?>
	          					<p class="d-flex">
		    						<span><?php echo $items['name'] ?> </span>
						
									<span><?php echo $productData->product_price * $items['qty']; ?></span>
		    					</p>
								
								<?php $total +=$productData->product_price * $items['qty']; ?>
		    					
							

							<?php } ?>
							<p class="d-flex">
							<input type="hidden" name="total" value="<?php echo $total; ?>">
		    						<span><b>Payable Amount</b></span>
						
									<span><b><?php echo $total; ?></b></span>
		    					</p>
								</div>
	          	</div>
	          	<div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="payment_type" value="0" class="mr-2"> COD</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="payment_type" value="1" class="mr-2"> Online Payment</label>
											</div>
										</div>
									</div>
							
									<p><button type="submit" class="btn btn-primary py-3 px-4">place a order</button></p>
								</div>
								</form>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->



<?php $this->load->view('site/include/footer'); ?>