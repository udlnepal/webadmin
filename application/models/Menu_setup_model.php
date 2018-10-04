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
         
        );
        
        if ($mid == 0) {
           
            return $this->db->insert('menu_setup', $data);
        } else {
            $this->db->where('mid', $mid);
            return $this->db->update('menu_setup', $data);
        }
    }

    public function get_menu(){
    	$this->db->select('*');
        $this->db->from('menu_setup');
        $this->db->order_by("menu_order", "asc");
        $query=$this->db->get(); 
    	return $query->result_array();

    }
    /* menu with inner page */
    public function get_menu_inner(){
        $this->db->select('*');
        $this->db->from('menu_setup');
        $this->db->where("is_inner_page","yes");
        $query=$this->db->get();
        return $query->result_array();
    }


    public function get_page_content(){


    	$this->db->select('page_title,page_content');
    	$this->db->from('menu_setup');
    	$this->db->where('slug',$this->uri->segment(3));
		$query=$this->db->get();

     return $query->result();

    	}
    
       
 public function delete_menu($mid)
    {
        $this->db->where('mid', $mid);
        return $this->db->delete('menu_setup');
    }


}
?>