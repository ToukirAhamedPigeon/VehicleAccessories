<?php
class filesModel extends MY_Model{
	
	public function getPhotos($id,$holdertype)
	{
		
	}
	public function getCoverPhoto($id,$holdertype)
	{
		
	}
	
	public function uploadFile($array)
	{
		return $this->db->insert('files',$array);
	}
	public function updateFile($fileid,$file)
	{
		
	}
	public function deleteFile($fileid)
	{
		
	}
}