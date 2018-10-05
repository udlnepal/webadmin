<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Content_setup extends Admin_controller{

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
	$data['titlename']=$this->admin_model->get_logged_user();
	$data['category_setup']=$this->category_setup_model->get_category();
	$data['home_content']=$this->content_setup_model->get_content();
	$this->load->view('templates/header',$data);
	$this->load->view('templates/headernav');
	$this->load->view('templates/sidebar');
	$this->load->view('admin/content_setup');
	$this->load->view('templates/footer');
}


public function add(){
	
			$this->content_setup_model->set_content();
			redirect('admin/content_setup',$data);
	

}


public function edit(){
	$home_cont_id=$this->uri->segment(4);
	if(empty($home_cont_id)){
		show_404();
	}
	$this->content_setup_model->set_content($home_cont_id);
	redirect(base_url().'admin/content_setup');
}

public function delete_cont(){
		$home_cont_id=$this->uri->segment(4);
		if(empty($home_cont_id)){
			show_404();
		}
		$this->content_setup_model->delete_content($home_cont_id);
		redirect(base_url().'admin/content_setup');
	}

/*write above here*/
}
?>