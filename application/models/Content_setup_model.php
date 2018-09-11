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
/* write above here */
}
?>