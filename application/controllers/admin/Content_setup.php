<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Content_setup extends Admin_controller{

public function __construct(){
parent:: __construct();
$this->load->model('category_setup_model');
$this->load->model('admin_model');
$this->load->model('menu_setup_model');
$this->load->helper(array('form','url'));
$this->load->library(array('session','form_validation'));
}


public function index(){
	$data['titlename']=$this->admin_model->get_logged_user();
	$data['category_setup']=$this->category_setup_model->get_category();
	//$data['content_setup']=$this->content_setup_model->get_content();
	$this->load->view('templates/header',$data);
	$this->load->view('templates/headernav');
	$this->load->view('templates/sidebar');
	$this->load->view('admin/content_setup');
	$this->load->view('templates/footer');
}
/*write above here*/
}
?>