<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organization extends MY_Controller {

	public function index($id)
	{
		$this->load->view('organizationprofile');
	}
	
		
	public function showAddOrganization()
	{
		$this->load->view('addorganization');
	}
	
	public function addOrganization()
	{
		
	}
	
	public function showEditOrganization($id)
	{
		$this->load->view('editorganization');
	}
	
	public function editOrganization()
	{
		
	}
	

	public function deactivate($id)
	{
		
	}
	
	public function activate()
	{
		
	}
		
}