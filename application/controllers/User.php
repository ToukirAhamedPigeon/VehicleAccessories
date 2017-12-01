<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {
	
	public function index($id)
	{
		$this->load->view('userprofile');
	}
	public function logout()
	{
		$this->session->unset_userdata('userid');
		redirect('/Home/showlogin', 'refresh');
	}
	
	public function showEditUser()
	{
		$data['id']=$this->uri->segment(3);
		$data['user_info']=$this->basic_model->getWhere('*','id',$data['id'], 'user');
		$this->load->view('edituser',$data);
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
		echo $this->host();
	}

	public function __construct() {
		parent::__construct();
       	if(!$this->session->userdata('userid'))
		{
			redirect('/Home/showlogin', 'refresh');
		}
    }
}
	