<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {
	
	public function index()
	{
		$this->load->view('Admin/Dashboard');
	}
	
	public function showaddbrand()
	{
		$this->load->view('Admin/addbrand');
	}
	
	public function showeditbrand()
	{
		$this->load->view('Admin/editbrand');
	}
	
	public function showdeletebrand()
	{
		$this->load->view('Admin/deletebrand');
	}
	
	public function addbrand()
	{
		
	}
	
	public function editbrand()
	{
		
	}
	
	public function deletebrand()
	{
		
	}
	
	
	public function showaddlookup()
	{
		$this->load->view('Admin/addlookup');
	}
	
	public function showeditlookup($id)
	{
		$this->load->view('Admin/editlookup');
	}
	
	public function showdeletelookup()
	{
		$this->load->view('Admin/deletelookup');
	}
	
	public function addlookup()
	{
		
	}
	
	public function editlookup($id)
	{
		
	}
	
	public function deletelookup()
	{
		
	}
	
	public function showIncreaseView()
	{
		$this->load->view('Admin/increaseView');
	}
	
	public function increaseView()
	{
		
	}
	
	public function getView()
	{
		
	}
	
	public function showDeleteUser($id)
	{
		$this->load->view('Admin/deleteuser');
	}
	
	public function deleteUser()
	{
		
	}
	
		
	public function showDeleteOrganization($id)
	{
		$this->load->view('Admin/deleteorganization');
	}
	
	public function deleteOrganization()
	{
		
	}
	
	public function showAdminMessage()
	{
		$this->load->view('Admin/AdminMessage');
	}
	
	public function adminMessage()
	{
		
	}
	
	public function showBan($id,$table)
	{
		$this->load->view('Admin/ban');
	}
	
	public function ban()
	{
		
	}
	
		
	public function unban()
	{
		
	}
	
	public function getBanlist($type)
	{
		
	}
	
	public function getUserList()
	{
		
	}
	
	public function getSearchedUserList()
	{
		
	}
	
	public function getLookUpList()
	{
		
	}
	
	public function confirmOrganization()
	{
		
	}
}
