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
                                            <tbody><tr><th>S.N</th><th>Menu Name</th><th>Type</th><th>Ext Link</th><!-- <th>Page Title</th><th>Page Content</th> --><th>Action</th></tr>
                                            <?php foreach($menu_setup as $key=>$ms): ?>
                                            <tr>
                                                <td width="10%"><?php echo $key+1; ?></td>
                                                <td width="20%"><?php echo $ms['menu_name'] ?></td>
                                                <td width="20%"><?php 
                                                switch ($ms['is_inner_page']) {
                                                    case 'yes':
                                                        echo "Inner Page";
                                                        break;
                                                    case 'no':
                                                        echo "Category"; break;            

                                                    default:
                                                        echo "External Link";
                                                        break;
                                                }


                                                ?></td>
                                                <td width="30%"><?php echo $ms['ext_url'];?></td>
                                                   <td width="20%">
                                                    <a data-toggle="modal" data-target="#editModal" data-id="<?php echo $ms['mid']; ?>" data-menu_name="<?php echo $ms['menu_name']; ?>" data-is_inner_page="<?php echo $ms['is_inner_page']; ?>" data-ext_url="<?php echo $ms['ext_url']; ?>" data-menu_order="<?php echo $ms['menu_order']; ?>"  class="btn editmenu btn-warning">Edit</a>&nbsp;
                                                    <a href="<?php echo base_url('admin/menu_setup/delete/'.$ms['mid']); ?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')" >Delete</a></td>
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
   




        $('select[name="c_title"]').on('change', function() {
            var c_title = $(this).val();
          // alert(cont_id);
          $("input.menu_name").val(c_title);
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
                    <select class="form-control" name="c_title">
                    <?php foreach($category_setup as $key=>$data): ?>  
                        <option><?php echo $data['c_title']; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>               
            </div>
  <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Menu Name:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control menu_name" value="" required="" name="menu_name" placeholder="Menu Name">
                </div>               
            </div>

            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Menu Order:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="menu_order" placeholder="Menu Order">
                </div>               
            </div>
         

      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>

<!-- edit modal -->
<script>
    $(function(){
        $(document).on("click", ".editmenu", function () {
           $('.hidden_ext').hide();
           $('.hidden_cat').hide();
            var mid = $(this).data('id');
            var is_inner_page= $(this).data('is_inner_page');
            var ext_url=$(this).data('ext_url');
            var c_title =$(this).data('c_title');
            var menu_name =$(this).data('menu_name');
            var menu_order =$(this).data('menu_order');
            

            $(".modal-body .form-group #is_inner_page").val(is_inner_page);
            $(".modal-body .form-group #menu_order").val(menu_order);            
            $(".modal-body .form-group #ext_url").val(ext_url);
            $(".modal-body .form-group #c_title").val(c_title);
            $(".modal-body .form-group #menu_name").val(menu_name);
            $("#editModal form").attr('action','menu_setup/edit/'+mid);            
            $('#editModal').modal('show');
            

        
        
            switch (is_inner_page) {
            case "no":
                $('.hidden_cat').show();
                break;
            case "ext":
                $('.hidden_ext').show();
                break;   
            default:        
                }



            $('select[name="is_inner_page"]').on('change', function() {
            var is_inner_page = $(this).val();
         
            switch (is_inner_page) {
            case "no":
                $('.hidden_cat').show();
                $('.hidden_ext').hide();
                $(".modal-body .form-group #ext_url").val("");
                break;
            case "ext":
                $('.hidden_ext').show();
                $('.hidden_cat').hide();
                break;   
            default:        
                $(".modal-body .form-group #ext_url").val("");
                }


        });
   


        });
});
</script>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit Menu</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <?php echo form_open(); ?>  
      <div class="modal-body">
          


            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Is it Inner Page?:</label>
                <div class="col-sm-9">
                   <select class="form-control" name="is_inner_page" id="is_inner_page">
                    <option id="yesInner" value="yes">Yes</option>
                    <option id="noInner" value="no">No</option>
                    <option id="extUrl" value="ext">External URL</option>
                   </select>
                </div>               
            </div>


            <div class="form-group row hidden_ext ">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">External  Url:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value=""
                     name="ext_url" placeholder="http://www.example.com" id="ext_url">
                </div>               
            </div>

             <div class="form-group row hidden_cat ">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Select Category:</label>
                <div class="col-sm-9">
                    <select class="form-control" name="c_title" id="c_title">
                    <?php foreach($category_setup as $key=>$data): ?>  
                        <option><?php echo $data['c_title']; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>               
            </div>
  <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Menu Name:</label>
                <div class="col-sm-9">
                    <input type="text" id="menu_name" class="form-control menu_name" value="" required="" name="menu_name" placeholder="Menu Name">
                </div>               
            </div>

            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Menu Order:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" id="menu_order" name="menu_order" placeholder="Menu Order">
                </div>               
            </div>
         

      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>
