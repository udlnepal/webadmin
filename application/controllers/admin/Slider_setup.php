<?php
include_once(APPPATH.'controllers/Admin_controller.php');
class Slider_setup extends Admin_controller {


	 public function __construct()
    {
     parent::__construct();
        $this->load->model('slider_setup_model');
        $this->load->model('admin_model');
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
                        redirect('admin/slider_setup',$data);

                }
        }


         public function edit(){
           
        $ss_id = $this->uri->segment(4);
        
        if (empty($ss_id))
        {
            echo "i two";exit;
            show_404();
        }
         $this->load->helper('form');
        $this->load->library('form_validation');

  

     //   $data['sls'] = $this->slider_setup_model->get_slider_image_byid($ss_id);
        $data['slider_setup'] = $this->slider_setup_model->get_slider_image_name();
    echo '<pre>',print_r($data[0]),'</pre>';exit;
/*        $this->form_validation->set_rules('slider_img_name');
        $this->form_validation->set_rules('primary_slider_title');
        $this->form_validation->set_rules('sec_slider_title');
        $this->form_validation->set_rules('slider_text');
        $this->form_validation->set_rules('slider_btn_text');
        $this->form_validation->set_rules('slider_btn_link');
        if ($this->form_validation->run() === FALSE)
        {
     
            redirect('slider_setup',$data);
 
        }
        else
        {*/
        
           // echo "i four"; exit;
            $this->slider_setup_model->set_slider_name($ss_id,$slider_img_name);
            $this->load->view('admin/slider_setup');
            redirect( base_url() . 'slider_setup');
   //    }


         }


    public function delete_slider()
        {
        $ss_id = $this->uri->segment(4);
        
        if (empty($ss_id))
        {
            show_404();
        }
        //  echo "i am here"; exit;      
        $slider_setup = $this->slider_setup_model->get_slider_image_byid($ss_id);
        $this->slider_setup_model->delete_slider($ss_id);        
        redirect( base_url() . 'admin/slider_setup');        
        }


	public function index()
	{
 	/*if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        } else {*/
$data['slider_setup'] = $this->slider_setup_model->get_slider_image_name();
$data['titlename']=$this->admin_model->get_logged_user();


        $this->load->view('templates/header');
		$this->load->view('templates/headernav',$data);
		$this->load->view('templates/sidebar');		
		$this->load->view('admin/slider_setup',$data);
		$this->load->view('templates/footer');	
     /*   }*/
}
}



?>