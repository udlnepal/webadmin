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


         public function edit(){
        $ss_id = $this->uri->segment(3);
        
        if (empty($ss_id))
        {
            show_404();
        }
         $this->load->helper('form');
        $this->load->library('form_validation');

/*echo "i am here"; exit;*/
        //$data['title'] = 'Edit a admin item';       

        $data['sls'] = $this->slider_setup_model->get_slider_image_byid($ss_id);
        $this->form_validation->set_rules('slider_img_name');
        $this->form_validation->set_rules('primary_slider_title');
        $this->form_validation->set_rules('sec_slider_title');
        $this->form_validation->set_rules('slider_text');
        $this->form_validation->set_rules('slider_btn_text');
        $this->form_validation->set_rules('slider_btn_link');
        if ($this->form_validation->run() === FALSE)
        {
           // echo"first"; exit;

            $this->load->view('templates/header', $data);
           $this->load->view('admin/slider_setup', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
           echo "fine"; exit;
           // echo"second";exit;
            $this->slider_setup_model->set_slider_name($ss_id);
            $this->load->view('admin/slider_setup');
            redirect( base_url() . 'slider_setup');
        }


         }


    public function delete_slider()
        {
        $ss_id = $this->uri->segment(3);
        
        if (empty($ss_id))
        {
            show_404();
        }
        //  echo "i am here"; exit;      
        $slider_setup = $this->slider_setup_model->get_slider_image_byid($ss_id);
        $this->slider_setup_model->delete_slider($ss_id);        
        redirect( base_url() . 'slider_setup');        
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