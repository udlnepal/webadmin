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



     public function set_header_left_menu($id_hlm = 0)
    {
        $this->load->helper('url');
 
   
 
        $data = array(
            'icon_class'=>$this->input->post('icon_class'),
            'hl_menu_title' => $this->input->post('hl_menu_title'),
            'hl_menu_link' => $this->input->post('hl_menu_link'),
          
        );
        //print_r($data);
        
   
        if ($id_hlm == 0) {
            return $this->db->insert('header_left_menu', $data);
        } else {
           
            $this->db->where('id_hlm', $id_hlm);
            return $this->db->update('header_left_menu', $data);
        }
    }

public function get_header_left_menu()
    {
       
    $query = $this->db->get_where('header_left_menu');
    return $query->result_array();
    }

  

     public function get_header_left_menubyid($id_hlm = 0)
    {
        if ($id_hlm === 0)
        {
            $query = $this->db->get('header_left_menu');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('header_left_menu', array('id_hlm' => $id_hlm));
        return $query->row_array();
    }


    


    
    public function delete_left_menu($id_hlm)
    {
        $this->db->where('id_hlm', $id_hlm);
        return $this->db->delete('header_left_menu');
    }
    


}
?>