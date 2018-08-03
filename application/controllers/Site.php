<?php
class Site extends CI_Controller {


	 public function __construct()
    {
     parent::__construct();
      //  $this->load->model('admin_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
 
    }


public function index()
	{
	$this->load->view('includes/header');
		$this->load->view('includes/navigation');
	//	$this->load->view('templates/sidebar');
		$this->load->view('site/home');
		$this->load->view('includes/footer');
	}

}