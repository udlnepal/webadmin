<?php

class Category_setup_model extends CI_Model{
public function __construct()
{
	$this->load->database();
}

public function set_category($cat_setup_id=0){
	$this->load->helper('url');
	$data=array(
		'c_title'=>$this->input->post('c_title'),
		'c_shortdesc'=>$this->input->post('c_shortdesc'),
		'c_order'=>$this->input->post('c_order'),
		'is_gallery'=>$this->input->post('is_gallery'),

	);
	if($cat_setup_id==0){
		return $this->db->insert('category_setup',$data);
		/* $error = $this->db->error();
		 echo "<h4>".$error."</h4>";exit;*/

	}else{
		$this->db->where('cat_setup_id',$cat_setup_id);
		return $this->db->update('category_setup',$data);

	}
}


public function get_category(){


		$this->db->select('*');
        $this->db->from('category_setup');
        $this->db->order_by("c_order", "asc");
        $query=$this->db->get(); 
    	return $query->result_array();
}


public function delete_category($cat_setup_id){
	$this->db->where('cat_setup_id',$cat_setup_id);
	return $this->db->delete('category_setup');
}


/*write above here*/
}
?>
