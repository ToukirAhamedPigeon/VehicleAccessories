<?php
class brandModel extends MY_Model{
	
	public function getPopularBrand($limit)
	{
		
	}
	
	public function getSuggestedBrand($limit)
	{
		
	}
	
	public function getAllBrand()
	{
		
	}
	
	public function getSearchedBrand($key,$value)
	{
		
	}
	
	public function addOrganization($array)
	{
		
	}
	
	public function editBrand($array)
	{
		
	}
	
	public function getBrand($id)
	{
		
	}
	

	public function deleteBrand($id)
	{
		
	}

	public function like($value)
	{
		$this->db->select('*');
		$this->db->from('brand');
		$this->db->join('files','brand.id=files.fileholder AND files.holdertype="brand" AND filestatus="logo"', 'left');
		$this->db->like('brand.name',$value);
		$this->db->or_like('brand.startdate',$value);
		$this->db->or_like('brand.about',$value);
		$this->db->or_like('brand.rate',$value);
		$result = $this->db->get();
		return $result->result_array();
	}
}