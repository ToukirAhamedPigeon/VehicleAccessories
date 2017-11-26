<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Others extends MY_Controller {
	
	public function addView()
	{
		
	}
	public function showAddLookup()
	{
		$this->load->view('Admin/addlookup');
	}
	public function getlookup()
	{
		echo "ok"; die();
		if($this->input->post())
		{
			$data=json_decode($this->input->post('data'));
			echo $data['type'];
		}
	}
}