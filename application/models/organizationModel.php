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
		$this->db->where('id', $array['id']);
		$data = array(
			'name'=>$array['name'],
			'website'=>$array['website'],
			'latitude'=>$array['latitude'],
			'longitude'=>$array['longitude'],
			'about'=>$array['about'],
			'rules'=>$array['rules'],
			'phone'=>$array['phone'],
			'street'=>$array['street'],
			'thana'=>$array['thana'],
			'city'=>$array['city'],
			'district'=>$array['district'],
			'division'=>$array['division'],
			'country'=>$array['country'],
			'email'=>$array['email']
		);
		return $this->db->update('organization', $data); 
	}
	
	public function getOrganization($name)
	{
		$q =$this->db->get_where('organization', array('name' => $name));
		return $q->row();
	}
	

	public function deleteOrganization($id)
	{
		
	}

	public function like($value)
	{
		$this->db->select('*');
		$this->db->from('organization');
		$this->db->join('files','organization.id=files.fileholder AND files.holdertype="organization" AND filestatus="logo"', 'left');
		$this->db->like('organization.name',$value);
		$this->db->or_like('organization.startdate',$value);
		$this->db->or_like('organization.about',$value);
		$this->db->or_like('organization.rate',$value);
		$this->db->or_like('organization.phone',$value);
		$this->db->or_like('organization.street',$value);
		$this->db->or_like('organization.thana',$value);
		$this->db->or_like('organization.district',$value);
		$this->db->or_like('organization.division',$value);
		$this->db->or_like('organization.country',$value);
		$this->db->or_like('organization.rules',$value);
		$this->db->or_like('organization.city',$value);
		$this->db->or_like('organization.email',$value);
		$this->db->or_like('organization.website',$value);
		$result = $this->db->get();
		return $result->result_array();
	}
}