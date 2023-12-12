<?php $this->load->view('site/include/header'); ?>


<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form method="post" action="<?php echo base_url('SiteCon/submitLogin'); ?>">
                        <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.html" class="">
                                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>LOG IN</h3>
                                </a>
                                <h3>Sign Up</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" value="<?php echo set_value('mobile_no'); ?>" class="form-control" name="mobile_no" id="floatingInput" placeholder="91+ XXXXXX1022">
                                <?php echo form_error('mobile_no'); ?>
                            </div>
                        
                            <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div> -->
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                            <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php $this->load->view('site/include/footer'); ?>