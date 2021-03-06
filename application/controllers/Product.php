<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MY_Controller {

	public function index()
	{
		$productid=$this->uri->segment(3);
		$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
		$data['productinfo']=$this->productModel->getProductInfoAll('id',$productid);
		$data['organizationinfo']=$this->organizationModel->getOrganizationInfoAll('id',$data['productinfo'][0]['organizationid']);
		$data['imagelist']=$this->filesModel->getPhotos($data['productinfo'][0]['id'],'product');
		$this->load->view('productprofile',$data);
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
					if(file_exists($_FILES['logo']['tmp_name']))
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
					if(file_exists($_FILES['imagebox1']['tmp_name']))
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
					if(file_exists($_FILES['imagebox2']['tmp_name']))
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
					if(file_exists($_FILES['imagebox3']['tmp_name']))
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
					if(file_exists($_FILES['imagebox4']['tmp_name']))
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
		$productid=$this->uri->segment(3);
		$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
		$data['productinfo']=$this->productModel->getProductInfoAll('id',$productid);
		$data['organizationinfo']=$this->organizationModel->getOrganizationInfoAll('id',$data['productinfo'][0]['organizationid']);
		$this->load->view('editproduct',$data);
	}
	
	public function editProduct()
	{
		if($_POST)
		{
			$productid=$this->uri->segment(3);
			if($productid!='')
			{
				$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
				$data['productinfo']=$this->productModel->getProductInfoAll('id',$productid);
				$data['organizationinfo']=$this->organizationModel->getOrganizationInfoAll('id',$data['productinfo'][0]['organizationid']);
				if($data['organizationinfo']!=null)
				{
					if($data['organizationinfo'][0]['ownerid']==$this->session->userdata['userid'])
					{
						if ($this->form_validation->run('editProduct') == FALSE)
						{
							$this->load->view('editproduct',$data);
						}
						else
						{
							$post=$this->input->post();
							$prodata['id']=$productid;
							$prodata['name']=$post['name'];
							$prodata['organizationid']=$post['orgid'];
							$prodata['category']=$post['category'];
							$prodata['brand']=$post['brand'];
							$prodata['price']=$post['price'];
							$prodata['specification']=$post['specification'];
							$prodata['unit']=$post['unit'];
							if($this->productModel->editProduct($productid,$prodata))
							{
								$config=['upload_path'=> './assets/files/product',
								'allowed_types'=>'jpg|gif|png|jpeg',
								'max_size'=>'10240'];
								$this->load->library('upload',$config);
								if(file_exists($_FILES['logo']['tmp_name']))
								{
									$filename=rand(100,999).$post['name'].$post['orgid'].getDateTime(2).'logo';
									$config['file_name'] = $filename;

									$this->upload->initialize($config);
									$this->load->library('upload',$config);
									if($this->upload->do_upload('logo'))
									{									

										$fileAbout=$this->upload->data('logo');
										$fileinfo=array(
											'filepath'=>'assets/files/product/'.$fileAbout['orig_name']);
										if($this->filesModel->updateFile($data['productinfo'][0]['fileid'],$fileinfo))
										{
											unlink($data['productinfo'][0]['filepath']);
										}
										else
										{
											$data['upload_error']='Updating file process has failed';
											$this->load->view('editproduct',$data);
										}
									}
									else
									{
										$data['upload_error']='Uploading file process has failed';
										$this->load->view('editproduct',$data);
									}
								}
								$this->session->set_flashdata('feedback','Product edited Successfully.');
								redirect('/Product/showEditProduct/'.$data['productinfo'][0]['id'], 'refresh');
							}
							else
							{
								$this->load->view('editproduct',$data);
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
	

	public function showDelete($id)
	{
		$this->load->view('deleteproduct');
	}
	
	public function delete()
	{
		$id=$this->uri->segment(3);
		$proinfo=$this->productModel->getProductInfoAll('id',$id);
		$orginfo=$this->organizationModel->getOrganizationInfoAll('id',$proinfo[0]['organizationid']);
		if($this->productModel->deleteProduct('id',$id))
		{
			$imagelist=$this->filesModel->getAllPhotos($id,'product');
			foreach ($imagelist as $key) {
				unlink($key['filepath']);
			}
			if($this->filesModel->deleteFile('fileholder',$id,'product'))
			{
				redirect('/Organization/index/'.$orginfo[0]['name'], 'refresh');
			}
			else
			{
				redirect('/Organization/index/'.$orginfo[0]['name'], 'refresh');
			}
		}
		else
		{
			redirect('/Organization/index/'.$orginfo[0]['name'], 'refresh');
		}
	}

	public function insertFile()
	{
		if($_POST)
		{
			$post=$this->input->post();
			$config=['upload_path'=> './assets/files/product',
			'allowed_types'=>'jpg|gif|png|jpeg',
			'max_size'=>'10240'];
			$this->load->library('upload',$config);
			if(isset($post['imagebox1']))
			{
				$data['fileholder']=$post['fileholder'];
				$data['filestatus']='image';
				$data['holdertype']='product';
				$data['productinfo']=$this->productModel->getProductInfoAll('id',$data['fileholder']);
				$filename=rand(100,999).$data['productinfo'][0]['name'].$data['productinfo'][0]['organizationid'].getDateTime(2).'image';
				$config['file_name'] = $filename;

				$this->upload->initialize($config);

				if($this->upload->do_upload('imagebox1'))
				{
					$fileAbout=$this->upload->data('imagebox1');
					//print_r($fileAbout); die();
					$fileinfo=array('fileholder'=>$id,'filestatus'=>'image',
						'filepath'=>'assets/files/product/'.$fileAbout['orig_name'],'holdertype'=>'product');
					$this->filesModel->uploadFile($fileinfo);
					echo 'ok';
					//redirect('/Product/index/'.$data['fileholder'], 'refresh');
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
					echo 'not ok';
					//redirect('/Product/index/'.$data['fileholder'], 'refresh');
				}
			}
		}
	}

	public function deleteFile()
	{
		$proid=$this->uri->segment(3);
		$fileid=$this->uri->segment(4);
		$data['productinfo']=$this->productModel->getProductInfoAll('id',$proid);
		$data['organizationinfo']=$this->organizationModel->getOrganizationInfoAll('id',$data['productinfo'][0]['organizationid']);

		if($this->session->userdata('userid')==$data['organizationinfo'][0]['ownerid'])
		{
			$filinfo=$this->filesModel->getSinglePhoto($fileid);
			if($this->filesModel->deleteFile('fileid',$fileid,'product'))
			{
				unlink($filinfo[0]['filepath']);
				redirect('/Organization/index/'.$data['organizationinfo'][0]['name'], 'refresh');
			}
			else
			{
				redirect('/Organization/index/'.$data['organizationinfo'][0]['name'], 'refresh');
			}
		}
		else
		{
			redirect('/User/logout', 'refresh');
		}
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