<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {
	
	public function index($id)
	{
		$this->sessioncheck();
		$this->load->view('userprofile');
	}
	
	private function sessioncheck()
	{
		if(!$this->session->userdata('userid'))
		{
			header("Location: ".$this->host()."User/showlogin");
		}
	}
   
	public function showlogin()
	{
		if(!$this->session->userdata('userid'))
		{
			$this->load->view('login');
		}
		else
		{
			$id=$this->session->userdata('userid');
			header("Location: ".$this->host()."User/index/".$id);
		}
	}
	
	public function login()
	{
		if ($this->form_validation->run('login') == FALSE)
      {
       $this->load->view('login');
      }
      else
      {
		  $post=$this->input->post();
		  unset($post['submit']);
		  $this->load->model('userModel');
		  if($user=$this->userModel->getUser($post['username']))
		  {
				 $id=$user->id;
			     $password=$user->password;
			  if($post['password']===$password)
			  {
				  $this->session->set_userdata('userid',$id);
				  header("Location: ".$this->host()."User/index/".$id);
			  }
			  else
			  {
				   $check_error='Password is not correct.'; 
				  $this->load->view('login',compact('check_error'));
			  }
		  }
		  else
		  {
			    $check_error='Invalid Username'; 
				$this->load->view('login',compact('check_error'));
		  }
	  }
	}
	
	public function logout()
	{
		$this->session->unset_userdata('userid');
		//echo($this->session->userdata('userid'));
		header("Location: ".$this->host()."User/showlogin");
	}
	
	public function showRegistration()
	{
		$this->load->view('registrationuser');
	}
	
	public function registration()
	{
	  if ($this->form_validation->run('registration') == FALSE)
      {
       $this->load->view('registrationuser');
      }
      else
      {
		 $post=$this->input->post();
		 unset($post['submit']);
		  unset($post['confirmpassword']);
		 // unset($post['labelcheckconfpass']);
		  $filename=rand(100,999).$post['username'].getDateTime(2);
         $config=['upload_path'=> './assets/files/profile',
				'allowed_types'=>'jpg|gif|png|jpeg',
				  'file_name'=>$filename,
				  'max_size'=>'10240'
				];
		  $this->load->library('upload',$config);
		  if($this->upload->do_upload('profile')){
			  $fileAbout=$this->upload->data('profile');
			  $this->load->model('userModel');
			  $this->load->model('filesModel');
			 if($this->userModel->addUser($post))
			 {
			  $user=$this->userModel->getUser($post['username']);
				 
				$id=$user->id;
				 //echo $id;
			  $fileinfo=array('fileholder'=>$id,'filestatus'=>'profile','filepath'=>'assets/files/profile/'.$fileAbout['orig_name'],'holdertype'=>'user');
			  if($this->filesModel->uploadFile($fileinfo))
			  {
				$this->session->set_flashdata('feedback','Registration Successful. Login with Username and Password.');
				header("Location: ".$this->host()."User/showlogin");
		 	  }
				 else
				 {
					  $upload_error='Adding Profile Picture process has failed';
			         
				  $this->load->view('registrationuser',compact('upload_error'));
				 }
			 }
			  else
			  {
				   $upload_error='Adding User process has failed';
			         
				  $this->load->view('registrationuser',compact('upload_error'));
			  }
			 
		  }
		  else
		  {
			  $upload_error=$this->upload->display_errors();
			   $this->load->view('registrationuser',compact('upload_error'));
		  }
      }
	}
	
	public function showEditUser($id)
	{
		$this->load->view('edituser');
	}
	
	public function editUser()
	{
		random();
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
	