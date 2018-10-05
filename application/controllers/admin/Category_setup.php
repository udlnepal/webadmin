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
		 $data['category_setup']=$this->category_setup_model->get_category();
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

	public function edit(){
		$cat_setup_id=$this->uri->segment(4);
		if(empty($cat_setup_id)){
			show_404();
		}
		$this->category_setup_model->set_category($cat_setup_id);
		redirect('admin/Category_setup');

	}

	public function delete_cat(){
		$cat_setup_id=$this->uri->segment(4);
		if(empty($cat_setup_id)){
			show_404();
		}
		$this->category_setup_model->delete_category($cat_setup_id);
		redirect(base_url().'admin/category_setup');
	}
	


/* write above here */
}
?>