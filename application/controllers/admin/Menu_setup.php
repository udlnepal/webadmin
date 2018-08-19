<?php
include_once(APPPATH.'controllers/Admin_controller.php');
class Menu_setup extends Admin_controller {


	 public function __construct()
    {
     parent::__construct();
        $this->load->model('slider_setup_model');
        $this->load->model('admin_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
 
    }


public function index(){

    $data['titlename']=$this->admin_model->get_logged_user();
    $data['header_left_menu']=$this->header_setup_model->get_header_left_menu();

	   	$this->load->view('templates/header',$data);
		$this->load->view('templates/headernav',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/menu_setup');
		$this->load->view('templates/footer');
}




}
?>