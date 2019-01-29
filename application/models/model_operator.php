<?php 
class model_operator extends CI_Model
{
	function register($data)
	{
		return $this->db->insert('operator',$data);
	}


	function login($username,$password)
	{
		$cek = $this->db->get_where('operator',array('username'=>$username,'password'=>md5($password)));
		if($cek->num_rows()>0)
		{
			return 1;
		}

		else
		{
			return 0;
		}

	}

	function getAdmin($table)
	{
		$data = $this->db->get($table);
		return $data->result_array();
	}

	function hapus($id)
	{
		$this->db->where('operator_id', $id);
		return $this->db->delete('operator');
	}

	// function dataEdit($table_name, $id)
	// {	
	// 	$this->db->where('operator_id', $id);
	// 	$get_admin = $this->db->get($table_name);
	// 	return $get_admin->row();
	// }

	// function editData($table_name, $id, $data)
	// {
	// 	$this->db->where('operator_id', $id);
	// 	$edit = $this->db->update($table_name, $data);
	// 	return $edit;
	// }



	function dataEdit($table_name, $id)
	{
		$this->db->where('operator_id', $id);
		$data = $this->db->get($table_name);
		return $data->row();
	}

	function editData($id, $table_name,$data)
	{
		$this->db->where('operator_id', $id);
		$edit = $this->db->update($table_name, $data);
		return $edit;
	}

}
