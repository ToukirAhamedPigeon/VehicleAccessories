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
		$data['orglist']=$this->organizationModel->getOrganizationInfoAll('ownerid',$data['user_info'][0]['id']);
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
		$data['activelink']='#actionlink';
		$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
		$this->load->view('edituser',$data);
	}
	
	public function editUser()
	{
		$data['activelink']='#actionlink';
		$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
		if($_POST){
			if ($this->form_validation->run('editUser') == FALSE)
			{
				$this->load->view('edituser',$data);
			}
			else
			{
				$post=$this->input->post();
				unset($post['submit']);
				if(file_exists($_FILES['profile']['tmp_name']))
				{
					$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
					$filename=rand(100,999).$data['current_user_info'][0]['username'].getDateTime(2);
					$config=['upload_path'=> './assets/files/profile',
					'allowed_types'=>'jpg|gif|png|jpeg',
					'file_name'=>$filename,
					'max_size'=>'10240'
				];
				$this->load->library('upload',$config);
				if($this->upload->do_upload('profile')){
					$fileAbout=$this->upload->data('profile');
					$this->load->model('filesModel');
					$filetoupdate = array(
						'filepath' => 'assets/files/profile/'.$fileAbout['orig_name']
					);
					if($this->filesModel->updateFile($data['current_user_info'][0]['fileid'],$filetoupdate))
					{
						unlink($data['current_user_info'][0]['filepath']);
						
					}
					else
					{
						$data['upload_error']='Updating file process has failed';

						$this->load->view('edituser',$data);
					}
				}
				else
				{
					$data['upload_error']='Uploading file process has failed';

					$this->load->view('edituser',$data);
				}
			}
			$userupdate = array(
				'title' => $post['title'],
				'firstname' => $post['firstname'],
				'lastname' => $post['lastname'],
				'email' => $post['email'],
				'nid' => $post['nid'],
				'phone' => $post['phone'],
				'about' => $post['about'],
				'street' => $post['street'],
				'city' => $post['city'],
				'thana' => $post['thana'],
				'district' => $post['district'],
				'division' => $post['division'],
				'country' => $post['country']
			);
			if($this->userModel->editUser($data['current_user_info'][0]['id'],$userupdate))
			{
				$this->session->set_flashdata('feedback','Update Successful.');
				redirect('/User/logout', 'refresh');
			}
			else
			{
				$data['upload_error']='Updating user info process has failed';

				$this->load->view('edituser',$data);
			}
		}
	}
	else
	{
		redirect('/User/showEditUser', 'refresh');
	}
}


public function showChangePassword()
{
	$data['activelink']='#aboutlink';
	$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
	unset($data['current_user_info'][0]['password']);
	$this->load->view('changepassword',$data);
}

public function changePassword()
{
	if ($_POST) {
		$post=$this->input->post();
		unset($post['submit']);
		$data['activelink']='#aboutlink';
		$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
		if($post['oldpassword']==$data['current_user_info'][0]['password'])
		{
			if($this->form_validation->run('changePassword') == TRUE)
			{
				$userupdate = array(
					'password' => $post['password']
				);
				if($this->userModel->editUser($data['current_user_info'][0]['id'],$userupdate))
				{
					$this->session->set_flashdata('feedback','Password is changed. Login with new password.');
					redirect('/User/logout', 'refresh');
				}
				else
				{
					$data['upload_error']='password has not updated';

					$this->load->view('changepassword',$data);
					
				}

			}
			else
			{
				$this->load->view('changepassword',$data);
			}
		}
		else
		{

				//echo "ok"; die();
			$data['upload_error']='Old password does not match';

			$this->load->view('changepassword',$data);
		}
	}
	else
	{
		redirect('/User/showChangePassword', 'refresh');
	}
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
	$this->load->model('organizationModel');
	if(!$this->session->userdata('userid'))
	{
		redirect('/Home/showlogin', 'refresh');
	}
}

}
