<?php

class Social_media_setup_model extends CI_Model{
public function __construct()
{
	$this->load->database();
}



public function setup_social(){

	//$this->load->helper('url');
	$data=array(
		'sm_title'=>$this->input->post('sm_title'),
		
	);	
		return $this->db->insert('social_media_setup',$data);
	
}

public function get_social_media(){

    $query = $this->db->get_where('social_media_setup');
    return $query->result_array();
}

/*write above here*/
}
?>