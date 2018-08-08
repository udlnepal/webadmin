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
                                            <input type="text" class="form-control" required=""  name="site_title" placeholder="Enter New Title For The Site" >
                                        </div>
                                        <div class="col-sm-2 text-right"><button class="btn btn-info">Update</button></div>
                                    </div>
                                    <?php echo form_close(); ?>

                                    </div>
                                    
                                    <!-- column -->
                                </div>

                                <div class="row">
                                    <div class="col-lg-8">

                                      <h4 class="card-title">Header Left Menu</h4>
                                    </div>
                                    <div class="col-lg-12 text-right">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add New</button> 
                                    </div>
                                    <div class="col-lg-12 mar-10-top">
                                        <table class="table table-bordered table-striped">
                                            <tr><th>Icon Class</th><th>Title</th><th>Url</th><th>Action</th></tr>
                                            <?php foreach($header_left_menu as $hlm):?>
                                            <tr>
                                                <td><i class="<?php echo $hlm['icon_class'] ?>"></i>&nbsp;<?php echo $hlm['icon_class'] ?></td>
                                                <td><?php echo $hlm['hl_menu_title'] ?></td>
                                                <td><?php echo $hlm['hl_menu_link'] ?></td>
                                                <td class="text-right">
                                                    <a class="btn btn-warning edit_hlm" data-id="<?php echo $hlm['id_hlm']; ?>" data-toggle="modal" data-target="#edithlm">Edit</a>&nbsp;&nbsp;
                                                    <a class="btn btn-danger"href="<?php echo site_url('admin/delete_left_menu/'.$hlm['id_hlm']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </table>
                                    </div>                                    
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











<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">

    <?php echo form_open('admin/create_header_left_menu'); ?> 
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title" id="myModalLabel">Add New</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <div class="form-group row">
            <label for="fname" class="col-sm-3 control-label col-form-label text-left">Icon Class:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="ic" name="icon_class" placeholder="For eg: fas fa-wrench">
                </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 control-label col-form-label text-left">Title:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="it" name="hl_menu_title" placeholder="Title">
                </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 control-label col-form-label text-left">Url:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="link" name="hl_menu_link" placeholder="Link Url">
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
<?php echo form_close(); ?>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="edithlm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">

    <?php echo form_open('admin/edit_header_left_menu/'.$hlm['id_hlm']); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <div class="form-group row">
          
            <label for="fname" class="col-sm-3 control-label col-form-label text-left">Icon Class:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="ic" name="icon_class" placeholder="For eg: fas fa-wrench" value="<?php echo $hlm['icon_class'] ?>">
                </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 control-label col-form-label text-left">Title:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="it" name="hl_menu_title" placeholder="Title" value="<?php echo $hlm['hl_menu_title'] ?>">
                </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 control-label col-form-label text-left">Url:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="link" name="hl_menu_link" placeholder="Link Url" value="<?php echo $hlm['hl_menu_link'] ?>">
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
<?php echo form_close(); ?>
  </div>
</div>
