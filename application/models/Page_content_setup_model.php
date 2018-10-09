<?php

class Page_content_setup_model extends CI_Model{
public function __construct()
{
	$this->load->database();
}

public function set_content($pc_id=0){
	$this->load->helper('url');
	$posted_mn=$this->input->post('menu_name');
	$page_title=$this->input->post('page_title');
	$this->db->select('mid');
	$this->db->where('menu_name',$posted_mn);
	$query= $this->db->get('menu_setup');
	$test=$query->result();
	$gid=$test[0]->mid;

	$data=array(
		'page_title'=>$this->input->post('page_title'),
		'page_content'=>$this->input->post('page_content'),
		'pc_mid'=>$gid,
	);
if($pc_id==0){
	return $this->db->insert('page_content_setup',$data);

}
else{
	$this->db->where('pc_id',$pc_id);
	return $this->db->update('page_content_setup',$data);
}

}
public function get_page_content(){
	$query=$this->db->query('SELECT m.*, p.* FROM menu_setup m JOIN page_content_setup p on p.pc_mid=m.mid');
	return $query->result_array();
}

public function get_menu_unset(){
	$query=$this->db->query('SELECT m.menu_name,p.page_title from menu_setup m join page_content_setup p on m.mid=p.pc_mid ');
	return $query->result_array();
}

public function delete_content($pc_id){
	$this->db->where('pc_id',$pc_id);
	return $this->db->delete('page_content_setup');
}

/*write above here */
}
?>