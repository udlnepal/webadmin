<div class="page-wrapper">
<div class="container-fluid">
              
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Menu Setup</h4>
                                        <h5 class="card-subtitle">Setup Main Navigation Menu.</h5>
                                    </div>
                                </div>
                                

                                <div class="row">
                                    
                                    <div class="col-lg-12 text-right">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add New</button> 
                                    </div>
                                    <div class="col-lg-12 mar-10-top">
                                        <table class="table table-bordered table-striped">
                                            <tbody><tr><th>S.N</th><th>Menu Name</th><!-- <th>Page Title</th><th>Page Content</th> --><th>Action</th></tr>
                                            <?php foreach($menu_setup as $key=>$ms): ?>
                                            <tr>
                                                <td width="10%"><?php echo $key+1; ?></td>
                                                <td width="70%"><?php echo $ms['menu_name'] ?></td>
                                                <!-- <td><?php echo $ms['page_title'] ?></td>
                                                <td>
                                                    <?php echo $ms['page_content'] ?>
                                                </td> -->
                                                <td width="20%">
                                                    <a class="btn btn-warning">Edit</a>&nbsp;<a class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            <?php endforeach; ?>        
                                            </tbody></table>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
</div>


<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><?php echo $title; ?></h4>
        <?php echo validation_errors(); ?>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <?php echo form_open_multipart('admin/menu_setup/add'); ?>  
      <div class="modal-body">
            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Menu Name:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="menu_name" placeholder="Menu Name">
                </div>               
            </div>


            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Is it Inner Page?:</label>
                <div class="col-sm-9">
                   <select class="form-control" name="is_inner_page" id="is_inner_Page">
                    <option id="yesInner" value="yes">Yes</option>
                    <option id="noInner" value="no">No</option>
                    <option id="extUrl" value="ext">External URL</option>
                   </select>
                </div>               
            </div>
<script>
   $( document ).ready(function() {
    $(".hidden_field").hide();
    $(".hidden_field2").hide();
    $( "#is_inner_Page" ).change(function(){
  
  var test=$("#is_inner_Page option:selected").val();
 if(test=="ext"){
        $(".hidden_field").show();
    }
    else{
        $(".hidden_field").hide();
    }
     if(test=="no"){
        $(".hidden_field2").show();
    }
    else{
        $(".hidden_field2").hide();
    }
});   
   
    });
</script>

            <div class="form-group row hidden_field">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">External  Url:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value=""
                     name="ext_url" placeholder="http://www.example.com">
                </div>               
            </div>

             <div class="form-group row hidden_field2">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Select Category:</label>
                <div class="col-sm-9">
                    <select class="form-control">
                        <option>CAtegory 1</option>
                    </select>
                </div>               
            </div>


            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Menu Order:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="menu_order" placeholder="Menu Order">
                </div>               
            </div>
            <!-- <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Page Title:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="page_title" placeholder="Menu Name">
                </div>               
            </div> 
            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Page Content:</label>
                <div class="col-sm-9">
                    <textarea  class="form-control ckeditor" value="" required="" name="page_content" ></textarea>
                </div>               
            </div> -->
         <!--     <input type="hidden" name="page_id" value="<?php echo $mid; ?>" />  
             -->


      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>
