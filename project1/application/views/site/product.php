<?php $this->load->view('site/include/header'); ?>

    <div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('SiteCon/index'); ?>">Home</a></span> <span class="mr-2"><a href="index-2.html">Product</a></span> <span>Product Page</span></p>
            <h1 class="mb-0 bread"><?php echo $productData->product_name; ?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">

    		<div class="row">
			<?php if(!empty($productData->product_image)){ ?>
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/product-1.jpg" class="image-popup"><img src="<?php echo base_url();  ?>uploads/productImage/<?php echo $productData->product_image; ?>" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
			<?php }else{ ?>
				<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/product-1.jpg" class="image-popup"><img src="<?php echo base_url();  ?>assets/noimage.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
			<?php } ?>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo $productData->product_name; ?></h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;"><p><?php echo $productData->product_qty; ?></p><span style="color: #bbb;">Sold</span></a>
							</p>
						</div>
    				<p class="price"><span><?php echo $productData->product_price; ?></span></p>
    				<p><?php echo $productData->product_description; ?>
						</p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="" id="" class="form-control">
	                  	<option value="">Small</option>
	                    <option value="">Medium</option>
	                    <option value="">Large</option>
	                    <option value="">Extra Large</option>
	                  </select>
	                </div>
		            </div>
							</div>
							<div class="w-100"></div>
							
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;">600 kg available</p>
	          	</div>
          	</div>
          	<p><a href="<?php echo base_url('SiteCon/addToCart/'); ?><?php echo $productData->product_id; ?>" class="btn btn-black py-3 px-5">Add to Cart</a></p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Products</span>
            <h2 class="mb-4">Related Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
				<?php $realtedproduct = $this->SiteModel->getRelatedProductById($productData->category_id,$productData->product_id); ?>
			<?php foreach($realtedproduct as $product){ ?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
						<?php if($product->product_image != null){ ?>
    					<a href="<?php echo base_url(); ?>SiteCon/productDetail/<?php echo $product->product_url; ?>" class="img-prod"><img class="img-fluid" src="<?php echo base_url(); ?>uploads/productImage/<?php echo $product->product_image; ?>" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
						<?php }else{ ?>
						<a href="<?php echo base_url(); ?><?php echo $product->product_url; ?>" class="img-prod"><img class="img-fluid" src="<?php echo base_url(); ?>assets/noimage.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
						<?php } ?>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?php echo $product->product_name; ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">Rs.<?php echo $product->product_mrp; ?>/-</span><span class="price-sale">Rs.<?php echo $product->product_price; ?>/-</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="<?php echo base_url('SiteCon/addToCart/'); ?><?php echo $product->product_id; ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
				<?php } ?>
    		</div>
    	</div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php $this->load->view('site/include/footer'); ?>