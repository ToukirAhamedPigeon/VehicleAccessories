<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organization extends MY_Controller {

	public function index($id)
	{
		if($this->valid_normal()){
		$this->load->view('organizationprofile');
		}
		else
		{
			redirect('/Home/showlogin', 'refresh');
		}
	}
	
	private function valid_normal()
		{
		if(!$this->session->userdata('userid'))
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
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