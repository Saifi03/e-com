<?php $this->load->view('admin/include/header'); ?>
<div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Category List</h6>
                        <a href="">Show All</a>
                    </div>
                    <div  class="d-flex">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('AdminCon/addCategory'); ?>">Add</a>
                        &nbsp; <a class="btn btn-sm btn-primary" href="<?php echo base_url('AdminCon/categoryList'); ?>">List</a>   
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <form method="post" action="<?php echo base_url('AdminCon/submitCategory'); ?>">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Main Category</label>
                                    <select class="form-control" name="category_parent_id"> 
                                        <option value="0">Main Category</option>
                                        <?php foreach($parentCategorylist as $list){ ?>
                                            <option value="<?php $list->category_id; ?><?php $list->category_name; ?>"></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Category Description</label>
                                    <textarea rows="4" cols="100" class="form-control" name="category_description"></textarea>
                                </div>
                               
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<?php $this->load->view('admin/include/footer'); ?>