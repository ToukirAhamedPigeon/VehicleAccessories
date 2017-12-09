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

	public function getOrganizationInfoAll($field,$value)
	{
		 $this->db->select('*');
		 $this->db->join('files', 'organization.id=files.fileholder AND files.holdertype="organization" AND filestatus="logo"', 'left');
       $result = $this->db->get_where('organization',array($field =>$value));
       return $result->result_array();
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