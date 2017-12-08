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
		//$this->load->model('userModel');
		$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
		$this->load->view('addorganization',$data);
	}
	
	public function addOrganization()
	{

		if ($this->form_validation->run('addOrganization') == FALSE)
		{
			$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
			$this->load->view('addorganization',$data);
		}
		else
		{
			$post=$this->input->post();
			$orgdata['name']=$post['name'];
			$orgdata['ownerid']=$this->session->userdata('userid');
			$orgdata['latitude']=$post['latitude'];
			$orgdata['longitude']=$post['longitude'];
			$orgdata['about']=$post['about'];
			$orgdata['rules']=$post['rules'];
			$orgdata['phone']=$post['phone'];
			$orgdata['street']=$post['street'];
			$orgdata['thana']=$post['thana'];
			$orgdata['city']=$post['city'];
			$orgdata['district']=$post['district'];
			$orgdata['division']=$post['division'];
			$orgdata['country']=$post['country'];
			$orgdata['email']=$post['email'];
			$orgdata['startdate']=getDateTime(1);
			$orgdata['status']='not approved';
			$orgdata['closedate']='';
			$orgdata['paid']=0.0;
			$orgdata['rate']=0.0;
			$orgdata['totalrated']=0;
			$orgdata['website']=$post['website'];
			if($this->organizationModel->addOrganization($orgdata))
			{
				$organization=$this->organizationModel->getOrganization($post['name']);
				$id=$organization->id;

				if(isset($post['logo']))
				{
						$filename=rand(100,999).$post['name'].getDateTime(2).'logo';
						$config=['upload_path'=> './assets/files/organization',
						'allowed_types'=>'jpg|gif|png|jpeg',
						'file_name'=>$filename,
						'max_size'=>'10240'
					];
					$this->load->library('upload',$config);
					if($this->upload->do_upload('logo'))
					{
						$fileinfo=array('fileholder'=>$id,'filestatus'=>'logo',
							'filepath'=>'assets/files/organization/'.$fileAbout['orig_name'],'holdertype'=>'organization');
						$this->filesModel->uploadFile($fileinfo);
					}
				}
				if(isset($post['imagebox1']))
				{
						$filename=rand(100,999).$post['name'].getDateTime(2).'image1';
						$config=['upload_path'=> './assets/files/organization',
						'allowed_types'=>'jpg|gif|png|jpeg',
						'file_name'=>$filename,
						'max_size'=>'10240'
					];
					$this->load->library('upload',$config);
					if($this->upload->do_upload('imagebox1'))
					{
						$fileinfo=array('fileholder'=>$id,'filestatus'=>'image',
							'filepath'=>'assets/files/organization/'.$fileAbout['orig_name'],'holdertype'=>'organization');
						$this->filesModel->uploadFile($fileinfo);
					}
				}
				if(isset($post['imagebox2']))
				{
						$filename=rand(100,999).$post['name'].getDateTime(2).'image2';
						$config=['upload_path'=> './assets/files/organization',
						'allowed_types'=>'jpg|gif|png|jpeg',
						'file_name'=>$filename,
						'max_size'=>'10240'
					];
					$this->load->library('upload',$config);
					if($this->upload->do_upload('imagebox2'))
					{
						$fileinfo=array('fileholder'=>$id,'filestatus'=>'image',
							'filepath'=>'assets/files/organization/'.$fileAbout['orig_name'],'holdertype'=>'organization');
						$this->filesModel->uploadFile($fileinfo);
					}
				}
				if(isset($post['imagebox3']))
				{
						$filename=rand(100,999).$post['name'].getDateTime(2).'image3';
						$config=['upload_path'=> './assets/files/organization',
						'allowed_types'=>'jpg|gif|png|jpeg',
						'file_name'=>$filename,
						'max_size'=>'10240'
					];
					$this->load->library('upload',$config);
					if($this->upload->do_upload('imagebox3'))
					{
						$fileinfo=array('fileholder'=>$id,'filestatus'=>'image',
							'filepath'=>'assets/files/organization/'.$fileAbout['orig_name'],'holdertype'=>'organization');
						$this->filesModel->uploadFile($fileinfo);
					}
				}
				if(isset($post['imagebox4']))
				{
						$filename=rand(100,999).$post['name'].getDateTime(2).'image4';
						$config=['upload_path'=> './assets/files/organization',
						'allowed_types'=>'jpg|gif|png|jpeg',
						'file_name'=>$filename,
						'max_size'=>'10240'
					];
					$this->load->library('upload',$config);
					if($this->upload->do_upload('imagebox4'))
					{
						$fileinfo=array('fileholder'=>$id,'filestatus'=>'image',
							'filepath'=>'assets/files/organization/'.$fileAbout['orig_name'],'holdertype'=>'organization');
						$this->filesModel->uploadFile($fileinfo);
					}
				}
			}
		}
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