<?php $this->load->view('admin/include/header'); ?>
<div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Edit List</h6>
                        <a href="">Show All</a>
                    </div>
                    <div  class="d-flex">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('AdminCon/addProduct'); ?>">Add</a>
                        &nbsp; <a class="btn btn-sm btn-primary" href="<?php echo base_url('AdminCon/productList'); ?>">List</a>   
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <form enctype="multipart/form-data" method="post" action="<?php echo base_url('AdminCon/submitEditProduct'); ?>">
                                <input type="hidden" name="product_id" value="<?php echo $editData->product_id; ?>">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" name="product_name" value="<?php echo $editData->product_name; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('product_name'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Image</label>
                                    <input type="file" name="product_image" value="<?php echo $editData->product_image; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('product_image'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">MRP</label>
                                    <input type="text" name="product_mrp" value="<?php echo $editData->product_mrp; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('product_mrp'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Price</label>
                                    <input type="text" name="product_price" value="<?php echo $editData->product_price; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('product_price'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Per Price</label>
                                    <input type="text" name="product_per_price" value="<?php echo $editData->product_per_price; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('product_per_price'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Quantity</label>
                                    <input type="text" name="product_qty" value="<?php echo $editData->product_qty; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('product_qty'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Per Quantity</label>
                                    <input type="text" name="product_per_qty" value="<?php echo $editData->product_per_qty; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('product_per_qty'); ?>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Category</label>
                                    <select class="form-control" name="product_category"> 
                                        <option value="">Select Category</option>
                                        <?php foreach($categorylist as $CatList){ ?>
                                            <option value="<?php echo $CatList->category_id; ?>"><?php echo $CatList->category_name; ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('product_category'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Stock</label>
                                    <select class="form-control" name="product_stock"> 
                                        <option value="1" <?php if($editData->product_stock == 1){ echo "Selected"; }else{ } ?> >In Stock</option>
                                        <option value="0" <?php if($editData->product_stock == 0){ echo "Selected"; }else{ } ?>>Out Of Stock</option>
                                    </select>
                                    <?php echo form_error('product_stock'); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Description</label>
                                    <textarea rows="4" cols="100" class="form-control" value="<?php echo $editData->product_description; ?>" name="product_description"></textarea>
                                    <?php echo form_error('product_description'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Sm Description</label>
                                    <input type="text" name="product_sm_desc" value="<?php echo $editData->product_sm_desc; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('product_sm_desc'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Meta Title</label>
                                    <input type="text" name="product_meta_title" value="<?php echo $editData->product_meta_title; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('product_meta_title'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Meta Keyword</label>
                                    <input type="text" name="product_meta_keyword" value="<?php echo $editData->product_meta_keyword; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('product_meta_keyword'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Meta Description</label>
                                    <input type="text" name="product_meta_desc" value="<?php echo $editData->product_meta_desc; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('product_meta_desc'); ?>
                                </div>
                               
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<?php $this->load->view('admin/include/footer'); ?>