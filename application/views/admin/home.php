<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"></h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="admin">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Header Setup</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
              
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Header Setup</h4>
                                        <h5 class="card-subtitle">Setup Main Header Elements Like Logo, Site Title and Header Left Menu</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-8">
                                         <?php //$upload_data['filename']="Empty";?>

                                                <?php echo form_open_multipart('admin/do_upload');?>
                                       <div class="form-group row">
                                            <label class="col-md-3">Upload Logo:</label>
                                            <div class="col-md-7">
                                               
                                                <div class="custom-file">
                                                    <input type="file" name="userfile" class="form-control" id="validatedCustomFile" required="" placeholder="file" value="upload">
                                                  <!--   <label class="custom-file-label" for="validatedCustomFile">Choose file...</label> -->


                                                    <div class="text-success">
                                                   
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-2 text-right"><button class="btn btn-info">Update</button></div>
                                            <?php echo form_close(); ?>

                                        </div>
                                        <?php echo form_open('admin/set_site_title'); ?>
                                        <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-left control-label col-form-label">Site Title:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control"  name="site_title">
                                        </div>
                                        <div class="col-sm-2 text-right"><button class="btn btn-info">Update</button></div>
                                    </div>
                                    <?php echo form_close(); ?>

                                    </div>
                                    
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
   
        </div>
            