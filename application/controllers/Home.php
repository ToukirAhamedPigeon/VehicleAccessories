<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		if($this->session->userdata('userid'))
		{
			$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
		}
		$data['activelink']='#homelink';
		$data['productlist']=$this->basic_model->getAllRecordsFrom('product','logo');
		$data['orglist']=$this->basic_model->getAllRecordsFrom('organization','logo');
		$this->load->view('home',$data);
	}

	public function aboutus()
	{
		if($this->session->userdata('userid'))
		{
			$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
		}
		$data['activelink']='#aboutlink';
		$this->load->view('aboutus',$data);
	}
	
	public function getPopular()
	{
		
	}
	
	public function getUserSuggession()
	{
		
	}
	
	public function getUserInfo()
	{
		
	}

	public function showlogin()
	{
		if(!$this->session->userdata('userid'))
		{
			$data['activelink']='#loginlink';
			$this->load->view('login',$data);
		}
		else
		{
			$username=$this->session->userdata('username');
			redirect('/User/index/'.$username, 'refresh');
		}
	}
	
	public function login()
	{
		if($_POST)
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
					$username=$user->username;
					$type=$user->type;
					if($post['password']===$password)
					{
						$this->basic_model->changeStatus('user','id',$id,'active');
						$this->session->set_userdata('userid',$id);
						$this->session->set_userdata('username',$username);
						$this->session->set_userdata('usertype',$type);


						redirect('/User/index/'.$username, 'refresh');
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
		else
		{
			redirect('/Home/showlogin', 'refresh');
		}
	}

	public function showRegistration()
	{
		$data['activelink']='#registerlink';
		$this->load->view('registrationuser',$data);
	}
	
	public function registration()
	{
		if($_POST){
			if ($this->form_validation->run('registration') == FALSE)
			{
				$this->load->view('registrationuser');
			}
			else
			{
				$post=$this->input->post();
				unset($post['submit']);
				unset($post['confirmpassword']);
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
					$fileinfo=array('fileholder'=>$id,'filestatus'=>'profile','filepath'=>'assets/files/profile/'.$fileAbout['orig_name'],'holdertype'=>'user');
					if($this->filesModel->uploadFile($fileinfo))
					{
						$this->session->set_flashdata('feedback','Registration Successful. Login with Username and Password.');
						redirect('/Home/showlogin', 'refresh');
					}
					else
					{
						$data['upload_error']='Adding Profile Picture process has failed';
						$this->load->view('registrationuser',compact($data));
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
	else
	{
		redirect('/Home/showRegistration', 'refresh');
	}
}

public function __construct() {
	parent::__construct();
	$this->load->model('userModel');
}


}
