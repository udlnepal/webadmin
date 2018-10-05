<?php 
class Content_setup_model extends CI_Model{

public function __construct(){
	$this->load->database();
}

public function set_content($home_cont_id=0){
$this->load->helper('url');
$posted_ct= $this->input->post('c_title');

$this->db->select('cat_setup_id');
$this->db->where('c_title',$posted_ct);
$query = $this->db->get('category_setup');

$test= $query->result();
$id=$test[0]->cat_setup_id;



$data=array(
'h_title'=>$this->input->post('h_title'),
'h_description'=>$this->input->post('h_description'),
'h_author'=>$this->input->post('h_author'),
'h_location'=>$this->input->post('h_location'),
'h_date'=>$this->input->post('h_date'),
'cat_id'=>$id,
);
if($home_cont_id==0){
	return $this->db->insert('home_content',$data);
}
else{
$this->db->where('home_cont_id',$home_cont_id);
return $this->db->update('home_cont_id',$data);

}
}	


public function get_content(){
$query = $this->db->query('SELECT home_content.*, category_setup.c_title FROM home_content JOIN category_setup ON home_content.cat_id=category_setup.cat_setup_id');
return $query->result_array();
}

/* get first cat content */
public function get_first_cont(){
	$query=$this->db->query('SELECT h.*,c.*,i.* FROM home_content h join category_setup c on c.cat_setup_id= h.cat_id left join home_image_setup i on h.home_cont_id=i.cont_id');
return $query->result_array();
}




public function delete_content($home_cont_id){
	$this->db->where('home_cont_id',$home_cont_id);
	return $this->db->delete('home_content');
}

/* write above here */
}
?>