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
	public function updateFile($fileid,$data)
	{
		$this->db->where('fileid', $fileid);
       return $this->db->update('files', $data); 
	}
	public function deleteFile($fileid)
	{
		
	}
}