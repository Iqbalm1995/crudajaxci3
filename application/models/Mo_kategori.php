<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mo_kategori extends CI_Model {

	public function tampil_data()
	{
        $this->db->from("t_kategori");
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

}

/* End of file mo_kategori.php */
/* Location: ./application/models/mo_kategori.php */