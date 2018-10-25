<?php

class Add_social_link_model extends CI_Model{
public function __construct()
{
	
}
public function setup_social_link(){

	//$this->load->helper('url');
	$data=array(
		'sm_id'=>$this->input->post('sm_title'),
		'soc_user'=>$this->input->post('soc_user'),

		
	);	
		return $this->db->insert('social_media',$data);
	
}


public function get_social_with_link(){
	$this->db->select('*');
	$this->db->from('social_media');
	$this->db->join('social_media_setup', 'social_media_setup.sms_id = social_media.sm_id');
	$query = $this->db->get();
	return $query->result_array();
}


/*Above Here*/
}
?>