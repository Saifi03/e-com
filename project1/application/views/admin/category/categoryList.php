<?php  $this->load->view('admin/include/header'); ?>

<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Category List</h6>
                        <a href="">Show All</a>
                        <?php if($this->session->flashdata('error_msg')!= null){ ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('error_msg'); ?>
                                </div>
                        <?php } ?>
                    </div>
                    <div  class="d-flex">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('AdminCon/addCategory'); ?>">Add</a>
                        &nbsp; <a class="btn btn-sm btn-primary" href="<?php echo base_url('AdminCon/categoryList'); ?>">List</a>   
                    </div>
                    <div class="table-responsive table-hover">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">S.No.</th>
                                    <th scope="col">Category URL</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=0; foreach($categorylist as $list){ $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $list->category_url; ?></td>
                                    <td><?php echo $list->category_name; ?></td>
                                    <td>
                                        <?php if($list->status == 1){ ?>
                                            <a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>AdminCon/statusCategory/<?php echo $list->category_id; ?>/0">InActive</a>
                                        <?php }else{ ?>
                                            <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>AdminCon/statusCategory/<?php echo $list->category_id; ?>/1">Active</a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url(''); ?>AdminCon/editCategory/<?php echo $list->category_id; ?>" class="btn btn-sm btn-primary">Edit</a>
                                    </td>
                                </tr>
                            <?php } ?>  
                            </tbody>
                        </table>
                    </div>
                </div>
</div>

<?php  $this->load->view('admin/include/footer'); ?>