<?php
class Slider_setup extends CI_Controller {


	 public function __construct()
    {
     parent::__construct();
        $this->load->model('slider_setup_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
 
    }

      public function do_upload()
        {

                $config['upload_path']          = './assets/img/hero-slider';
                $config['allowed_types']        = 'jpg|jpeg';
                //$config['max_size']             = 2048;
                //$config['max_width']            = 50;
                //$config['max_height']           = 768;
               // $config['overwrite']=TRUE;
                $config['file_name']='0';

                $this->load->library('upload', $config);
                $file=$this->upload->do_upload('userfile');

                if ( ! $file )
                {

                        $error = array('error' => $this->upload->display_errors());

                        redirect('slider_setup', $error);

                }
                else
                {
                	
                        $data = array('upload_data' => $this->upload->data());
                        
                       	$this->slider_setup_model->set_slider_name($ss_id = 0,$data['upload_data']['file_name']);
                        redirect('slider_setup',$data);

                }
        }


	public function index()
	{
 	if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        } else {
$data['slider_setup'] = $this->slider_setup_model->get_slider_image_name();

        $this->load->view('templates/header');
		$this->load->view('templates/headernav');
		$this->load->view('templates/sidebar');		
		$this->load->view('admin/slider_setup',$data);
		$this->load->view('templates/footer');	
        }
}
}



?>