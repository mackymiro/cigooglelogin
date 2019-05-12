<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {
	
	//getItemInfoEdit
	public function getItemInfoEdit($id){
		return $this->db->get_where('post', array('id'=>$id))->row_object();
	}
	
	//getItemInfo
	public function getItemInfo($id){
		return $this->db->get_where('post', array('user_id'=>$id))->result_object();
	}
	
	//saveItem
    public function saveItem($data){
		$this->db->insert('post', $data);
		 
    }
  
  
}
