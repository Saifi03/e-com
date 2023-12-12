<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#3bb34bb8">
    <title><?php if($meta_title != null){ echo $meta_title;}else{echo 'eCom';} ?></title>
    <meta name="description" content="<?php if($meta_description != null){ echo $meta_description;}else{echo 'eCom';} ?>">
    <meta name="keywords" content="<?php if($meta_description != null){ echo $meta_description;}else{echo 'eCom';} ?>">
    <meta name="author" content="">
    <link rel="canonical" href="<?php if($url != null){ echo $url;}else{echo 'eCom';} ?>" />
    
    <link rel="shortcut icon" href="" type="image/x-png">
    <link rel="icon" href="" type="image/x-png">
    
    <meta property="og:title" content="<?php if($meta_title != null){ echo $meta_title;}else{echo 'eCom';} ?>"/>
    <meta property="og:site_name" content=""/>
    <meta property="og:url" content="<?php if($url != null){ echo $url;}else{echo 'eCom';} ?>"/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content="business"/>
    <meta property="og:image" content=""/>

    
    <meta property="al:android:url" content="">
    <meta property="al:android:package" content="">
    <meta property="al:android:app_name" content="">
    <meta property="al:web:url" content="" />
    
    <meta name="twitter:card" content="" />
    <meta name="twitter:description" content=""/>
    <meta name="twitter:title" content="<?php if($meta_title != null){ echo $meta_title;}else{echo 'eCom';} ?>" />
    <meta name="twitter:site" content="<?php if($url != null){ echo $url;}else{echo 'eCom';} ?>" />
    <meta name="twitter:creator" content="" />
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="https://kit.fontawesome.com/7584152682.js" crossorigin="anonymous"></script>
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index-2.html">Vegefoods</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo base_url('SiteCon/index'); ?>" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="<?php echo base_url('SiteCon/shop'); ?>">Shop</a>
              	<a class="dropdown-item" href="wishlist.html">Wishlist</a>
                <a class="dropdown-item" href="<?php echo base_url('SiteCon/product'); ?>">Single Product</a>
                <a class="dropdown-item" href="<?php echo base_url('SiteCon/cart'); ?>">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('SiteCon/blog'); ?>" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="<?php echo base_url('SiteCon/cart'); ?>" class="nav-link"><span class="icon-shopping_cart"></span><?php echo count($this->cart->contents()); ?></a></li>
            

              <?php $this->load->view('site/include/searchForm'); ?>
                <li class="nav-item d-flex justify-center">
                  <?php 
                  $sessionData = $this->session->userdata('user_logged-in');
                  if(!empty($sessionData)){?>
                    <a href="<?php echo base_url('SiteCon/logOut'); ?>" class="nav-link" style="color: #369b5d;">LogOut</i></a>
                    <a href="<?php echo base_url('SiteCon/dashboard'); ?>" class="nav-link" style="color: #369b5d;"><p>MyAccount</p></i></a>
                  <?php }else{ ?>
                    <a href="<?php echo base_url('SiteCon/login'); ?>" class="nav-link" style="color: #369b5d;">LogIn</i></a>
                  <?php } ?>
                  </li>
          
	        </ul>
	      </div>
        <div class="login">

        </div>
	    </div>
	  </nav>
    <!-- END nav -->