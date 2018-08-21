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
                                            <tbody><tr><th>Menu Name</th><th>Page Title</th><th>Page Content</th><th>Action</th></tr>
                                                                                        <tr>
                                                <td><i class="fa fa-wrench"></i>&nbsp;fa fa-wrench</td>
                                                <td>Eprocurement System</td>
                                                <td>sadfsadf</td>
                                                <td class="text-right">
                                                    <a data-id_hlm="16" data-icon_class="fa fa-wrench" data-hl_menu_title="Eprocurement System" data-hl_menu_link="sadfsadf" class="btn btn-warning edit_hlm" href="admin/header_setup/edit_header_left_menu/16" data-toggle="modal" data-target="#edithlm">Edit</a>&nbsp;&nbsp;
                                                    <a class="btn btn-danger" href="http://[::1]/webadmin/admin/header_setup/delete_left_menu/16" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                                            </tr>
                                                                                        <tr>
                                                <td><i class="fa fa-envelope"></i>&nbsp;fa fa-envelope</td>
                                                <td>Email</td>
                                                <td>http://sumitmaharjan.com.np</td>
                                                <td class="text-right">
                                                    <a data-id_hlm="17" data-icon_class="fa fa-envelope" data-hl_menu_title="Email" data-hl_menu_link="http://sumitmaharjan.com.np" class="btn btn-warning edit_hlm" href="admin/header_setup/edit_header_left_menu/17" data-toggle="modal" data-target="#edithlm">Edit</a>&nbsp;&nbsp;
                                                    <a class="btn btn-danger" href="http://[::1]/webadmin/admin/header_setup/delete_left_menu/17" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                                            </tr>
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
<form id="addMenu">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add Menu</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Menu Name:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="menuname" placeholder="Menu Name">
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
    $( "#is_inner_Page" ).change(function(){
  
  var test=$("#is_inner_Page option:selected").val();
 if(test=="ext"){
        $(".hidden_field").show();
    }
    else{
        $(".hidden_field").hide();
    }
});

    
   
    });
</script>

            <div class="form-group row hidden_field">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">External  Url:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="exturl" placeholder="http://www.example.com">
                </div>               
            </div>


            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Menu Order:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="menuorder" placeholder="Menu Name">
                </div>               
            </div>
            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Page Title:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="" required="" name="pagetitle" placeholder="Menu Name">
                </div>               
            </div> 
            <div class="form-group row">
                <label for="primary_slider_title" class="col-sm-3 text-left control-label col-form-label">Page Content:</label>
                <div class="col-sm-9">
                    <textarea  class="form-control ckeditor" value="" required="" name="pagecontent" ></textarea>
                </div>               
            </div>
            
            


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>