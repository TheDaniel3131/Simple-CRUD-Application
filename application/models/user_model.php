<?php 

class user_model extends CI_model{

	function create($formArray){
		//INSERT INTO users (name, email) values (?, ?);
		$this->db->insert('users',$formArray);
	}

	function all(){
		// SELECT * from users
		return $users = $this->db->get('users')->result_array();
	}

	function getUser($userID){
		// SELECT * from users where user_id = "?"
		$this->db->where('user_id', $userID);
		return $user = $this->db->get('users')->row_array();

	}

	function updateUser($userID, $formArray){
		//UPDATE users SET name="?", email = "?" WHERE user_id = "?"
		$this->db->where('user_id', $userID);
		$this->db->update('users', $formArray); 

	}

	function deleteUser($userID){
		//DELETE from users WHERE user_id = "?"
		$this->db->where('user_id', $userID);
		$this->db->delete('users');		
	}




}
?>