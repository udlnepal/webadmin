<?php
class Site extends CI_Controller {


	 public function __construct()
    {
     parent::__construct();
       $this->load->model('admin_model');
       $this->load->model('header_setup_model');
       $this->load->model('slider_setup_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }

    public function display($view,$data){
    	$this->load->view('includes/header',$data);
		$this->load->view('includes/navigation',$data);
		$this->load->view($view,$data);
		$this->load->view('includes/footer');

    }


public function index()
	{
		$data['header_title_setup'] = $this->header_setup_model->get_header_title();
		$data['slider_setup'] = $this->slider_setup_model->get_slider_image_name();
		$data['header_left_menu']=$this->header_setup_model->get_header_left_menu();
		$this->display('site/home',$data);
		
/*

	//	print_r ($menudata); exit;
		$this->load->view('includes/header',$data);
		$this->load->view('includes/navigation',$data);
	//	$this->load->view('templates/sidebar');
		$this->load->view('site/home');
		$this->load->view('includes/footer');*/
	}




}