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
                   //   echo "i am still here"; exit;
                        redirect('admin/slider_setup', $error);

                }
                else
                {

//$this->uri->segment(4) === FALSE;
$test = $this->uri->segment(4);
//echo $test; exit;
if($test==0)
                    {
                        $ss_id=0;
                      // echo " i am here from add"; exit;
                    }
                else {
                    //echo "i am here from edit"; exit;
                   $ss_id = $this->uri->segment(4);
                    
                  //  echo "i am here from edit";exit;

                }


                //    echo $this->uri->segmet(4); exit;
                   // echo isset($ss_id); exit;
                	//$ss_id = $this->uri->segmet(4);
                  /* if(!isset())
                    {
                        $ss_id=0;
                       echo " i am here from add"; exit;
                    }
                else {
                    echo "i am here from edit"; exit;
                    $ss_id=$this->uri->segmet(4);
                  //  echo "i am here from edit";exit;

                }*/


                        $data = array('upload_data' => $this->upload->data());                       
                       	$this->slider_setup_model->set_slider_name($ss_id,$data['upload_data']['file_name']);
                        redirect('admin/slider_setup',$data);

                }
        }


         public function edit(){
            $this->do_upload();
        $ss_id = $this->uri->segment(4);
        
        if (empty($ss_id))
        {
            echo "i two";exit;
            show_404();
        }
         $this->load->helper('form');
        $this->load->library('form_validation');

    $data['sls'] = $this->slider_setup_model->get_slider_image_byid($ss_id);
    $titlename=$data['sls']['slider_img_name'];
    $data['slider_setup'] = $this->slider_setup_model->get_slider_image_name();
//echo "i reached here"; exit;
           // $this->slider_setup_model->set_slider_name($ss_id,$titlename);

            redirect('admin/slider_setup');
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