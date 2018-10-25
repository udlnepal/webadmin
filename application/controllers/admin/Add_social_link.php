<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Add_social_link extends Admin_controller{

 public function __construct()
  	{
     	parent::__construct();
		$this->load->model('category_setup_model');
		$this->load->model('admin_model');
		$this->load->model('menu_setup_model');
		$this->load->model('social_media_setup_model');
		$this->load->model('add_social_link_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
	}

public function index(){
$data['titlename']=$this->admin_model->get_logged_user();
$data['social_media_setup']=$this->social_media_setup_model->get_social_media();
$data['social_media']=$this->add_social_link_model->get_social_with_link();
$this->load->view('templates/header');
$this->load->view('templates/headernav',$data);
$this->load->view('templates/sidebar');
$this->load->view('admin/add_social_link',$data);
$this->load->view('templates/footer');
}

public function add(){
	$this->form_validation->set_rules('sm_title','Social Media','required');
	$this->form_validation->set_rules('soc_user','Username','required');
	if($this->form_validation->run()==FALSE)
	{
	//	echo "false";exit;
		redirect('admin/add_social_link',$data);

	}
	else{
		//echo "true";exit;
		$this->add_social_link_model->setup_social_link();
		redirect('admin/add_social_link',$data);
		}
}

public function delete(){
$social_id=$this->uri->segment(4);

if($social_id==0){
	error_404();

}
else{
	$this->add_social_link_model->delete_social_link($social_id);
	redirect('admin/add_social_link');
}

}



/* write above here */
}
?>