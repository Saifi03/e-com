<?php  $this->load->view('admin/include/header'); ?>

<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Coupon List</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">S.No.</th>
                                    <th scope="col">Coupon Title</th>
                                    <th scope="col">Coupon Code</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; foreach($couponList as $list){ $i++ ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $list->coupon_title ?></td>
                                    <td><?php echo $list->coupon_code ?></td>
                                    <td><?php echo $list->status ?></td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Details</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
</div>

<?php  $this->load->view('admin/include/footer'); ?>