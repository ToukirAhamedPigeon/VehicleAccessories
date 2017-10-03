<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {
	
	public function index($id)
	{
		$this->load->view('userprofile');
	}
   
	public function showlogin()
	{
		$this->load->view('login');
	}
	
	public function login()
	{
		
	}
	
	public function logout()
	{
		
	}
	
	public function showRegistration()
	{
		$this->load->view('registrationuser');
	}
	
	public function registration()
	{
		
	}
	
	public function showEditUser($id)
	{
		$this->load->view('edituser');
	}
	
	public function editUser()
	{
		
	}
	
		
	public function showChangePassword($id)
	{
		$this->load->view('changepassword');
	}
	
	public function ChangePassword()
	{
		
	}
	
	public function deactivate()
	{
		
	}
	
	public function activate()
	{
		
	}
}
	