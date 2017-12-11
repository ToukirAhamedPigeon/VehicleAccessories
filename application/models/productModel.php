<?php
class productModel extends MY_Model{
	
	public function getPopularProduct($limit)
	{

	}
	
	public function getSuggestedProduct($limit)
	{
		
	}

	public function getProductInfoAll($field,$value)
	{
		$this->db->select('*');
		$this->db->join('files', 'product.id=files.fileholder AND files.holdertype="product" AND filestatus="logo"', 'left');
		$result = $this->db->get_where('product',array($field =>$value));
		return $result->result_array();
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
	
	public function editProduct($id, $array)
	{
		$this->db->where('id', $array['id']);
		$data = array(
			'name'=>$array['name'],
			'organizationid'=>$array['organizationid'],
			'category'=>$array['category'],
			'brand'=>$array['brand'],
			'price'=>$array['price'],
			'specification'=>$array['specification'],
			'unit'=>$array['unit']
		);
		return $this->db->update('product', $data); 
	}
	
	public function getProduct($id)
	{
		$this->db->select('*');
		$this->db->order_by('id', 'desc');
		$result = $this->db->get_where('product',array('organizationid' =>$id));
		return $result->result_array();
	}
	

	public function deleteProduct($field,$value)
	{
		return $this->db->delete('product', array($field => $value));
	}
}