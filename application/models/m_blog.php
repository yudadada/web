<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_blog extends CI_Model {

	
	public function insert($table = '' , $data= '')
	{
		$this->db->insert($table,$data);
	}

	public function get_all($table)
	{
		$this->db->from($table);
		return $this->db->get();
	}

	public function get_where($table = null, $where = null)
	{
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}
	public function update($table = null, $data= null, $where = null)
	{
		$this->db->update($table,$data,$where);
	}

	public function del($table=null, $where = null)
	{
		$this->db->delete($table,$where);
	}
}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */