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
                                    		<tr><th>Image</th><th>Text Content</th></th><th>Action</th></tr>
                                    		<?php foreach($slider_setup as $sls): ?>
                                    		<tr><td><img style="height: 75px; width:100px; " src="../assets/img/hero-slider/<?php echo $sls['slider_img_name'] ?>"></td>
                                            <td>
                                            Primary Title: <b class="text-bold"><?php echo $sls['primary_slider_title'] ?></b><br>
                                            Secondary Title: <b class="text-warning"><?php echo $sls['sec_slider_title']; ?></b><br>
                                            Content: <?php echo $sls['slider_text']; ?><br>
                                            Button Text: <?php echo $sls['slider_btn_text']; ?><br> Button Link: <?php echo $sls['slider_btn_link']; ?>   
                                            </td>
                                            <td>
                                                <a class="btn btn-warning edit_btn_slider" data-toggle="modal" data-target="#editModal" data-id="<?php echo $sls['ss_id']; ?>" data-primary_slider_title="<?php echo $sls['primary_slider_title'];?>" data-sec_slider_title="<?php  echo $sls['sec_slider_title']; ?>" data-slider_text="<?php echo $sls['slider_text']; ?>" data-slider_btn_text="<?php echo $sls['slider_btn_text']; ?>" data-slider_btn_link="<?php echo $sls['slider_btn_link']; ?>">Edit</a>
                                                &nbsp;&nbsp;<a href="<?php echo base_url('admin/slider_setup/delete_slider/'.$sls['ss_id']); ?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td></tr>
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

 <?php echo form_open_multipart('admin/slider_setup/do_upload');?>
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

<script>
    $(function(){
        $(document).on("click", ".edit_btn_slider", function () {
           
            var ss_id = $(this).data('id');
            var primary_slider_title= $(this).data('primary_slider_title');
            var sec_slider_title=$(this).data('sec_slider_title');
            var slider_text =$(this).data('slider_text');
            var slider_btn_text =$(this).data('slider_btn_text');
            var slider_btn_link =$(this).data('slider_btn_link');
            

            $(".modal-body .form-group #primary_slider_title").val(primary_slider_title);
            $(".modal-body .form-group #sec_slider_title").val(sec_slider_title);            
            $(".modal-body .form-group #slider_text").val(slider_text);
            $(".modal-body .form-group #slider_btn_text").val(slider_btn_text);
            $(".modal-body .form-group #slider_btn_link").val(slider_btn_link);
            $(".edit_Slider_save form").attr('action','slider_setup/edit/'+ss_id);            
            $('#edithlm').modal('show');
            
        });
});
</script>


<!--Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg edit_Slider_save" role="document">
    <?php echo form_open_multipart('admin/slider_setup/edit/'.$sls['ss_id']); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit Slider</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
                          <div class="col-lg-12">
                <!-- Edit Form -->
                
                <div class="form-group row">
                <label for="userfile" class="col-sm-3 text-left control-label col-form-label">Primary Image:</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" value="" required="" name="userfile" placeholder="Select Image">
                </div>               
            </div>

            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Primary Title:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="" id="primary_slider_title" name="primary_slider_title" value="">
                </div>               
            </div>
             <div class="form-group row">
                <label for="sec_slider_title" class="col-sm-3 text-left control-label col-form-label">Secondary Title:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="sec_slider_title" id="sec_slider_title" value="">
                </div>               
            </div>
            <div class="form-group row">
                <label for="slider_text" class="col-sm-3 text-left control-label col-form-label">Slider Text:</label>
                <div class="col-sm-9">
                    <input type="text"  class="form-control" required="" id="slider_text" name="slider_text" value="">
                </div>               
            </div>
            <div class="form-group row">
                <label for="slider_btn_text" class="col-sm-3 text-left control-label col-form-label">Slider Button Text:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="slider_btn_text" required="" name="slider_btn_text" value="">
                </div>               
            </div>
            <div class="form-group row">
                <label for="slider_btn_link" class="col-sm-3 text-left control-label col-form-label">Slider Button Link:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="" id="slider_btn_link" name="slider_btn_link" value="">
                </div>               
            </div>
         
           
                <!-- Edit Form -->
                                        </div>
      </div>
      <div class="modal-footer">
       <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        <button type="submit" class="btn btn-primary ">Save changes</button>
      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>
