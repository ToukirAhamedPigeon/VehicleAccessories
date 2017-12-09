<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MY_Controller {

	public function index()
	{
		$this->load->view('productprofile');
	}
	

	public function showAddProduct()
	{
		$orgname = $this->uri->segment(3);
		if($orgname!='')
		{
			$organizationinfo=$this->organizationModel->getOrganizationInfoAll('name',$orgname);
			if($organizationinfo!=null)
			{
				if($organizationinfo[0]['ownerid']==$this->session->userdata['userid'])
				{
					$data['orgid']=$organizationinfo[0]['ownerid'];
					$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
					$this->load->view('addproduct',$data);
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
	
	public function addProduct()
	{
		if($_POST)
		{
			$post=$this->input->post();
			$organizationinfo=$this->organizationModel->getOrganizationInfoAll('id',$post['orgid']);

			if ($this->form_validation->run('addProduct') == FALSE)
			{
				$data['orgid']=$organizationinfo[0]['ownerid'];
					$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
				$this->load->view('addproduct',$data);
			}
			else
			{
				$prodata['name']=$post['name'];
				$prodata['organizationid']=$post['orgid'];
				$prodata['category']=$post['category'];
				$prodata['brand']=$post['brand'];
				$prodata['price']=$post['price'];
				$prodata['specification']=$post['specification'];
				$prodata['unit']=$post['unit'];
				$prodata['rate']=0;
				$prodata['status']='valid';
				$prodata['dateadded']=getDateTime(1);
				if($this->productModel->addProduct($prodata))
				{
					$product=$this->productModel->getProduct($post['orgid']);
					$id=$product[0]['id'];
					$config=['upload_path'=> './assets/files/product',
					'allowed_types'=>'jpg|gif|png|jpeg',
					'max_size'=>'10240'];
					$this->load->library('upload',$config);
					if(isset($_FILES['logo']))
					{
						$filename=rand(100,999).$post['name'].$post['orgid'].getDateTime(2).'logo';
						$config['file_name'] = $filename;

						$this->upload->initialize($config);
						$this->load->library('upload',$config);
						if($this->upload->do_upload('logo'))
						{												 
							$fileAbout=$this->upload->data('logo');
							$fileinfo=array('fileholder'=>$id,'filestatus'=>'logo',
								'filepath'=>'assets/files/product/'.$fileAbout['orig_name'],'holdertype'=>'product');
							$this->filesModel->uploadFile($fileinfo);
						}
					}
					if(isset($_FILES['imagebox1']))
					{
						$filename=rand(100,999).$post['name'].$post['orgid'].getDateTime(2).'image1';
						$config['file_name'] = $filename;

						$this->upload->initialize($config);
						$this->load->library('upload',$config);
						if($this->upload->do_upload('imagebox1'))
						{
							$fileAbout=$this->upload->data('imagebox1');
							$fileinfo=array('fileholder'=>$id,'filestatus'=>'image',
								'filepath'=>'assets/files/product/'.$fileAbout['orig_name'],'holdertype'=>'product');
							$this->filesModel->uploadFile($fileinfo);
						}
					}
					if(isset($_FILES['imagebox2']))
					{
						$filename=rand(100,999).$post['name'].$post['orgid'].getDateTime(2).'image2';
						$config['file_name'] = $filename;

						$this->upload->initialize($config);
						if($this->upload->do_upload('imagebox2'))
						{													
							$fileAbout=$this->upload->data('imagebox2');

							$fileinfo=array('fileholder'=>$id,'filestatus'=>'image',
								'filepath'=>'assets/files/product/'.$fileAbout['orig_name'],'holdertype'=>'product');
							$this->filesModel->uploadFile($fileinfo);
						}
					}
					if(isset($_FILES['imagebox3']))
					{
						$filename=rand(100,999).$post['name'].$post['orgid'].getDateTime(2).'image3';
						$config['file_name'] = $filename;

						$this->upload->initialize($config);
						if($this->upload->do_upload('imagebox3'))
						{
							$fileAbout=$this->upload->data('imagebox3');

							$fileinfo=array('fileholder'=>$id,'filestatus'=>'image',
								'filepath'=>'assets/files/product/'.$fileAbout['orig_name'],'holdertype'=>'product');
							$this->filesModel->uploadFile($fileinfo);
						}
					}
					if(isset($_FILES['imagebox4']))
					{
						$filename=rand(100,999).$post['name'].$post['orgid'].getDateTime(2).'image4';
						$config['file_name'] = $filename;

						$this->upload->initialize($config);
						if($this->upload->do_upload('imagebox4'))
						{
							$fileAbout=$this->upload->data('imagebox4');
							$fileinfo=array('fileholder'=>$id,'filestatus'=>'image',
								'filepath'=>'assets/files/product/'.$fileAbout['orig_name'],'holdertype'=>'product');
							$this->filesModel->uploadFile($fileinfo);
						}
					}

					$this->session->set_flashdata('feedback','Product added Successfully.');
					$data['orgname']=$organizationinfo[0]['name'];
					redirect('/Product/showAddProduct/'.$data['orgname'], 'refresh');
				}
			}
		}
		else
		{
			redirect('/User/index/'.$this->session->userdata['username'], 'refresh');
		}
	}
	
	public function showEditProduct($id)
	{
		$this->load->view('editproduct');
	}
	
	public function editProduct()
	{
		
	}
	

	public function showDelete($id)
	{
		$this->load->view('deleteproduct');
	}
	
	public function delete()
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