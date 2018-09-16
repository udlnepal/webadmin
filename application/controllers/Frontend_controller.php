<?php
class Frontend_controller extends CI_Controller {


	 public function __construct()
    {
     parent::__construct();
       $this->load->model('admin_model');
       $this->load->model('header_setup_model');
       $this->load->model('slider_setup_model');
        $this->load->model('menu_setup_model');
         $this->load->model('category_setup_model');
         $this->load->model('content_setup_model');
         $this->load->model('image_setup_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    
  //  print_r($data); exit;
    }

    public function display($view,$data){
    $data['header_title_setup'] = $this->header_setup_model->get_header_title();
    $data['slider_setup'] = $this->slider_setup_model->get_slider_image_name();
    $data['header_left_menu']=$this->header_setup_model->get_header_left_menu();
    $data['menu_setup']=$this->menu_setup_model->get_menu();
   // $data['menu_setup']=$this->menu_setup_model->get_page_content();
    $this->load->view('includes/header',$data);
		$this->load->view('includes/navigation',$data);
		$this->load->view($view,$data);
		$this->load->view('includes/footer');

    }
  }
  ?>