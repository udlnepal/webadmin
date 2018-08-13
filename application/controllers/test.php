<?php
class Test extends CI_Controller {


	 public function __construct()
    {

     parent::__construct();
      //  $this->load->model('header_setup_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
 
    }

 


 public function index()

	{
       
 if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        } else {
 //   $data['header_title_setup'] = $this->header_setup_model->get_header_title();
	  $this->load->view('templates/header');
		$this->load->view('templates/headernav');
		$this->load->view('templates/sidebar');
		$this->load->view('testing');
		$this->load->view('templates/footer');
	}
}


}
?>