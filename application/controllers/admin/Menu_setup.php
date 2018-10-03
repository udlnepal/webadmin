<?php
include_once(APPPATH.'controllers/Admin_controller.php');
class Menu_setup extends Admin_controller {


	 public function __construct()
    {
     parent::__construct();
        $this->load->model('slider_setup_model');
        $this->load->model('admin_model');
        $this->load->model('menu_setup_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
 
    }


public function index(){

    $data['titlename']=$this->admin_model->get_logged_user();
    $data['header_left_menu']=$this->header_setup_model->get_header_left_menu();
    $data['menu_setup']=$this->menu_setup_model->get_menu();
    //$data['page_id'] = $this->session->userdata('page_id');
     $data['title'] = 'Add Menu';
	   	$this->load->view('templates/header',$data);
		$this->load->view('templates/headernav',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/menu_setup');
		$this->load->view('templates/footer');
}


 public function add()
    {
        
 
        $data['title'] = 'Add Menu';
       // $data['page_id'] = $this->session->userdata('page_id');
 
        $this->form_validation->set_rules('menu_name', 'Menu Name', 'required');
        $this->form_validation->set_rules('is_inner_page', 'Is Inner Page', 'required');
       // $this->form_validation->set_rules('page_title', 'Page Title', 'required');
       // $this->form_validation->set_rules('page_content', 'Page Content', 'required');
 
        if ($this->form_validation->run() === FALSE) {
            redirect('admin/menu_setup',$data);
        } else {            
            $this->menu_setup_model->set_menu();
            redirect('admin/menu_setup',$data);
        }
    }


public function testurl(){
    //echo "iamhere"; exit;
    $this->menu_setup_model->get_page_content();
}


}
?>