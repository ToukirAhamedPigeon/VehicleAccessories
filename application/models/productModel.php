<?php
class productModel extends MY_Model{
	
	public function getPopularProduct($limit)
	{
	
	}
	
	public function getSuggestedProduct($limit)
	{
		
	}
		
	public function getAllProduct()
	{
		
	}
	
	public function getSearchedProduct($key,$value)
	{
		
	}
	
	public function addProduct($array)
	{
		return $this->db->insert('product',$array);
	}
	
	public function editProduct($array)
	{
		
	}
	
	public function getProduct($id)
	{
		$this->db->select('*');
        $this->db->order_by('id', 'desc');
        $result = $this->db->get_where('product',array('organizationid' =>$id));
        return $result->result_array();
	}
	
		
	public function deleteProduct($id)
	{
		
	}
}