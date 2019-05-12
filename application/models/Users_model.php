<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
	//delete
	public function delete($id){
		 $this->db->where('id', $id)->delete('post');
	}
	
	//checkUser
	public function checkUser($id){
		 return $this->db->get_where('users', array('oauth_uid'=>$id))->row_object();
	}
    
	//save user
    public function save($data){
		$this->db->insert('users', $data);
		 return $this->db->insert_id();
    }
  
  
}
