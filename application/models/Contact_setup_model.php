<?php

class Contact_setup_model extends CI_Model{
public function __construct()
{
	$this->load->database();
}

public function set_social($social_id=0){
	$this->load->helper('url');
	$data=array(

		'soc_title'=>$this->input->post('soc_title'),
		'soc_link'=>$this->input->post('soc_link'),	

	);
	
	if($social_id==0){
		return $this->db->insert('social_media',$data);
		

	}else{
		$this->db->where('soc_title',$soc_title);
		return $this->db->update('social_media',$data);

	}
}

/*write above here */
}