<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Basic_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /////basic query start///
    public function getAllRecords($tableName)
    {
        $this->db->select('*');
        $result = $this->db->get($tableName);
        return $result->result_array();
    }

    public function getAllRecords_order_by($tableName, $order_by, $type)
    {
        $this->db->select('*');
        $this->db->from($tableName);
        $this->db->order_by($order_by, $type);
        $result = $this->db->get();
        return $result->result_array();
    }

    public function insert($tablename, $tabledata)
    {
        $this->db->insert($tablename, $tabledata);
    }

    public function insert_ret($tablename, $tabledata)
    {
        $this->db->insert($tablename, $tabledata);
        return $this->db->insert_id();
    }

    public function update_function($columnName, $columnVal, $tableName, $data)
    {
        $this->db->where($columnName, $columnVal);
        $this->db->update($tableName, $data);
    }

    public function updateCond($cond, $tableName, $data)
    {
        $whr= '('.$cond.')';
        $this->db->where($whr);
        $this->db->update($tableName, $data);
    }

    public function delete_function($tableName, $columnName, $columnVal)
    {
        $this->db->where($columnName, $columnVal);
        $this->db->delete($tableName);
    }

    public function delete_function_cond($tableName, $cond)
    {
        $where = '( ' . $cond . ' )';
        $this->db->where($where);
        $this->db->delete($tableName);
    }

    public function getWhere($selector, $field, $value, $tablename)
    {
        $this->db->select($selector);
        $result = $this->db->get_where($tablename,array($field =>$value));
        return $result->result_array();
    }
    public function getWhereOrder($selector, $condition, $tablename,$order_cond,$order_type)
    {
        $this->db->select($selector);
        $this->db->from($tablename);
        $this->db->where($condition);
        $this->db->order_by($order_cond,$order_type);
        $result = $this->db->get();
        return $result->result_array();
    }
    public function SingelGetWhere($selector, $condition, $tablename)
    {
        $this->db->select($selector);
        $this->db->from($tablename);
        $this->db->where($condition);
        $result = $this->db->get();
        return $result->row_array();
    }

    public function SingelNumRow($selector, $condition, $tablename)
    {
        $this->db->select($selector);
        $this->db->from($tablename);
        $where = '(' . $condition . ')';
        $this->db->where($where);
        $result = $this->db->get();
        return $result->num_rows();
    }

    public function getAllRecordsFrom($tableName,$filetype)
    {
         $this->db->select('*');
          $this->db->from($tableName);
       $this->db->join('files',$tableName.'.id=files.fileholder AND files.holdertype="'.$tableName.'" AND filestatus="'.$filetype.'"', 'left');
       $result = $this->db->get();
       return $result->result_array();
    }

    public function changeStatus($tableName,$field,$value,$status)
    {
        $data = array(
               'status' => $status
            );
        $this->db->where($field, $value);
       return $this->db->update($tableName, $data); 
    }
}

?>