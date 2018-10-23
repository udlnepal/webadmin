<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Social_media_setup extends Admin_controller{

 public function __construct()
  	{
     	parent::__construct();
		$this->load->model('category_setup_model');
		$this->load->model('admin_model');
		$this->load->model('menu_setup_model');
		$this->load->model('contact_setup_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
	}

public function index(){
$data['titlename']=$this->admin_model->get_logged_user();
$this->load->view('templates/header');
$this->load->view('templates/headernav',$data);
$this->load->view('templates/sidebar');
$this->load->view('admin/social_media_setup');
$this->load->view('templates/footer');
}

/*write above here*/
}