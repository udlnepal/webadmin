<?php
class Admin extends CI_Controller {
	public function index()
	{
	$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/home');
		$this->load->view('templates/footer');
	}

}

?>