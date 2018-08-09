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
                                    		<tr><th>S.No.</th><th></th><th>Action</th></tr>
                                    		<?php foreach($slider_setup as $sls): ?>
                                    		<tr><td>1</td><td><img style="height: 75px;" src="assets/img/hero-slider/<?php echo $sls['slider_img_name'] ?>"></td><td><a href="#" class="btn btn-warning">Edit</a>&nbsp;&nbsp;<a href="#" class="btn btn-danger">Delete</a></td></tr>
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Upload Image</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
      </div>
      <div class="modal-body">
        <input type="file"  name="userfile" value="upload">
        
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">Upload</button>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>