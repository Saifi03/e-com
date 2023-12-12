<?php  $this->load->view('admin/include/header'); ?>

<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">User List</h6>
                        <a href="">Show All</a>
                    </div>
                    
                    <div class="table-responsive table-hover">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">S.No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; foreach($userList as $list){ $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $list->name; ?></td>
                                    <td><?php echo $list->email; ?></td>
                                    <td><?php echo $list->mobile_no; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
</div>

<?php  $this->load->view('admin/include/footer'); ?>