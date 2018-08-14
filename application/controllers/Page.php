<?php
class Page extends CI_Controller {
		 public function __construct()
    {
     parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('header_setup_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        } 
 
    }
    public function display($view,$data){
    	$this->load->view('includes/header',$data);
		$this->load->view('includes/navigation',$data);
		$this->load->view($view,$data);
		$this->load->view('includes/footer');

    }

function index(){
$this->display('site/page',$data);


}


}
?>