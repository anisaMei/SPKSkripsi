<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_kategori');
	}

	public function index()
	{
		$this->data['hasilKategori'] = $this->model_kategori->getKategori('kategori');
		$this->load->view('form_kategori', $this->data) ;
	}

	function form_input()
	{
		$this->load->view('form_inputKategori');
		
	}

	function insert()
	{
		//nama dan alamat sesuai name ya ng ada di form input
		$nama = $_POST ['nama_kategori'];

		//save ke db (nama_lengkap dan alamat sesuai nama tabel di DB)
		$data  = array('nama_kategori'=> $nama);
		$tambah = $this->model_kategori->tambahData('kategori', $data);
		if($tambah >0)
		{
			redirect ('Kategori/index');
		}

		else
		{
			echo 'Gagal Disimpan';
		}

	}

	function delete($id)
	{
		$delete = $this->model_kategori->hapus($id);

			if($delete > 0)
			{
				redirect('Kategori/index');
			}
			else
			{
				echo 'Delete Gagal';
			}
		
 	}

 	function edit($id)
 	{
 		$this->data['dataEdit'] = $this->model_kategori->dataEdit('kategori',$id);
 		$this->load->view('form_editKategori', $this->data);
 	}

 	function update($id)
	{
		//nama dan alamat sesuai name yang ada di form input
		$nama = $this->input->post('nama');

		//save ke db (nama_lengkap dan alamat sesuai nama tabel di DB)
		$data  = array('nama_kategori'=> $nama);
		$edit = $this->model_kategori->editData($id, 'kategori', $data);

		if($edit >0)
		{
			redirect ('Kategori/index');
		}

		else
		{
			echo 'Gagal Update';
		}

	}

	function bobotKategori()
	{
		$this->data['hasilKategori'] = $this->model_kategori->getKategori('kategori');
		$this->load->view('Kategori/form_bobotKategori', $this->data) ;
		// $this->load->view('blogfolder/blogviews'); 
	}

}
