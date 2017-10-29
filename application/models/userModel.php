<?php
class userModel extends MY_Model{
	
	public function getUserInfoAll($id)
	{
		 
	}
	
	public function getUserListAll()
	{
		 
	}
	
	public function getUserList($key,$value)
	{
		 
	}
	
	public function getSearchedUserList($key,$value)
	{
		 
	}
	
	public function addUser($array)
	{
		return $this->db->insert('user',$array);
	}
	
	public function editUser($array)
	{
		
	}
	
	public function getUser($username)
	{
		$q =$this->db->get_where('user', array('username' => $username));
		return $q->row();
	}
	
		
	public function deleteUser($id)
	{
		
	}
}