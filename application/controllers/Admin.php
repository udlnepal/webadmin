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

	/*public function register()
	{
	$this->form_validation->set_rules('fname', 'Full Name','|required|alpha|min_length[3]|max_length[50]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
    $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
        
        $data['title'] = 'Register';
    
        if ($this->form_validation->run() === FALSE)
        {       
           echo "reached here"; exit;
            $this->load->view('templates/header',$data);
			$this->load->view('admin/register');
			$this->load->view('templates/footer');
        }
        else
        {  

            if ($this->admin_model->set_user())
            {              
                        
                $this->session->set_flashdata('msg_success','Registration Successful!');
                redirect('user/register');            
            }
            else
            {                
                $this->session->set_flashdata('msg_error','Error! Please try again later.');
                redirect('user/register');
            }
        }
    }
	*/
	}



?>