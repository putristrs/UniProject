<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Model extends CI_Model {
   
 	function login($table, $field1, $field2) 
    {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

    public function tampil_data()
    {
       $query = $this->db->select('*')->from('tb_admin')
       ->get()->result();
       return $query;
       // echo "<pre>";
       //  var_dump($query);die();

    }

    public function ubahprofile($id,$data)
    {
        $id = $this->input->post("id");
        $data = array( 
       'username' => $this->input->post("username"),
       'password' => $this->input->post("password"),
          );
        $this->db->where('id',$id);
        $this->db->update('tb_admin', $data);
    }

}