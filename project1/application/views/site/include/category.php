        
		
		
		<div class="container">   
           <div class="row justify-content-center">
    			<div class="col-md-12 mb-5 text-center">
				<?php $catList = $this->SiteModel->getCategoryList(); ?>
						<ul class="product-category">
						<li><a href="" class="active">All</a></li>
						<?php foreach($catList as $list){ ?>

							
							<li><a href="<?php echo base_url('SiteCon/categoryProduct/'); ?><?php echo $list->category_url; ?>"><?php echo $list->category_name; ?></a></li>

						<?php } ?>
						</ul>
    			</div>
            </div>
        </div>