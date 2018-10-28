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
                                    <li class="breadcrumb-item active" aria-current="page">Add Social Link</li>
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
                                     <?php if(!empty(validation_errors())){?>
                                    <div class="alert alert-danger"> <?php echo validation_errors(); ?></div>
                                   <?php }?>
                                        <h4 class="card-title">Add Social Link</h4>
                                   
                                    <div class="clearfix"></div>
                                    
                                        
                                        
                                        <div class="col-lg-12 text-right"><button class="btn btn-success"  data-toggle="modal" data-target="#exampleModal">Add New</button></div>
                                        <div class="col-lg-12">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                  <th>Social Media</th><th>Username</th><th>Link</th><th>Action</th>
                                                </tr>
                                           <?php foreach($social_media as $key=>$data): ?>
                                             <tr><td><?php echo $data['sm_title']; ?></td><td><?php echo $data['soc_user']; ?></td><td>
                                                 <a target="_blank" href="http://www.<?php echo $data['sm_title'] ?>.com/<?php echo $data['soc_user'] ?>">http://www.<?php echo $data['sm_title'] ?>.com/<?php echo $data['soc_user'] ?></a>
                                             </td><td>
                                                <a class="btn btn-warning editSocial" data-toggle="modal" data-target="#editModal" data-social_id="<?php echo $data['social_id'] ?>" data-sm_title="<?php echo $data['sm_title'] ?>" data-soc_user="<?php echo $data['soc_user'] ?>">Edit</a>    
                                                <a class="btn btn-danger" href="<?php echo base_url('admin/add_social_link/delete/'.$data['social_id']) ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td></tr>
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
    <?php echo form_open('admin/add_social_link/add'); ?>
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Add Social Links</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-lg-12">
               
        		<div class="form-group row">
                <label for="address" class="col-sm-3 text-left control-label col-form-label">Select Social:</label>
                <div class="col-sm-9">
                    <select  name="sm_title" class="form-control"  style="width:100%;">
                        <?php  foreach($social_media_setup as $key=>$smdata):?>
                        <option value="<?php echo $smdata['sms_id'] ?>"><?php echo $smdata['sm_title'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>               
        </div>
            <div class="form-group row">
                <label for="address" class="col-sm-3 text-left control-label col-form-label">Username:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="soc_user" id="soc_user" placeholder="Username">
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
        $(document).on("click", ".editSocial", function () {
           
            var social_id = $(this).data('social_id');
            var sm_title= $(this).data('sm_title');
            var soc_user=$(this).data('soc_user');
           
           
            

            $(".modal-body .form-group #sm_title").val(sm_title);
            $(".modal-body .form-group #soc_user").val(soc_user);            
         
          
            $("#editModal form").attr('action','add_social_link/edit/'+social_id);            
            $('#editModal').modal('show');
            
        });
});


</script>
<script type="text/javascript">
 
    $("#sm_title").select2({
      tags: true
    });
      
  


</script>


<!-- editmodal -->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <?php echo form_open('admin/add_social_link/edit'); ?>
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Add Social Links</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-lg-12">
               
                <div class="form-group row">
                <label for="address" class="col-sm-3 text-left control-label col-form-label">Select Social:</label>
                <div class="col-sm-9">
                   <!--  <select  name="sm_title" class="form-control"  style="width:100%;">
                        <?php  foreach($social_media_setup as $key=>$smdata):?>
                        <option value="<?php echo $smdata['sms_id'] ?>"><?php echo $smdata['sm_title'] ?></option>
                    <?php endforeach; ?>
                  </select> -->

                  <input  type="text" class="form-control" id="sm_title" disabled="disabled">
                </div>               
        </div>
            <div class="form-group row">
                <label for="address" class="col-sm-3 text-left control-label col-form-label">Username:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="soc_user" id="soc_user" placeholder="Username">
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