<?php
class filesModel extends MY_Model{
	
	public function getPhotos($id,$holdertype)
	{
			$this->db->select('*');
		$result = $this->db->get_where('files',array('fileholder' =>$id, 'holdertype'=>$holdertype, 'filestatus'=>'image'));
		return $result->result_array();
	}
	public function getAllPhotos($id,$holdertype)
	{
			$this->db->select('*');
		$result = $this->db->get_where('files',array('fileholder' =>$id, 'holdertype'=>$holdertype));
		return $result->result_array();
	}
	public function getSinglePhoto($id)
	{
			$this->db->select('*');
		$result = $this->db->get_where('files',array('fileid' =>$id));
		return $result->result_array();
		
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
	public function deleteFile($field,$value,$holdertype)
	{
		return $this->db->delete('files', array($field => $value,'holdertype'=>$holdertype)); 
	}
}