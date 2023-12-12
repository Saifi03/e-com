<?php $this->load->view('site/include/header'); ?>

    <div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-10 ftco-animate">
            <?php foreach($bloglist as $list){ ?>
              <div class="row">
                <div class="col-md-12 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch d-md-flex">
                    <?php if(!empty($list->blog_image)){ ?>
                    <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url(); ?>uploads/productImage/<?php echo $list->blog_image; ?>');">
                    <?php }else{ ?>
                    <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url(); ?>assets/noimage.jpg');">
                    <?php } ?>
                    </a>
                    <div class="text d-block pl-md-4">
                      <div class="meta mb-3">
                        <div><a href="#"><?php echo $list->blog_date; ?></a></div>
                        <div><a href="#">Admin</a></div>
                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                      </div>
                      <h3 class="heading"><a href="#"><?php echo $list->blog_title; ?></a></h3>
                      <p><?php echo $list->blog_sm_desc; ?></p>
                      <p><a href="<?php echo base_url('SiteCon/blogDetail'); ?>" class="btn btn-primary py-2 px-3">Read more</a></p>
                    </div>
                  </div>
                </div>
            <?php } ?> 
						</div>
        
          </div> <!-- .col-md-8 -->
          
            

        </div>
      </div>
    </section> <!-- .section -->


  <?php $this->load->view('site/include/footer'); ?>