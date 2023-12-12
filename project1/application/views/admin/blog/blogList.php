<?php  $this->load->view('admin/include/header'); ?>

<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Blog List</h6>
                        <a href="">Show All</a>
                        
                                <!-- <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('error_msg'); ?>
                                </div> -->
                        
                    </div>
                    <div  class="d-flex mb-2">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('AdminCon/addBlog'); ?>">Add</a>
                        &nbsp; <a class="btn btn-sm btn-primary" href="<?php echo base_url('AdminCon/blogList'); ?>">List</a>   
                    </div>
                    <div class="table-responsive table-hover">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">S.No.</th>
                                    <th scope="col">Blog Image</th>
                                    <th scope="col">Blog Title</th>
                                    <th scope="col">Blog Sm_Desc</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=0; foreach($bloglist as $blog){ $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><img src="<?php echo base_url('uploads/productImage/'); ?><?php echo $blog->blog_image; ?>" width="30%"></td>
                                    <td><?php echo $blog->blog_title; ?></td>
                                    <td><?php echo $blog->blog_sm_desc; ?></td>
                                    <td>
                                    <?php echo $blog->status; ?>
                                            <!-- <a class="btn btn-sm btn-danger" href="">InActive</a>
                                        
                                            <a class="btn btn-sm btn-primary" href="">Active</a> -->
                                        
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('AdminCon/editBlog/'); ?><?php echo $blog->blog_id; ?>" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="<?php echo base_url('AdminCon/deleteblog/'); ?><?php echo $blog->blog_id; ?>" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
</div>

<?php  $this->load->view('admin/include/footer'); ?>