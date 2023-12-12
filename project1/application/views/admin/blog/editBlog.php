<?php $this->load->view('admin/include/header'); ?>
<div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Edit List</h6>
                        <a href="">Show All</a>
                    </div>
                    <div  class="d-flex">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('AdminCon/addBlog'); ?>">Add</a>
                        &nbsp; <a class="btn btn-sm btn-primary" href="<?php echo base_url('AdminCon/blogList'); ?>">List</a>   
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('AdminCon/editBlogSubmit'); ?>">
                            <input type="hidden" class="form-control" name="blog_id" value="<?php echo $editData->blog_id; ?>">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Blog Title</label>
                                    <input type="text" name="blog_title" value="<?php echo $editData->blog_title; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('blog_title'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Blog Image</label>
                                    <input type="file" name="blog_image" value="<?php echo $editData->blog_image; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('blog_image'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Blog Para</label>
                                    <textarea rows="4" cols="100"  value="<?php echo $editData->blog_para; ?>" class="form-control" name="blog_para"></textarea>
                                    <?php echo form_error('blog_para'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Blog Sm_Desc</label>
                                    <input type="text" name="blog_sm_desc" value="<?php echo $editData->blog_sm_desc; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('blog_sm_desc'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Blog Date</label>
                                    <input type="text" name="blog_date" value="<?php echo $editData->blog_date; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <?php echo form_error('blog_date'); ?>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<?php $this->load->view('admin/include/footer'); ?>