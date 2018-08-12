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
                                    <li class="breadcrumb-item active" aria-current="page">Slider Setup</li>
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
                <!-- hidden edit field-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-lg-12">
                                    <h4>Edit Slider</h4>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-lg-12">
                <!-- Edit Form -->
                <?php echo form_open('slider_setup/edit/'.$sls['ss_id']); ?>
                <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Primary Image:</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" value="" required="" name="userfile" placeholder="Select Image">
                </div>               
            </div>

            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Primary Title:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="" name="primary_slider_title" value="<?php echo $sls['primary_slider_title'] ?>">
                </div>               
            </div>
             <div class="form-group row">
                <label for="sec_slider_title" class="col-sm-3 text-left control-label col-form-label">Secondary Title:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="sec_slider_title" value="<?php echo $sls['sec_slider_title'] ?>">
                </div>               
            </div>
            <div class="form-group row">
                <label for="slider_text" class="col-sm-3 text-left control-label col-form-label">Slider Text:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="" name="slider_text" value="<?php echo $sls['slider_text'] ?>">
                </div>               
            </div>
            <div class="form-group row">
                <label for="slider_btn_text" class="col-sm-3 text-left control-label col-form-label">Slider Button Text:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="" name="slider_btn_text" value="<?php echo $sls['slider_btn_text'] ?>">
                </div>               
            </div>
            <div class="form-group row">
                <label for="slider_btn_link" class="col-sm-3 text-left control-label col-form-label">Slider Button Link:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="" name="slider_btn_link" value="<?php echo $sls['slider_btn_link'] ?>">
                </div>               
            </div>
            <div class="form-group row text-right">
              <div class="col-lg-12"><a href="#" class="btn btn-info">Update</a></div>
            </div>
            <?php echo form_close(); ?>
                <!-- Edit Form -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- hidden edit field -->
            	<div class="row">
            	<div class="col-md-12">
            		<div class="card">
                            <div class="card-body">
                                <div class="col-lg-12">
                                    
                                        <h4 class="card-title">Slider Setup</h4>
                                   
                                    <div class="clearfix"></div>
                                    <div class="row">
                                    	<div class="col-lg-12 text-right">
                                    		<button class="btn btn-success" data-toggle="modal" data-target="#Imageupload">Add New</button>
                                    	</div>
                                    <div class="col-lg-12">
                                    	<table class="table table-bordere table-striped">
                                    		<tr><th>Image</th><th>Text Content</th></th><th>Action</th></tr>
                                    		<?php foreach($slider_setup as $sls): ?>
                                    		<tr><td><img style="height: 75px; width:100px; " src="assets/img/hero-slider/<?php echo $sls['slider_img_name'] ?>"></td>
                                            <td>
                                            Primary Title: <b class="text-bold"><?php echo $sls['primary_slider_title'] ?></b><br>
                                            Secondary Title: <b class="text-warning"><?php echo $sls['sec_slider_title']; ?></b><br>
                                            Content: <?php echo $sls['slider_text']; ?><br>
                                            Button Text: <?php echo $sls['slider_btn_text']; ?><br> Button Link: <?php echo $sls['slider_btn_link']; ?>   
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('slider_setup/edit/'.$sls['ss_id']); ?>" class="btn btn-warning">Edit</a>
                                                &nbsp;&nbsp;<a href="<?php echo base_url('slider_setup/delete_slider/'.$sls['ss_id']); ?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td></tr>
                                    	<?php endforeach; ?>
                                    	</table>

                                    </div>
                                    </div>	
                                </div>
                            </div>
                    </div>
            	</div>
            	 </div>
            </div>

 </div>

 <?php echo form_open_multipart('slider_setup/do_upload');?>
 <div class="modal fade" id="Imageupload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
       
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Add Slider</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
      </div>
      <div class="modal-body">
       
            
             <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Primary Image:</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" value="" required="" name="userfile" placeholder="Select Image">
                </div>               
            </div>

            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Primary Title:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="" name="primary_slider_title" placeholder="Enter Primary Title">
                </div>               
            </div>
             <div class="form-group row">
                <label for="sec_slider_title" class="col-sm-3 text-left control-label col-form-label">Secondary Title:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="sec_slider_title" placeholder="Enter Secondary Title">
                </div>               
            </div>
            <div class="form-group row">
                <label for="slider_text" class="col-sm-3 text-left control-label col-form-label">Slider Text:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="" name="slider_text" placeholder="Description About Slider">
                </div>               
            </div>
            <div class="form-group row">
                <label for="slider_btn_text" class="col-sm-3 text-left control-label col-form-label">Slider Button Text:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="" name="slider_btn_text" placeholder="Button Text">
                </div>               
            </div>
            <div class="form-group row">
                <label for="slider_btn_link" class="col-sm-3 text-left control-label col-form-label">Slider Button Link:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="" name="slider_btn_link" placeholder="Button Text">
                </div>               
            </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>