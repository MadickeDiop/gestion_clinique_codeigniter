<?php 

Class Usermodel extends CI_Model{

  public function getData(){

    $query = $this->db->get('tble_users');
    return $query->result();
    

  }

  public function register($data){

	return $this->db->insert('tble_users',$data);


	}

}

 ?>