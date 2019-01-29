<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	public function getKategori($table_name)
	{
		$get_kategori = $this->db->get($table_name);
		return $get_kategori->result_array();
	}

	function tambahData($table_name,$data)
	{
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}

	function dataEdit($table_name, $id)
	{
		$this->db->where('id_kategori', $id);
		$get_kategori = $this->db->get($table_name);
		return $get_kategori->row();
	}

	function hapus($id)
	{
		$this->db->where('id_kategori', $id);
		return $this->db->delete('kategori');
	}

	function editData($id, $table_name,$data)
	{
		$this->db->where('id_kategori', $id);
		$edit = $this->db->update($table_name, $data);
		return $edit;
	}

	// function insertbobotKategori()
	// {
	// 	$get_kategori = $this->db->get($table_name);
	// 	return $get_kategori->result_array();
	// }

}

