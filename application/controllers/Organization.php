<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organization extends MY_Controller {

	public function index()
	{
		$orgname = $this->uri->segment(3);
		$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
		$data['org_info']=$this->organizationModel->getOrganizationInfoAll('name',$orgname);
		$data['productlist']=$this->productModel->getProductInfoAll('organizationid',$data['org_info'][0]['id']);
		$data['imagelist']=$this->filesModel->getPhotos($data['org_info'][0]['id'],'organization');
		$this->load->view('organizationprofile',$data);
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
		$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
		$this->load->view('addorganization',$data);
	}
	
	public function addOrganization()
	{
		if($_POST)
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
					$config=['upload_path'=> './assets/files/organization',
					'allowed_types'=>'jpg|gif|png|jpeg',
					'max_size'=>'10240'];
					$this->load->library('upload',$config);
					if(file_exists($_FILES['logo']['tmp_name']))
					{
						$filename=rand(100,999).$post['name'].getDateTime(2).'logo';
						$config['file_name'] = $filename;

						$this->upload->initialize($config);
						$this->load->library('upload',$config);
						if($this->upload->do_upload('logo'))
						{												 
							$fileAbout=$this->upload->data('logo');
							$fileinfo=array('fileholder'=>$id,'filestatus'=>'logo',
								'filepath'=>'assets/files/organization/'.$fileAbout['orig_name'],'holdertype'=>'organization');
							$this->filesModel->uploadFile($fileinfo);
						}
					}
					if(file_exists($_FILES['imagebox1']['tmp_name']))
					{
						$filename=rand(100,999).$post['name'].getDateTime(2).'image1';
						$config['file_name'] = $filename;

						$this->upload->initialize($config);
						$this->load->library('upload',$config);
						if($this->upload->do_upload('imagebox1'))
						{
							$fileAbout=$this->upload->data('imagebox1');
							$fileinfo=array('fileholder'=>$id,'filestatus'=>'image',
								'filepath'=>'assets/files/organization/'.$fileAbout['orig_name'],'holdertype'=>'organization');
							$this->filesModel->uploadFile($fileinfo);
						}
					}
					if(file_exists($_FILES['imagebox2']['tmp_name']))
					{
						$filename=rand(100,999).$post['name'].getDateTime(2).'image2';
						$config['file_name'] = $filename;

						$this->upload->initialize($config);
						if($this->upload->do_upload('imagebox2'))
						{													
							$fileAbout=$this->upload->data('imagebox2');

							$fileinfo=array('fileholder'=>$id,'filestatus'=>'image',
								'filepath'=>'assets/files/organization/'.$fileAbout['orig_name'],'holdertype'=>'organization');
							$this->filesModel->uploadFile($fileinfo);
						}
					}
					if(file_exists($_FILES['imagebox3']['tmp_name']))
					{
						$filename=rand(100,999).$post['name'].getDateTime(2).'image3';
						$config['file_name'] = $filename;

						$this->upload->initialize($config);
						if($this->upload->do_upload('imagebox3'))
						{
							$fileAbout=$this->upload->data('imagebox3');

							$fileinfo=array('fileholder'=>$id,'filestatus'=>'image',
								'filepath'=>'assets/files/organization/'.$fileAbout['orig_name'],'holdertype'=>'organization');
							$this->filesModel->uploadFile($fileinfo);
						}
					}
					if(file_exists($_FILES['imagebox4']['tmp_name']))
					{
						$filename=rand(100,999).$post['name'].getDateTime(2).'image4';
						$config['file_name'] = $filename;

						$this->upload->initialize($config);
						if($this->upload->do_upload('imagebox4'))
						{
							$fileAbout=$this->upload->data('imagebox4');
							$fileinfo=array('fileholder'=>$id,'filestatus'=>'image',
								'filepath'=>'assets/files/organization/'.$fileAbout['orig_name'],'holdertype'=>'organization');
							$this->filesModel->uploadFile($fileinfo);
						}
					}

					$this->session->set_flashdata('feedback','Organization added Successfully. Wait for being approved by Admin.');
					redirect('/Organization/showAddOrganization', 'refresh');
				}
			}
		}
	}

	public function showEditOrganization()
	{
		$orgname = $this->uri->segment(3);
		if($orgname!='')
		{
			$organizationinfo=$this->organizationModel->getOrganizationInfoAll('name',$orgname);
			if($organizationinfo!=null)
			{
				if($organizationinfo[0]['ownerid']==$this->session->userdata['userid'])
				{
					$data['orginfo']=$organizationinfo;
					$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
					$this->load->view('editorganization',$data);
				}
				else
				{
					redirect('/User/index/'.$this->session->userdata['username'], 'refresh');
				}
			}
			else
			{
				redirect('/User/index/'.$this->session->userdata['username'], 'refresh');
			}
		}
		else
		{
			redirect('/User/index/'.$this->session->userdata['username'], 'refresh');
		}
	}

	public function editOrganization()
	{
		if($_POST)
		{
			$orgname = $this->uri->segment(3);
			if($orgname!='')
			{
				$organizationinfo=$this->organizationModel->getOrganizationInfoAll('name',$orgname);
				if($organizationinfo!=null)
				{
					if($organizationinfo[0]['ownerid']==$this->session->userdata['userid'])
					{
						if ($this->form_validation->run('editOrganization') == FALSE)
						{
							$data['orginfo']=$organizationinfo;
							$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
							$this->load->view('editorganization',$data);
						}
						else
						{
							$data['orginfo']=$organizationinfo;
							$post=$this->input->post();
							$orgdata['id']=$organizationinfo[0]['id'];
							$orgdata['name']=$post['name'];
							$orgdata['website']=$post['website'];
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
							if($this->organizationModel->editOrganization($orgdata))
							{
								$config=['upload_path'=> './assets/files/organization',
								'allowed_types'=>'jpg|gif|png|jpeg',
								'max_size'=>'10240'];
								$this->load->library('upload',$config);
								if(file_exists($_FILES['logo']['tmp_name']))
								{
									$filename=rand(100,999).$post['name'].getDateTime(2).'logo';
									$config['file_name'] = $filename;

									$this->upload->initialize($config);
									$this->load->library('upload',$config);
									if($this->upload->do_upload('logo'))
									{									

										$fileAbout=$this->upload->data('logo');
										$fileinfo=array(
											'filepath'=>'assets/files/organization/'.$fileAbout['orig_name']);
										if($this->filesModel->updateFile($data['orginfo'][0]['fileid'],$fileinfo))
										{
											unlink($data['orginfo'][0]['filepath']);
										}
										else
										{
											$data['upload_error']='Updating file process has failed';
											$data['orginfo']=$organizationinfo;
											$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
											$this->load->view('editorganization',$data);
										}
									}
									else
									{
										$data['upload_error']='Uploading file process has failed';

										$data['orginfo']=$organizationinfo;
										$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
										$this->load->view('editorganization',$data);
									}
								}

								$this->session->set_flashdata('feedback','Organization edited Successfully.');
								redirect('/Organization/showEditOrganization/'.$data['orginfo'][0]['name'], 'refresh');
							}
							else
							{
								$data['orginfo']=$organizationinfo;
								$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
								$this->load->view('editorganization',$data);
							}
						}
					}
					else
					{
						redirect('/User/index/'.$this->session->userdata['username'], 'refresh');
					}
				}
				else
				{
					redirect('/User/index/'.$this->session->userdata['username'], 'refresh');
				}
			}
			else
			{
				redirect('/User/index/'.$this->session->userdata['username'], 'refresh');
			}
		}
		else
		{
			redirect('/User/index/'.$this->session->userdata['username'], 'refresh');
		}
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
		$this->load->model('productModel');
		if(!$this->session->userdata('userid'))
		{
			redirect('/Home/showlogin', 'refresh');
		}
	}
}