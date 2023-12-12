<?php $this->load->view('site/include/header'); ?>

    <div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

	<?php if(!empty($this->cart->contents())){?>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
							
							<?php $total=0; foreach($this->cart->contents() as $items){ ?>
								<form method="post" action="<?php echo base_url('SiteCon/updateCart'); ?>">
						      <tr class="text-center">
								<?php $productData=$this->SiteModel->getProductDataByID($items['id']); ?>
						        <td class="product-remove"><a href="<?php echo base_url(); ?>SiteCon/deletecartItem/<?php echo $items['rowid']; ?>"><span class="ion-ios-close"></span></a></td>
						        <?php if(!empty($productData->product_image)){ ?>
						        <td class="image-prod"><div class="img" style="background-image: url(<?php echo base_url(); ?>uploads/productImage/<?php echo $productData->product_image; ?>)"></div></td>
								<?php }else{ ?>
								<td class="image-prod"><div class="img" style="background-image: url(<?php echo base_url(); ?>assets/noimage.jpg)"></div></td>
						        <?php } ?>
						        <td class="product-name">
						        	<h3><?php echo $items['name'] ?></h3>
						        	<p>It is fresh and very best in quality.</p>
						        </td>
						        <input type="hidden" name="rowid" value="<?php echo $items['rowid']; ?>">
						        <td class="price">Rs.<?php echo $productData->product_price; ?>/-</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="number" name="quantity" min="1" oninput="validity.valid||(value='');" class="quantity form-control input-number" value="<?php echo $items['qty']; ?>" onchange="this.form.submit();" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">Rs.<?php echo $productData->product_price * $items['qty']; ?>/-</td>
						      </tr><!-- END TR-->
								<?php $total +=$productData->product_price * $items['qty']; ?>
							  </form>
							<?php } ?>

						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-around">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
    			</div>
    			
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>Rs.<?php echo $total; ?>/-</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$3.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>Rs.<?php echo $total; ?>/-</span>
    					</p>
    				</div>
					<?php $sessionData = $this->session->userdata('user_logged-in'); 
					if(!empty($sessionData)){ ?>
    					<p><a href="<?php echo base_url('checkout.html'); ?>" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
					<?php }else{ ?>
						<p><a href="<?php echo base_url('login.html'); ?>" class="btn btn-primary py-3 px-4">Proceed to Login</a></p>
					<?php } ?>
    			</div>
    		</div>
			</div>
		</section>
							<?php }else{ ?>
									
									<div class="conatainer mb-5">
										<div class="row">
											<div class="col-md-12">
											<h2 style="text-align:center; ">Cart Empty</h2>
											</div>
										</div>
									</div>
							<?php } ?>

							

    <?php $this->load->view('site/include/footer'); ?>