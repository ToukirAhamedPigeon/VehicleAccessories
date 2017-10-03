<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends MY_Controller {

	public function index()
	{
		$this->load->view('message');
	}
	
	public function sentMessage()
	{
		
	}
	
	public function showNotification()
	{
		$this->load->view('notification');
	}
	
	public function sentNotification()
	{
		
	}
	
	public function sentGlobalMessage()
	{
		
	}
	
	public function showReport()
	{
		$this->load->view('report');
	}
	
	public function makeReport()
	{
		
	}
	
	public function showHelp()
	{
		$this->load->view('help');
	}
	
	public function help()
	{
		
	}
}