<?php
class Site extends CI_Controller {


	 public function __construct()
    {
     parent::__construct();
       $this->load->model('admin_model');
       $this->load->model('header_setup_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
 
    }


public function index()
	{
		
		$data['header_title_setup'] = $this->header_setup_model->get_header_title();
		
	$this->load->view('includes/header');
	
		$this->load->view('includes/navigation',$data);
	//	$this->load->view('templates/sidebar');
		$this->load->view('site/home');
		$this->load->view('includes/footer');
	}

}