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
                                    <li class="breadcrumb-item active" aria-current="page">Content Setup</li>
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
                                    
                                        <h4 class="card-title">Content Setup</h4>
                                   
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-lg-12 text-right"><button class="btn btn-success"  data-toggle="modal" data-target="#exampleModal">Add New</button></div>
                                        <div class="col-lg-12">
                                            <table class="table table-bordered table-striped">
                                                <tr><th width="10%">Category</th><th width="25%">Content Title</th><th width="30%">Content Description</th><th width="15%">Author Name</th><th width="15%">Action</th></tr>
                                                
                                                    <?php foreach($home_content as $key=>$cs): ?>
                                                <tr><td><?php echo $cs['c_title'] ?></td>
                                                    <td><?php echo $cs['h_title'] ?></td>
                                                    <td><?php echo $cs['h_description'] ?></td>
                                                    <td><?php echo $cs['h_author'] ?></td>
                                                    <td class="text-right">
                                                        <a data-home_cont_id="<?php echo $cs['home_cont_id']; ?>" data-c_title="<?php echo $cs['c_title']; ?>" data-h_title="<?php echo $cs['h_title']; ?>" data-h_description="<?php echo $cs['h_description']; ?>" data-h_author="<?php echo $cs['h_author']; ?>" data-h_location="<?php echo $cs['h_location'] ?>" data-h_date="<?php echo $cs['h_date'] ?>" class="btn btn-warning editCont" data-toggle="modal" data-target="#editModal">Edit</a>&nbsp;<a class="btn btn-danger" href="<?php echo base_url('admin/content_setup/delete_cont/'.$cs['home_cont_id']);?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
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

            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <?php echo form_open('admin/content_setup/add'); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Content</h5>
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
                    <select name="c_title" class="form-control" required="">
                        <?php foreach($category_setup as $key=>$cs): ?>
                        <option>
                        <?php 
                            echo $cs['c_title']; ?>
                 </option>
                  <?php  endforeach;
                         ?>
                    </select>
                </div> 
                </div>
     
         <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Content Title:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value=""  name="h_title" required="" placeholder="Content Title">

                </div> 
                         
        </div>
        <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Content Description:</label>
                <div class="col-sm-9">
                    <textarea type="text" class="form-control" value="" required=""  name="h_description" placeholder="Content Description"></textarea>
                </div>               
        </div>
        <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Author Name:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value=""   name="h_author" placeholder="Author Name">
                </div>               
        </div>
        <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Location:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value=""  name="h_location" placeholder="Location">
                </div>               
        </div>
         <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Date:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"   name="h_date" value="<?php echo date("Y-m-d H:i:s"); ?>" >
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

<script>
    $(function(){
        $(document).on("click",".editCont", function(){

            var home_cont_id=$(this).data('home_cont_id');
            var c_title=$(this).data('c_title');
            var h_title=$(this).data('h_title');
            var h_description=$(this).data('h_description');
            var h_author=$(this).data('h_author');
            var h_location=$(this).data('h_location');
            var h_date=$(this).data('h_date');


            $(".modal-body .form-group #c_title").val(c_title);
            $(".modal-body .form-group #h_title").val(h_title);            
            $(".modal-body .form-group #h_description").val(h_description);
            $(".modal-body .form-group #h_author").val(h_author);
            $(".modal-body .form-group #h_location").val(h_location);
            $(".modal-body .form-group #h_date").val(h_date);
            $("#editModal form").attr('action','content_setup/edit/'+home_cont_id);            
            $('#editModal').modal('show');

        });
    });
</script>
           <!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <?php echo form_open(); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Content</h5>
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
                    <select name="c_title" id="c_title" class="form-control" required="">
                        <?php foreach($category_setup as $key=>$cs): ?>
                        <option>
                        <?php 
                            echo $cs['c_title']; ?>
                 </option>
                  <?php  endforeach;
                         ?>
                    </select>
                </div> 
                </div>
     
         <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Content Title:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" id="h_title" name="h_title" required="" placeholder="Content Title">

                </div> 
                         
        </div>
        <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Content Description:</label>
                <div class="col-sm-9">
                    <textarea type="text" class="form-control" value="" required="" id="h_description" name="h_description" placeholder="Content Description"></textarea>
                </div>               
        </div>
        <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Author Name:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" id="h_author"  name="h_author" placeholder="Author Name">
                </div>               
        </div>
        <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Location:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" id="h_location" name="h_location" placeholder="Location">
                </div>               
        </div>
         <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Date:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="h_date" name="h_date" value="<?php echo date("Y-m-d H:i:s"); ?>" >
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