<?php
class Image_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }

     public function set_slider_name($hi_id = 0,$file_name)
    {

             $this->load->helper('url');
 
        $data = array(
            'cimage_name'=>$file_name,
            'cont_id'=>$this->input->post('content'),
         //    'title' => $this->input->post('title'),
           /* 'primary_slider_title'=>$this->input->post('primary_slider_title'),
            'sec_slider_title'=>$this->input->post('sec_slider_title'),
            'slider_text'=>$this->input->post('slider_text'),
            'slider_btn_text'=>$this->input->post('slider_btn_text'),
            'slider_btn_link'=>$this->input->post('slider_btn_link'),
*/


        );
        if ($hi_id === 0)
        {
        	/*echo "i am here what should i do?"; exit;*/
        	return $this->db->insert('home_image_setup',$data);
        
        } else{
 //print_r ($ss_id); exit;
        $this->db->where('hi_id',$hi_id);
        return $this->db->update('home_image_setup',$data);
    }
 
 }

 public function get_home_image_name(){
    	$query=$this->db->query("SELECT home_content.h_title, category_setup.c_title, home_image_setup.* FROM home_content JOIN category_setup ON home_content.cat_id=category_setup.cat_setup_id JOIN home_image_setup on home_image_setup.cont_id=home_content.home_cont_id");
    	//print_r($query->result_array());die;
    	return $query->result_array();
    }

public function delete_image($hi_id){
    $this->db->where('hi_id',$hi_id);
    return $this->db->delete('home_image_setup');
}
public function get_gallery_image(){
    $query=$this->db->query('SELECT cimage_name FROM home_image_setup join home_content on cont_id=home_cont_id');
    return $query->result_array();
}






/*write above here */
 }
 ?>