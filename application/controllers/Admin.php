<?php
class Admin extends CI_Controller {


	 public function __construct()
    {
     parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
 
    }


	public function index()
	{
 if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        } else {

	   $this->load->view('templates/header');
		$this->load->view('templates/headernav');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/home');
		$this->load->view('templates/footer');
	}
}

	
	}



?>