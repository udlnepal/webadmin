<?php
class Admin_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_user($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('user');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }

public function get_logged_user(){
 /*    if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        } else {*/

    $this->db->select('firstname');
    $this->db->from('user');
    $this->db->where('email', $this->session->userdata('email'));
    $query=$this->db->get()->row();
    $data= $query->firstname;
    return $data;
/*}*/
}


    
    public function get_user_login($email, $password)
    {
        $query = $this->db->get_where('user', array('email' => $email, 'password' => md5($password)));        
        //return $query->num_rows();
        return $query->row_array();
    }
    
    public function set_user($id = 0)
    {


        $data = array(
            'fname' => $this->input->post('fname'),          
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'updated_at' => date('Y-m-d H:i:s')
        );
           
        if ($id == 0) {
           
            return $this->db->insert('user', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('user', $data);
        }
    }
    
    public function delete_user($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }    
    
}
