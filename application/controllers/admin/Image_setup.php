<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Image_setup extends Admin_controller{

public function __construct(){
parent:: __construct();
$this->load->model('category_setup_model');
$this->load->model('admin_model');
$this->load->model('menu_setup_model');
$this->load->model('content_setup_model');
$this->load->model('image_setup_model');
$this->load->helper(array('form','url'));
$this->load->library(array('session','form_validation'));
}


public function index(){
	$data['category_setup']=$this->category_setup_model->get_category();
    $data['home_image_setup']=$this->image_setup_model->get_home_image_name();
		$this->load->view('templates/header');
		$this->load->view('templates/headernav');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/image_setup',$data);
		$this->load->view('templates/footer');
}

public function do_upload()
        {



                $config['upload_path']          = './assets/img/media';
                $config['allowed_types']        = 'jpg|jpeg|png|gif';
                $config['file_name']='0';


                $this->load->library('upload', $config);
                $file=$this->upload->do_upload('userfile');

                if ( ! $file )
                {
                     // echo "i am here";exit;

                        $error = array('error' => $this->upload->display_errors());
                   
                        redirect('admin/image_setup', $error);

                }
                else
                {


$test = $this->uri->segment(4);

if($test==0)
                    {
                        $ss_id=0;
                      
                    }
                else {
                   
                   $ss_id = $this->uri->segment(4);

                }
                        $data = array('upload_data' => $this->upload->data());                       
                       	$this->image_setup_model->set_slider_name($ss_id,$data['upload_data']['file_name']);
                        redirect('admin/image_setup',$data);

                }
}



 public function myformAjax($cont_id) { 
       $result = $this->db->where("cat_id",$cont_id)->get("home_content")->result();
       echo json_encode($result);
   }
/* write above here */
}
?>