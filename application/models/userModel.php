<?php
class userModel extends MY_Model{
	
	public function getUserInfoAll($field,$value)
	{
		 $this->db->select('*');
       $this->db->join('files', 'user.id=files.fileholder AND files.holdertype="user" AND filestatus="profile"', 'left');
       $result = $this->db->get_where('user',array($field =>$value));
       return $result->result_array();
	}
	
	public function getUserListAll()
	{
		  $this->db->select('*');
		  $this->db->from('user');
       $this->db->join('files', 'user.id=files.fileholder AND files.holdertype="user" AND filestatus="profile"', 'left');
       $result = $this->db->get();
       return $result->result_array();
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
	
	public function editUser($id,$data)
	{
		$this->db->where('id', $id);
       return $this->db->update('user', $data); 
	}
	
	public function getUser($username)
	{
		$q =$this->db->get_where('user', array('username' => $username));
		return $q->row();
	}
	
		
	public function deleteUser($id)
	{
		
	}

	public function like($value)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('files','user.id=files.fileholder AND files.holdertype="user" AND filestatus="logo"', 'left');
		$this->db->like('user.username',$value);
		$this->db->or_like('user.title',$value);
		$this->db->or_like('user.about',$value);
		$this->db->or_like('user.firstname',$value);
		$this->db->or_like('user.lastname',$value);
		$this->db->or_like('user.type',$value);
		$this->db->or_like('user.phone',$value);
		$this->db->or_like('user.street',$value);
		$this->db->or_like('user.thana',$value);
		$this->db->or_like('user.district',$value);
		$this->db->or_like('user.division',$value);
		$this->db->or_like('user.country',$value);
		$this->db->or_like('user.nid',$value);
		$this->db->or_like('user.city',$value);
		$this->db->or_like('user.email',$value);
		$result = $this->db->get();
		return $result->result_array();
	}
}