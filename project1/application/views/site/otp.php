<?php $this->load->view('site/include/header'); ?>


<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <?php if($this->session->flashdata('error_msg')!=null){ ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('error_msg'); ?>
                    </div>
                <?php } ?>
                    <form method="post" action="<?php echo base_url('SiteCon/submitOTP'); ?>">
                        <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.html" class="">
                                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>OTP Verify</h3>
                                </a>
                                <h3>Sign Up</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" value="<?php echo $this->input->post('mobile_no'); ?>" class="form-control" name="mobile_no" id="floatingInput" placeholder="91+ XXXXXX1022">
                            </div>

                            <div class="form-floating mb-3">
                                <label for="floatingInput">OTP</label>
                                <input type="number" value="<?php echo set_value('otp'); ?>" class="form-control" name="otp" id="floatingInput" placeholder="OTP">
                                <?php echo form_error('otp'); ?>
                            </div>
                        
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">OTP Verify</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php $this->load->view('site/include/footer'); ?>