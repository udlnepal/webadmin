<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Page_content_setup extends Admin_controller{

public function __construct(){
parent:: __construct();
$this->load->model('category_setup_model');
$this->load->model('admin_model');
$this->load->model('menu_setup_model');
$this->load->model('content_setup_model');
$this->load->model('image_setup_model');
$this->load->helper(array('form','url'));
$this->load->library(array('session','form_validation'));
}


public function index(){
//	$data['category_setup']=$this->category_setup_model->get_category();
    $data['header_title_setup'] = $this->header_setup_model->get_header_title();
//    $data['home_image_setup']=$this->image_setup_model->get_home_image_name();
    $data['titlename']=$this->admin_model->get_logged_user();
		$this->load->view('templates/header');
		$this->load->view('templates/headernav',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/Page_content_setup',$data);
		$this->load->view('templates/footer');
}





/* public function myformAjax($cont_id) { 
       $result = $this->db->where("cat_id",$cont_id)->get("home_content")->result();
       echo json_encode($result);
   }


*/


/* write above here */
}
?>