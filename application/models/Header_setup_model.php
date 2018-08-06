<?php
class Header_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


 public function get_header_title()
    {
       
    $query = $this->db->get_where('header_title_setup');
    return $query->result_array();
    }

 public function set_logo_name($id_title = 1,$file_name)
    {
        $this->load->helper('url');
 
        $data = array(
            'logo_image_name'=>$file_name,
            //'site_title' => $this->input->post('site_title'),
            /*'date' => $this->input->post('date'),
            'link_address' => $this->input->post('link_address')*/
        );
      //  print_r($data); exit;
   
        
            $this->db->where('id_title', 1);
            return $this->db->update('header_title_setup', $data);
           // print_r ($data); exit;
       
    }

    public function set_header_title($id_title=1,$data){
        $this->load->helper('url');
 
        $data = array(
'site_title' => $this->input->post('site_title')
        );

          $this->db->where('id_title', 1);
            return $this->db->update('header_title_setup', $data);

    }

   /*
     public function get_news_events_byid($ne_ql_id = 0)
    {
        if ($ne_ql_id === 0)
        {
            $query = $this->db->get('news_events');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('news_events', array('ne_ql_id' => $ne_ql_id));
        return $query->row_array();
    }


     public function set_news_events($ne_ql_id = 0)
    {
        $this->load->helper('url');
 
   
 
        $data = array(
            'ne_ql_type'=>$this->input->post('ne_ql_type'),
            'title' => $this->input->post('title'),
            'date' => $this->input->post('date'),
            'link_address' => $this->input->post('link_address')
        );
        //print_r($data);
        
   
        if ($ne_ql_id == 0) {
            return $this->db->insert('news_events', $data);
        } else {
            $this->db->where('ne_ql_id', $ne_ql_id);
            return $this->db->update('news_events', $data);
        }
    }
    
    public function delete_neq($ne_ql_id)
    {
        $this->db->where('ne_ql_id', $ne_ql_id);
        return $this->db->delete('news_events');
    }
    */


}
?>