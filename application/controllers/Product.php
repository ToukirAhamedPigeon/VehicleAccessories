<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MY_Controller {

	public function index($id)
	{
		$this->load->view('productprofile');
	}
	
		
	public function showAddProduct()
	{
		$this->load->view('addproduct');
	}
	
	public function addProduct()
	{
		
	}
	
	public function showEditProduct($id)
	{
		$this->load->view('editproduct');
	}
	
	public function editProduct()
	{
		
	}
	

	public function showDelete($id)
	{
		$this->load->view('deleteproduct');
	}
	
	public function delete()
	{
		
	}
}