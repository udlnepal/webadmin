<?php

class Contact_setup_model extends CI_Model{
public function __construct()
{
	$this->load->database();
}



public function set_contact($cs_id=0){

	$this->load->helper('url');
	$data=array(
		'address'=>$this->input->post('address'),
		'phone'=>$this->input->post('phone'),
		'email'=>$this->input->post('email'),
		'opening_hours'=>$this->input->post('opening_hours'),
	);


	if($cs_id==0){
	
		return $this->db->insert('contact_setup',$data);
	}
	else{
		$this->db->where('cs_id',$cs_id);
		return $this->db->update('contact_setup',$data);
	}
}

public function get_contact(){
	$query=$this->db->get_where('contact_setup');
	return $query->result_array();
}

public function delete_contact($cs_id){
	 $this->db->where('cs_id', $cs_id);
     return $this->db->delete('contact_setup');

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


public function get_social_data()
    {
       
    $query = $this->db->get_where('social_media');
    return $query->result_array();
    }

/*write above here */
}