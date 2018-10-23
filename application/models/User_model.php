<?php
class User_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_user($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('user');
           /* print_r($query); exit();*/
            return $query->result_array();
        }
 
        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }
    
    public function get_user_login($email, $password)
    {
        $query = $this->db->get_where('user', array('email' => $email, 'password' => md5($password)));        
        //return $query->num_rows();
     //   print_r ($query); exit;
        return $query->row_array();
    }
    

    public function set_user($id = 0)
    {
        $data = array(
            'firstname' => $this->input->post('firstname'),
          //  'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
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


    public function change_pwd($id=0){
    // print_r($_SESSION);exit;
    $changepwd= array(
        'password'=> md5($this->input->post('new_password')),
    );





/*$opwd =$this->db->get('user');*/
/*print_r ($changepwd);
exit;*/
//echo $opwd;
$opwd=($this->input->post('old_password'));
$this->db->where(array('id'=>$_SESSION['user_id'],'password'=>md5($opwd)));
$chk=$this->db->get('user')->row();

// echo $this->db->last_query();exit;
// print_r($chk);
// echo count($chk);exit;



// $opwd=$changepwd['password'];
// echo $opwd;

// $npwd=md5($this->input->post('old_password'));
    if (count($chk)<1) {
        // echo "Incorrect Password";
       // echo $npwd;
       return false;
       
    }
    //if old password do not match return false

  /*  if($id==0){
        return $this->db->insert('user',$changepwd);
    } else*/{
        $this->db->where('id',$_SESSION['user_id']);
        return $this->db->update('user',$changepwd);
    }

}  
    
}
