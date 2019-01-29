<?php 
class auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_operator');
		$this->load->library('form_validation');
	}

	function register()
	{
		$this->load->view('register');
	}
	
	function home()
	{
		$this->load->view('home');
	}

	function login()
	{
		if(isset($_POST['submit']))
		{
			//proses loginnya disini
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$hasil = $this->model_operator->login($username,$password);

			if($hasil==1)
			{
				$this->session->set_userdata(array('status_login'=>'oke'));
				$this->load->view('home');
			} 

			else
			{
				redirect('auth/login');
			}
		}
		else
		{
			$this->load->view('form_login');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('form_login');
	}

	function page_profil()
	{
		$this->data['hasilprofil'] = $this->model_operator->getAdmin('operator');
 		$this->load->view('form_admin', $this->data);
	}

	function delete($id)
	{
		$delete = $this->model_operator->hapus($id);

			if($delete > 0)
			{
				redirect('auth/page_profil');
			}
			else
			{
				echo 'Registrasi Gagal';
			}
		
 	}

 	function proses_register()
	{

		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[operator.username]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('register');			
		}
		else{
			$data=[
			' nama_lengkap'=>$this->input->post('nama_lengkap'),
			' username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))
			];

			$insert = $this->model_operator->register($data);

			if($insert)
			{
				redirect('auth/login');
			}
			else
			{
				echo 'Registrasi Gagal';
			}

		}
		
 	}

 	function edit($id)
 	{
 		$this->data['dataEdit'] = $this->model_operator->dataEdit('operator',$id);
 		$this->load->view('form_edit', $this->data);
 	}

 	function update($id)
	{
		//nama dan alamat sesuai name ya ng ada di form input
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password= md5($this->input->post('password'));

		//save ke db (nama_lengkap dan alamat sesuai nama tabel di DB)
		$data  = array('nama_lengkap'=> $nama, 'username'=>$username, 'password' =>$password);
		$edit = $this->model_operator->editData($id, 'operator', $data);
		if($edit >0)
		{
			redirect ('auth/page_profil');
		}

		else
		{
			echo 'Gagal Disimpan';
		}

	}


}