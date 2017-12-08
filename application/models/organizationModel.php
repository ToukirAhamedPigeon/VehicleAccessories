<?php
class organizationModel extends MY_Model{
	
	public function getPopularOrganization($limit)
	{
		
	}
	public function getSuggestedOrganization($limit)
	{
		
	}
	public function getAllOrganization()
	{
		
	}
	
	public function getSearchedOrganization($key,$value)
	{
		
	}
	
	public function addOrganization($array)
	{
		return $this->db->insert('organization',$array);
	}
	
	public function editOrganization($array)
	{
		
	}
	
	public function getOrganization($name)
	{
		$q =$this->db->get_where('organization', array('name' => $name));
		return $q->row();
	}
	
		
	public function deleteOrganization($id)
	{
		
	}
}