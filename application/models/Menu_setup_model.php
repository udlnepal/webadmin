<?php
class Menu_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


 public function set_menu($mid = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('menu_name'), 'dash', TRUE);
 
        $data = array(
            'menu_name' => $this->input->post('menu_name'), 
            'is_inner_page' => $this->input->post('is_inner_page'),
            'menu_order' => $this->input->post('menu_order'),
            'slug' => $slug,
           	'ext_url' => $this->input->post('ext_url'),
           	'page_title' => $this->input->post('page_title'),
           	'page_content' => $this->input->post('page_content'),
           // 'page_id' => $this->input->post('mid'),
        );
        
        if ($mid == 0) {
            //$this->db->query('YOUR QUERY HERE');
            return $this->db->insert('menu_setup', $data);
        } else {
            $this->db->where('mid', $mid);
            return $this->db->update('menu_setup', $data);
        }
    }

    public function get_menu(){
    	$query=$this->db->get_where('menu_setup');
    	return $query->result_array();

    }



    public function get_page_content(){

    	$this->db->select('page_title');
    	$this->db->from('menu_setup');
    	$this->db->where('slug',$this->uri->segment(4));
		$query=$this->db->get()->row();
		$data=$query->page_title;
		print_r($data); exit;
	//	return $data;
	//	print_r ($query);
		/*$test=$this->uri->segment(4);
		echo $test;*/
		exit;
    	}
       


}
?>