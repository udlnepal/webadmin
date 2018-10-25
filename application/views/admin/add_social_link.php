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
                                             </td><td></td></tr>
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
        $(document).on("click", ".editContent", function () {
           
            var cs_id = $(this).data('cs_id');
            var address= $(this).data('address');
            var phone=$(this).data('phone');
            var email =$(this).data('email');
            var opening_hours =$(this).data('opening_hours');
           
            

            $(".modal-body .form-group #address").val(address);
            $(".modal-body .form-group #phone").val(phone);            
            $(".modal-body .form-group #email").val(email);
            $(".modal-body .form-group #opening_hours").val(opening_hours);
          
            $("#editModal form").attr('action','contact_setup/editcontact/'+cs_id);            
            $('#editModal').modal('show');
            
        });
});


</script>
<script type="text/javascript">
 
    $("#sm_title").select2({
      tags: true
    });
      
  


</script>


            <!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <?php echo form_open(''); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-lg-12">
               
            <div class="form-group row">
                <label for="address" class="col-sm-3 text-left control-label col-form-label">Address:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" id="address" name="address" placeholder="Address">
                </div>               
        </div>
         <div class="form-group row">
                <label for="phone" class="col-sm-3 text-left control-label col-form-label">Phone:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required=""  id="phone" name="phone" placeholder="Phone">
                </div>               
        </div>
        <div class="form-group row">
                <label for="email" class="col-sm-3 text-left control-label col-form-label">Email:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" id="email" name="email" placeholder="Email">
                </div>               
        </div>
        <div class="form-group row">
                <label for="opening hours" class="col-sm-3 text-left control-label col-form-label">Opening Hours:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" id="opening_hours" name="opening_hours" placeholder="Opening Hours">
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