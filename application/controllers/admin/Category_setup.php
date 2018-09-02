<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Category_setup extends Admin_controller{

 public function __construct()
  	{
     	parent::__construct();
		$this->load->model('category_setup_model');
		$this->load->model('admin_model');
		$this->load->model('menu_setup_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
	}





	public function index(){
		 $data['titlename']=$this->admin_model->get_logged_user();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/headernav');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/category_setup');
		$this->load->view('templates/footer');
	}

	public function add(){
		$data['title']='Add Category';
		$this->form_validation->set_rules('c_title','Category Title','required');
		$this->form_validation->set_rules('c_shortdesc','Category Description','required');
		$this->form_validation->set_rules('c_order','Category Order','required');
	if($this->form_validation->run()== FALSE){
		redirect('admin/category_setup',$data);
	}
	else{
		$this->category_setup_model->set_category();
		redirect('admin/category_setup',$data);
	}

	}
	


/* write above here */
}
?>