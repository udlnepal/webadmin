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
                                                <tr><th width="10%">Order</th><th width="25%">Category</th><th width="45%">Short Description</th><th width="15%">Action</th></tr>
                                                
                                                    <?php foreach($category_setup as $key=>$cs): ?>
                                                <tr><td><?php echo $cs['c_order'] ?></td><td><?php echo $cs['c_title'] ?></td><td><?php echo $cs['c_shortdesc'] ?></td><td class="text-right"><a class="btn btn-warning">Edit</a>&nbsp;<a class="btn btn-danger" href="<?php echo base_url('admin/category_setup/delete_cat/'.$cs['cat_setup_id']);?> ">Delete</a></td></tr>
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
    <?php echo form_open('admin/category_setup/add'); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-lg-12">
               <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Category Order:</label>
                <div class="col-sm-9">
                    <select name="c_order" class="form-control">
                       <!-- <?php foreach($category_setup as $key=>$cs): ?>
                        <option>
                        <?php 
                            echo $cs['c_order']; ?>


                 </option>
                  <?php  endforeach;
                         ?> -->
                        <option value="1">First</option>
                        <option value="2">Second</option>
                        <option value="3">Third</option>
                        <option value="4">Fourth</option>
                         <option value="5">Fifth</option>
                          <option value="6">Sixth</option>
                           <option value="7">Seventh</option>
                    </select>
                </div> 
                </div>
        <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Category Title:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="c_title" placeholder="Category Titlle">
                </div>               
        </div>
         <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Category Description:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="c_shortdesc" placeholder="Category Short Description">
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