<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_alternatif extends CI_Model {

	public function getAlternatif($table_name)
	{
		$get_alternatif = $this->db->get($table_name);
		return $get_alternatif->result_array();
	}

	function tambahData($table_name,$data)
	{
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}

	// function dataEdit($table_name, $id)
	// {
	// 	$this->db->where('id_hotel', $id);
	// 	$get_alternatif = $this->db->get($table_name);
	// 	return $get_alternatif->row();
	// }

	function hapus($id)
	{
		$this->db->where('id_hotel', $id);
		return $this->db->delete('alternatif');
	}

	// function editData($id, $table_name,$data)
	// {
	// 	$this->db->where('id_hotel', $id);
	// 	$edit = $this->db->update($table_name, $data);
	// 	return $edit;
	// }

	function dataEditTry($table_name, $id)
	{
		$this->db->where('id_hotel', $id);
		$get_alternatif = $this->db->get($table_name);
		return $get_alternatif->row();
	}

	function editDataTry($id, $table_name,$data)
	{
		$this->db->where('id_hotel', $id);
		$edit = $this->db->update($table_name, $data);
		return $edit;
	}

}

