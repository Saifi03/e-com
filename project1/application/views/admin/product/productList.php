<?php  $this->load->view('admin/include/header'); ?>

<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Product List</h6>
                        <a href="">Show All</a>
                    </div>
                    <div  class="d-flex pb-2">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('AdminCon/addProduct'); ?>">Add</a>
                        &nbsp; <a class="btn btn-sm btn-primary" href="<?php echo base_url('AdminCon/productList'); ?>">List</a>   
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">S.No.</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">MRP</th>
                                    <th scope="col">Sale Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; foreach($productList as $product){ $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <img  style="width: 100px;" src="<?php echo base_url('uploads/productImage/'); ?><?php echo $product->product_image; ?>">
                                    </td>
                                    <td><?php echo $product->product_name; ?></td>
                                    <td><?php echo $product->product_mrp; ?></td>
                                    <td><?php echo $product->product_price; ?></td>
                                    <td><?php echo $product->product_qty; ?></td>
                                    <td>
                                        <?php if($product->product_status == 1 ){ ?>
                                        <a href="<?php echo base_url('AdminCon/productStatus/'); ?><?php echo $product->product_id; ?>/0" class="btn btn-sm btn-danger">UnActive</a>
                                        <?php }else{ ?>
                                        <a href="<?php echo base_url('AdminCon/productStatus/'); ?><?php echo $product->product_id; ?>/1" class="btn btn-sm btn-primary">Active</a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('AdminCon/editProduct/'); ?><?php echo $product->product_id; ?>" class="btn btn-sm btn-primary">Edit</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
</div>

<?php  $this->load->view('admin/include/footer'); ?>