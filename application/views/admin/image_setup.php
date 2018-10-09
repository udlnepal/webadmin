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
                                    <li class="breadcrumb-item active" aria-current="page">Image Setup</li>
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
                                    
                                        <h4 class="card-title">Image Setup</h4>
                                   
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-lg-12 text-right"><button class="btn btn-success"  data-toggle="modal" data-target="#exampleModal">Add/Edit</button></div>
                                        <div class="col-lg-12">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                              <th width="10%">Image</th>
                                              <th width="25%">Category</th><th width="30%">Content </th><th width="15%">Action</th></tr>
                                              <?php foreach($home_image_setup as $his): ?>
                                              <tr><td><img src="<?php echo base_url('assets/img/media/'); ?><?php echo $his['cimage_name']; ?>" style="height:60px; width: 120px;"></td><td><?php echo $his['c_title']; ?></td><td><?php echo $his['h_title']; ?></td>

                                                <td>
                                                    
                                                    <a class="btn btn-danger" href="<?php echo base_url('admin/image_setup/delete_img/'.$his['hi_id']);?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>

                                                </td>

                                            </tr>  
                                               <?php endforeach; ?>   
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

<script type="text/javascript">


    $(document).ready(function() {
        //  console.log( "ready!" );

        $('select[name="c_title"]').on('change', function() {
            var cont_id = $(this).val();
            if(cont_id) {
                $.ajax({
                 
                    url: '<?php echo base_url('admin/image_setup'); ?>/myformAjax/'+cont_id,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="content"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="content"]').append('<option value="'+ value.home_cont_id +'">'+ value.h_title +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="content"]').empty();
            }
        });
    });
</script>


            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <?php echo form_open_multipart('admin/image_setup/do_upload'); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add/Edit Content</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-lg-12">
               <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Select Category:</label>
                <div class="col-sm-9">
                    <select name="c_title" class="form-control category" required="" >
                        <option>--select--</option>
                        <?php foreach($category_setup as $key=>$cs): ?>
                        <option value="<?php echo $cs['cat_setup_id'];?>">
                        <?php 
                            echo $cs['c_title']; ?>


                 </option>
                  <?php  endforeach;
                         ?>
                    
                    </select>
                </div> 
                </div>
     
         <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Select Content:</label>
                <div class="col-sm-9">
                    <select class="form-control content" name="content">
                    	
                    </select>

                </div> 
                         
        </div>
        
        
        <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Select Image:</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" value="" required="" name="userfile" placeholder="Select Image">
                </div>               
        </div>
         
              
                    
        
    </div>
        </div>
      </div>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  <?php echo form_close(); ?>
  </div>

</div>