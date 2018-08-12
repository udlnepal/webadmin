<?php
class Slider_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


     public function set_slider_name($ss_id = 0,$file_name)
    {

             $this->load->helper('url');
 
        $data = array(
            'slider_img_name'=>$file_name,
         //    'title' => $this->input->post('title'),
            'primary_slider_title'=>$this->input->post('primary_slider_title'),
            'sec_slider_title'=>$this->input->post('sec_slider_title'),
            'slider_text'=>$this->input->post('slider_text'),
            'slider_btn_text'=>$this->input->post('slider_btn_text'),
            'slider_btn_link'=>$this->input->post('slider_btn_link'),



        );
        if ($ss_id === 0)
        {
        	return $this->db->insert('slider_setup',$data);
        
        } else{
 
        $this->db->where('ss_id'.$ss_id);
        return $this->db->update('slider_setup',$data);
    }
 
 }

 public function get_slider_image_name(){
	{
       
    $query = $this->db->get_where('slider_setup');
    return $query->result_array();
    }
}


/* function goes above here */
}





 ?>

