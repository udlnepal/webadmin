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
	/*$data['title']='Add Content';
	$this->form_validation->set_rules('c_title');
	$this->form_validation->set_rules('h_title','Content Title','required');
	$this->form_validation->set_rules('h_description','Content Description','required');
	$this->form_validation->set_rules('h_author');
	$this->form_validation->set_rules('h_location');
	$this->form_validation->set_rules('h_date');

	if ($this->form_validation->run()== FALSE){
		echo "i am here"; exit;
		redirect('admin/content_setup',$data);
		
		}
		else{
			echo "i am not there"; exit;*/
			$this->content_setup_model->set_content();
			redirect('admin/content_setup',$data);
		/*}*/
	

}
/*write above here*/
}
?>