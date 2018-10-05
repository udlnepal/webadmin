<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Page_content_setup extends Admin_controller{

public function __construct(){
parent:: __construct();
$this->load->model('category_setup_model');
$this->load->model('admin_model');
$this->load->model('page_content_setup_model');
$this->load->model('menu_setup_model');
$this->load->model('content_setup_model');
$this->load->model('image_setup_model');
$this->load->helper(array('form','url'));
$this->load->library(array('session','form_validation'));
}


public function index(){
//	$data['category_setup']=$this->category_setup_model->get_category();
    $data['header_title_setup'] = $this->header_setup_model->get_header_title();
    $data['menu_setup']=$this->menu_setup_model->get_menu_inner();
//    $data['home_image_setup']=$this->image_setup_model->get_home_image_name();
    $data['titlename']=$this->admin_model->get_logged_user();
    $data['page_content_setup']=$this->page_content_setup_model->get_page_content();
		$this->load->view('templates/header');
		$this->load->view('templates/headernav',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/Page_content_setup',$data);
		$this->load->view('templates/footer');
}

public function add(){
  $this->page_content_setup_model->set_content();
  redirect('admin/page_content_setup',$data);
}


public function delete(){
  $home_cont_id=$this->uri->segment(4);
  if($home_cont_id==0){
    error_404();
  }
  $this->page_content_setup_model->delete_content($home_cont_id);
  redirect('admin/page_content_setup');
}


/* write above here */
}
?>