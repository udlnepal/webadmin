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
                                    <li class="breadcrumb-item active" aria-current="page">Contact Setup</li>
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
                                    
                                        <h4 class="card-title">Contact Setup</h4>
                                   
                                    <div class="clearfix"></div>
                                    
                                         <div class="row">
                                        <div class="col-lg-12">
                                          <?php echo form_open('admin/contact_setup/addsocial'); ?>  
                                            <div class="form-group row">
                            <select class="form-control col-lg-3" name="soc_title">
                                            <option value="facebook">Facebook</option>
                                         <option value="twitter">Twitter</option>
                                          <option value="linkedin">LinkedIn</option>
                                         <option value="youtube">Youtube</option>
                                             <option value="google-plus">Google Plus</option>
                                           <option value="pinterest">Pinterest</option>
                                      <option value="rss">RSS</option>
                                  </select>
                                        <div class="col-sm-6">
                                          <div class="input-group">
                                          <span class="input-group-addon" style="padding-top:10px;"><strong>http://www.facebook.com/&nbsp;</strong></span>
                                          <input type="text" class="form-control" name="soc_link">
                                            </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <button class="btn btn-success" type="submit">Add</button>
                                            </div>               
                                                </div>
                                            <?php echo form_close(); ?>                                       
                                        </div>
                                        <div class="col-lg-12 pad_fix" >
                                            <table class="table table-bordered table-striped">
                                                <tr><th>Social Media</th><th>Url</th><th>Action</th></tr>
                                                <?php foreach($social_media as $key=>$sm): ?>
                                                <tr><td><?php echo $sm['soc_title']; ?></td><td>http://www.<?php echo $sm['soc_title']; ?>.com/<?php echo $sm['soc_link']; ?></td><td><button class="btn btn-warning">Edit</button>&nbsp;<button class="btn btn-danger">Delete</button></td></tr>
                                              <?php endforeach; ?>
                                            </table>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-lg-12 text-right"><button class="btn btn-success"  data-toggle="modal" data-target="#exampleModal">Add New</button></div>
                                        <div class="col-lg-12">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                  <th width="20%">Address</th>
                                                  <th width="15%">Phone No.</th>
                                                  <th width="20%">Email</th>
                                                  <th width="15%">Opening Hours</th>
                                                  <th width="15%">Action</th></tr>
                                                
                                                   
                                                <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                                  <td>&nbsp;</td>
                                                  
                                                <td class="text-right"><a class="btn btn-warning">Edit</a>&nbsp;<a class="btn btn-danger" href="#">Delete</a></td></tr>
                                                    

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
    <?php echo form_open('admin/contact_setup/add'); ?>
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
                <label for="address" class="col-sm-3 text-left control-label col-form-label">Address:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="address" placeholder="Address">
                </div>               
        </div>
         <div class="form-group row">
                <label for="phone" class="col-sm-3 text-left control-label col-form-label">Phone:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="phone" placeholder="Phone">
                </div>               
        </div>
        <div class="form-group row">
                <label for="email" class="col-sm-3 text-left control-label col-form-label">Email:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="email" placeholder="Email">
                </div>               
        </div>
        <div class="form-group row">
                <label for="opening hours" class="col-sm-3 text-left control-label col-form-label">Opening Hours:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="opening_hours" placeholder="Opening Hours">
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