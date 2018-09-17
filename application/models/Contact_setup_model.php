<?php

class Contact_setup_model extends CI_Model{
public function __construct()
{
	$this->load->database();
}

public function set_social($social_id=0){
	$this->load->helper('url');
	$data=array(


		'soc_title'=>$this->input->post('social_title1'),
		'soc_title'=>$this->input->post('social_title2'),
		'soc_title'=>$this->input->post('social_title3'),
		'soc_title'=>$this->input->post('social_title4'),
		'soc_title'=>$this->input->post('social_title5'),
		'soc_title'=>$this->input->post('social_title6'),
		'soc_title'=>$this->input->post('social_title7'),
		

	);
	
	if($social_id==0){
		return $this->db->insert('social_media',$data);
		

	}else{
		$this->db->where('social_id',$social_id);
		return $this->db->update('social_media',$data);

	}
}

/*write above here */
}