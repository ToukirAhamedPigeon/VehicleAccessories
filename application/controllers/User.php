<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {
	
	public function index()
	{
		$data['username']=$this->uri->segment(3);
		if($data['username']==$this->session->userdata('username'))
		{
			$data['activelink']='#profilelink';
		}
		$data['user_info']=$this->userModel->getUserInfoAll('user.username',$data['username']);
		$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
		$this->load->view('userprofile',$data);
	}
	public function logout()
	{
		$array = array('username' => '', 'userid' => '', 'usertype' => '');
		$this->session->unset_userdata($array);
		$this->session->sess_destroy();
		redirect('/Home/showlogin', 'refresh');
	}
	
	public function showEditUser()
	{
		$data['username']=$this->uri->segment(3);
		$data['user_info']=$this->basic_model->getWhere('*','username',$data['username'], 'user');
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
		$this->load->model('userModel');
       	if(!$this->session->userdata('userid'))
		{
			redirect('/Home/showlogin', 'refresh');
		}
    }
}
	