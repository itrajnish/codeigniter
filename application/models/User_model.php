<?php
class User_model extends CI_Model {

    function create($formArray){

        $this->db->insert('users', $formArray);  // Insert into users (name, email) values (? , ?)

    }

    function all(){

        return $user = $this->db->get('users')->result_array();   // select * from users

    }

    function getUser($userId){
    	$this->db->where('user_id', $userId);
    	return $user =  $this->db->get('users')->row_array(); // select * from users where user_id = ?
        
    }
    function updateUser($userId, $formArray){

    	$this->db->where('user_id', $userId);
    	$this->db->update('users', $formArray);   // udate users SET name = ?,  email = ? where user_id = ?
    }
    function deleteUser($userId){

        $this->db->where('user_id', $userId);
        $this->db->delete('users');    // delete fron users where user_id = ?

    }

}


?>