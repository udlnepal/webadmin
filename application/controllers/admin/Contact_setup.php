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
		 $data['contact_setup']=$this->contact_setup_model->get_contact();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/headernav');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/contact_setup');
		$this->load->view('templates/footer');
	}


public function addsocial(){
	$this->contact_setup_model->set_social();
	redirect('admin/contact_setup',$data);
}


public function deletecontact(){
$cs_id=$this->uri->segment(4);
if($cs_id==0){
	error_404();
}
else{
	$this->contact_setup_model->delete_contact($cs_id);
	redirect('admin/contact_setup');
}
} 

public function editcontact(){
$cs_id=$this->uri->segment(4);
if($cs_id==0){
	error_404();
}
else{
	
	$this->contact_setup_model->set_contact($cs_id);
	redirect('admin/contact_setup');
}
} 



public function addcontact(){
	$this->form_validation->set_rules('address','Address', 'required');
	$this->form_validation->set_rules('phone','Phone','required');
	$this->form_validation->set_rules('email','Email', 'required');
	$this->form_validation->set_rules('opening_hours','Opening Hours', 'required');
	if($this->form_validation->run()===FALSE){
		$this->session->set_flashdata('Failure','Something went Wrong!');
		redirect('admin/contact_setup');
	}
	else{
		$this->contact_setup_model->set_contact();
		$this->session->set_flashdata('Success','Content Addedd Successfully!');
		redirect('admin/contact_setup');

	}
}



/* write above here */
}