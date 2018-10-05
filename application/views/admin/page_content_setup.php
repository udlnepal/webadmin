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
                                    <li class="breadcrumb-item active" aria-current="page">Inner Page Content Setup</li>
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
                                    
                                        <h4 class="card-title">Inner Page Content Setup</h4>
                                   
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-lg-12 text-right"><button class="btn btn-success"  data-toggle="modal" data-target="#exampleModal">Add New</button></div>
                                        <div class="col-lg-12 mar-5-top">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                              <th width="5%">S.N.</th>
                                              <th width="15%">Menu</th><th width="15%">Title</th><th width="40%">Content</th><th width="15%">Action</th></tr>
                                              <?php foreach($page_content_setup as $key=>$data): ?>
                                              <tr>
                                                 
                                                  <td><?php echo $key+1; ?></td><td><?php echo $data['menu_name'];?></td><td><?php echo $data['page_title']; ?></td><td><?php echo $data['page_content'] ?></td><td><a class="btn btn-warning">Edit</a>&nbsp;
                                                    <a href="<?php echo base_url('admin/page_content_setup/delete/'.$data['pc_id']); ?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
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


            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <?php echo form_open('admin/page_content_setup/add'); ?>
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
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Select Menu:</label>
                <div class="col-sm-9">
                    <select name="menu_name" class="form-control menu_name" required="" >
                        <option>--select--</option>
                        <?php foreach($menu_setup as $key=>$cs): ?>
                        <option>
                        <?php 
                            echo $cs['menu_name']; ?>
                 </option>
                  <?php  endforeach;
                         ?>
                    
                    </select>
                </div> 
                </div>
     
         <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Title:</label>
                <div class="col-sm-9">
                   <input name="page_title" type="text" class="form-control">
                </div> 
                         
        </div>
        
        
        <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Content:</label>
                <div class="col-sm-9">
                    <textarea name="page_content" class="form-control ckeditor"></textarea>
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