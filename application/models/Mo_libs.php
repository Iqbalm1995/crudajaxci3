<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mo_libs extends CI_Model {

	public function tampil_data()
	{
        $this->db->from("t_lib");
        $this->db->order_by("id", "DESC");
        return $this->db->get();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}	

	public function get_id_val($where,$table)
	{
		$this->db->from($table);
		$this->db->where('id',$where);
		$query = $this->db->get();

		return $query->row_array();
	}

	public function get_by_id($id)
	{
		$this->db->from('t_lib');
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

}

/* End of file Mo_libs.php */
/* Location: ./application/models/Mo_libs.php */