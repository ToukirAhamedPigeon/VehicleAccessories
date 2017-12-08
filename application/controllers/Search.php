<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends MY_Controller {

	public function index()
	{
		if($this->session->userdata('userid'))
		{
			$data['current_user_info']=$this->userModel->getUserInfoAll('user.id',$this->session->userdata('userid'));
		}
		$data['activelink']='';
		if($_POST)
		{
			$post=$this->input->post();
			$this->session->set_userdata('activesearch',$post['searching']);
		}
		//$this->session->set_userdata('activesearch',);
		$data['activesearch']=$this->session->userdata('activesearch');
		$this->load->view('search',$data);
	}
	
	public function getBrandList()
	{
		
	}
	
	public function getSearchedBrandList()
	{
		
	}
	
	public function getProductList()
	{
		
	}
	
	public function getSearchedProductList()
	{
		
	}
	
	public function getOrganizationList()
	{
		
	}
	
	public function getSearchedOrganizationList()
	{
		
	}
	public function __construct() {
		parent::__construct();
		$this->load->model('userModel');
	}
	
}