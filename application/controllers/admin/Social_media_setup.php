<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Social_media_setup extends Admin_controller{

 public function __construct()
  	{
     	parent::__construct();
		$this->load->model('category_setup_model');
		$this->load->model('admin_model');
		$this->load->model('menu_setup_model');
		$this->load->model('social_media_setup_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
	}

public function index(){
$data['titlename']=$this->admin_model->get_logged_user();
$data['social_media_setup']=$this->social_media_setup_model->get_social_media();
$this->load->view('templates/header');
$this->load->view('templates/headernav',$data);
$this->load->view('templates/sidebar');
$this->load->view('admin/social_media_setup');
$this->load->view('templates/footer');
}

public function add(){
	$this->form_validation->set_rules('sm_title','required','is_unique[social_media_setup.sm_title]');
	if($this->form_validation->run()==FALSE)
	{
		redirect('admin/social_media_setup',$data);

	}
	else{
		$this->social_media_setup_model->setup_social();
		redirect('admin/social_media_setup',$data);
		}
}


	




/*write above here*/
}