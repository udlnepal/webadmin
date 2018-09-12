<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Image_setup extends Admin_controller{

public function __construct(){
parent:: __construct();
$this->load->model('category_setup_model');
$this->load->model('admin_model');
$this->load->model('menu_setup_model');
$this->load->model('content_setup_model');
$this->load->helper(array('form','url'));
$this->load->library(array('session','form_validation'));
}


public function index(){
	$data['category_setup']=$this->category_setup_model->get_category();
		$this->load->view('templates/header');
		$this->load->view('templates/headernav');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/image_setup',$data);
		$this->load->view('templates/footer');
}



 public function myformAjax($cont_id) { 
       $result = $this->db->where("cat_id",$cont_id)->get("home_content")->result();
       echo json_encode($result);
   }
/* write above here */
}
?>