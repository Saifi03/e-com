<?php $this->load->view('site/include/header'); ?>

    <div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
	<?php $this->load->view('site/include/category'); ?>
    	<div class="container">
		
    		<div class="row">
			<?php foreach($productData as $product){ ?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
						<?php if($product->product_image != null){ ?>
    					<a href="<?php echo base_url(); ?>SiteCon/productDetail/<?php echo $product->product_url; ?>" class="img-prod"><img class="img-fluid" src="<?php echo base_url(); ?>uploads/productImage/<?php echo $product->product_image; ?>" style="width:100%; height: 15rem;" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
						<?php }else{ ?>
						<a href="<?php echo base_url(); ?>SiteCon/productDetail/<?php echo $product->product_url; ?>" class="img-prod"><img class="img-fluid" src="<?php echo base_url(); ?>assets/noimage.jpg" style="width:100%; height: 15rem;" alt="Colorlib Template">
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
			
    		
			<div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
						<?php echo $link; ?>
					</div>
				</div>
        	</div>
			
    	</div>
    </section>

    <?php $this->load->view('site/include/footer'); ?>