<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo base_url(); ?>admin_assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?php echo base_url('AdminCon/dashboard'); ?>" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <a href="<?php echo base_url('AdminCon/userList'); ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>User List</a>
                    <a href="<?php echo base_url('AdminCon/categoryList'); ?>" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Category List</a>
                    <a href="<?php echo base_url('AdminCon/productList'); ?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Product List</a>
                    <a href="<?php echo base_url('AdminCon/couponList'); ?>" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Coupon List</a>
                    <a href="<?php echo base_url('AdminCon/orderList'); ?>" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Order List</a>
                    <a href="<?php echo base_url('AdminCon/blogList'); ?>" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Blog List</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->