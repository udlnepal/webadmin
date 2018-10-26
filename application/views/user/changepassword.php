  
    <?php echo $this->session->flashdata('verify_msg'); ?>



<?php $attributes = array("name" => "edituserform");
echo form_open("user/changepassword", $attributes);?>


<div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><h4 class="text-white">Change Password</h4></span>
                       <h5 class="text-danger"><?php echo $this->session->flashdata('error'); ?></h5>
                        <?php if(isset($msg)){
    echo "<span class='text-success'>".$msg."</span>";
}
if(isset($emsg)){
    echo "<span class='text-danger'>".$emsg."</span>";
}
?>

                    </div>
                    <!-- Form -->
                  <?php
echo form_open("user/changepassword");?>
                        <div class="row ">
                            <div class="col-12">
                                
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input class="form-control" name="old_password" id="old_password" placeholder="Old Password" type="password" />
                                </div>
                                <span style="color:red"><?php echo form_error('old_password'); ?></span>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input class="form-control" name="new_password" id="new_password" placeholder="New Password" type="password" />
                                </div>
                                <span style="color:red"><?php echo form_error('new_password'); ?></span>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input class="form-control" name="cnew_password" id="cnew_password" placeholder="Confirm New Password" type="password" />
                                </div>
                                <span style="color:red"><?php echo form_error('cnew_password'); ?></span>


                            </div>
                        </div>
                       <!--  <h5 class="text-white">New Member <a href="register" class="text-success">Register Here!</a></h5> -->
                        <p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
<p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Lost password?</button>
                                        <button class="btn btn-success float-right" type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                 <?php echo form_close(); ?>
                </div>
                <div id="recoverform">
                    <div class="text-center">
                        <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                    </div>
                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12" action="index.html">
                            <!-- email -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-20 p-t-20 border-top border-secondary">
                                <div class="col-12">
                                    <a class="btn btn-success" href="<?php echo base_url('user/login'); ?>" id="to-login" name="action">Back To Login</a>
                                    <button class="btn btn-info float-right" type="button" name="action">Recover</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
   
