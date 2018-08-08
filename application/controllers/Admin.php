<?php
class Admin extends CI_Controller {


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
 if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        } else {

    $this->db->select('firstname');
    $this->db->from('user');
    $this->db->where('email', $this->session->userdata('email'));
    $query=$this->db->get()->row();
    $data['titlename']= $query->firstname;
    // print_r($titlename);
    // die();
   // $titlename; exit;
   $data['header_left_menu']=$this->header_setup_model->get_header_left_menu();

	   $this->load->view('templates/header',$data);
		$this->load->view('templates/headernav',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/home');
		$this->load->view('templates/footer');
	}
}



  public function do_upload()
        {
                $config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'gif|jpg|png';
//$config['max_size']             = 2048;
             //  $config['max_width']            = 50;
             //   $config['max_height']           = 768;
                $config['overwrite']=TRUE;
                $config['file_name']='logo';

                $this->load->library('upload', $config);
                $file=$this->upload->do_upload('userfile');
               // print_r($file);exit

                if ( ! $file )
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        // print_r($data['upload_data']['file_name']); exit;
                        $this->header_setup_model->set_logo_name(1, $data['upload_data']['file_name']);

                      // print_r($file_name);exit;

/*$this->load->view('upload_success',$data);
}*/
                        redirect('admin',$data);

                }
        }




public function set_site_title(){
                        $titledata = array('site_title'=>$this->input->post('site_title'));
                        $this->header_setup_model->set_header_title(1,$titledata);    
                        redirect('admin',$titledata);
                  
	}

public function create_header_left_menu(){
  
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Add new left header menu';
 
        $this->form_validation->set_rules('icon_class', 'Icon Class', 'required');
        $this->form_validation->set_rules('hl_menu_title', 'Title', 'required');
        $this->form_validation->set_rules('hl_menu_link', 'Url');
   
 
 
        if ($this->form_validation->run() === FALSE)
        {
                        $this->load->view('templates/header',$data);
                        $this->load->view('templates/headernav');
                        $this->load->view('templates/sidebar');
                        $this->load->view('admin/home', $data);
                        $this->load->view('templates/footer');
        }
        else
        {
                        $this->header_setup_model->set_header_left_menu();          
                       /* $this->load->view('templates/header',$data);
                        $this->load->view('templates/headernav');
                        $this->load->view('templates/sidebar');
                        $this->load->view('admin/home', $data);
                        $this->load->view('templates/footer');*/
                          redirect('admin',$data);
                  

        }
    

}    

public function edit_header_left_menu($id_hlm)
    {

        $id = $this->uri->segment(3);
        
        if (empty($id_hlm))
        {
            echo"i am here"; exit;
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Edit a admin item';        
        $data['header_left_menu'] = $this->header_setup_model->get_header_left_menubyid($id_hlm);
        $this->form_validation->set_rules('icon_class', 'Icon class', 'required');
        $this->form_validation->set_rules('hl_menu_title', 'Menu Title', 'required');
        $this->form_validation->set_rules('hl_menu_link', 'Url');
       // $this->form_validation->set_rules('link_address','Link Address','required');
        if ($this->form_validation->run() === FALSE)
        {
           // echo"first"; exit;
            $this->load->view('templates/header', $data);
           $this->load->view('/admin/home', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
           // echo"second";exit;
            $this->header_setup_model->set_header_left_menu($id_hlm);
            $this->load->view('admin/home');
            redirect( base_url() . 'admin');
        }
    }

 public function delete_left_menu()
    {
        $id_hlm = $this->uri->segment(3);
        
        if (empty($id_hlm))
        {
            show_404();
        }
                
        $new_items = $this->header_setup_model->get_header_left_menubyid($id_hlm);
        
        $this->header_setup_model->delete_left_menu($id_hlm);        
        redirect( base_url() . 'admin');        
    }
/* write above here */
}



?>