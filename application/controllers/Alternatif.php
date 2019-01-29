<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_alternatif');
	}

	public function index()
	{
		$this->data['hasilAlternatif'] = $this->model_alternatif->getAlternatif('alternatif');
		$this->load->view('form_alternatif', $this->data) ;
	}

	function form_input()
	{
		$this->load->view('form_inputAlternatif');
		
	}

	function insert()
	{
		//nama dan alamat sesuai name ya ng ada di form input
		$nama = $_POST ['nama'];
		$tipe = $_POST ['tipe'];
		$harga = $_POST ['harga'];
		$bintang = $_POST ['bintang'];
		$fasilitas = $_POST ['fasilitas'];
		$strategis = $_POST ['strategis'];

		//save ke db (nama_lengkap dan alamat sesuai nama tabel di DB)
		$data  = array('nama_hotel'=> $nama, 'tipe_kamar'=> $tipe, 'harga'=> $harga, 'bintang'=> $bintang, 'fasilitas'=> $fasilitas, 'strategis'=> $strategis);
		$tambah = $this->model_alternatif->tambahData('alternatif', $data);
		if($tambah >0)
		{
			redirect ('Alternatif/index');
		}

		else
		{
			echo 'Gagal Disimpan';
		}

	}

	function delete($id)
	{
		$delete = $this->model_alternatif->hapus($id);

			if($delete > 0)
			{
				redirect('Alternatif/index');
			}
			else
			{
				echo 'Delete Gagal';
			}
		
 	}

 	function update($id)
	{
		//nama dan alamat sesuai name yang ada di form input
		$nama = $this->input->post('nama');
		$tipe = $this->input->post('tipe');
		$harga = $this->input->post('harga');
		$bintang = $this->input->post('bintang');
		$fasilitas = $this->input->post('fasilitas');
		$strategis = $this->input->post('strategis');

		//save ke db (nama_lengkap dan alamat sesuai nama tabel di DB)
		$data  = array('nama_hotel'=> $nama, 'tipe_kamar'=> $tipe, 'harga'=> $harga, 'bintang'=> $bintang, 'fasilitas'=> $fasilitas, 'strategis'=> $strategis);
		$edit = $this->model_alternatif->editDataTry($id, 'alternatif', $data);

		if($edit >0)
		{
			redirect ('Alternatif/index');
		}

		else
		{
			echo 'Gagal Update';
		}

	}

	 	function editTry($id)
 	{
 		$this->data['dataEditTry'] = $this->model_alternatif->dataEditTry('alternatif',$id);
 		$this->load->view('form_editAlternatif', $this->data);
 	}

}
