<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Contact_setup extends Admin_controller{

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
		 $data['category_setup']=$this->category_setup_model->get_category();
		 $data['social_media']=$this->contact_setup_model->get_social_data();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/headernav');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/contact_setup');
		$this->load->view('templates/footer');
	}


public function addsocial(){
	//echo "i am here";exit;
	$this->contact_setup_model->set_social();
	redirect('admin/contact_setup',$data);
}



/* write above here */
}