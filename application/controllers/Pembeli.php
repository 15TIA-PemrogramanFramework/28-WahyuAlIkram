<?php 
/**
* 
*/
class Pembeli extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pembeli_Model');
		
	}
	function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data2['username'] = $session_data['username'];
			$data['pembeli'] = $this->Pembeli_Model->Select_Pembeli();
			$this->load->view('pembeli/pembeli_list', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}	
	}

	function tambah_pembeli()
	{
		$data = array(
			'kode_pembeli' => set_value('kode_pembeli'),
			'username' => set_value('username'),
			'password' => set_value('password'),
			'nama_pembeli' => set_value('name_pembeli'),
			'jenis_kelamin' => set_value('jenis_kelamin'),
			'alamat' => set_value('alamat'),
			'nohp_pembeli' => set_value('nohp_pembeli'),
			'button' => 'Tambah',
			'action' => site_url('pembeli/tambah_pembeli_aksi')
			);
		$this->load->view('pembeli/pembeli_form', $data);
	}

	function tambah_pembeli_aksi()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama_pembeli' => $this->input->post('nama_pembeli'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat'),
			'nohp_pembeli' => $this->input->post('nohp_pembeli'),
			);
		$this->Pembeli_Model->tambah_data($data);
		redirect(site_url('pembeli'));
	}

	function delete($id)
	{
		$this->Pembeli_Model->hapus_data($id);
		redirect(site_url('pembeli'));
	}

	function edit($id)
	{
		$pembeli=($this->Pembeli_Model->ambil_data_id($id));
		$data = array(
			'kode_pembeli' => set_value('kode_pembeli',$pembeli->kode_pembeli),
			'username' => set_value('username',$pembeli->username),
			'password' => set_value('password',$pembeli->password),
			'nama_pembeli' => set_value('name_pembeli',$pembeli->nama_pembeli),
			'jenis_kelamin' => set_value('jenis_kelamin',$pembeli->jenis_kelamin),
			'alamat' => set_value('alamat',$pembeli->alamat),
			'nohp_pembeli' => set_value('nohp_pembeli',$pembeli->nohp_pembeli),
			'button' => 'Simpan',
			'action' => site_url('pembeli/edit_aksi')
			);
		$this->load->view('pembeli/pembeli_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama_pembeli' => $this->input->post('nama_pembeli'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat'),
			'nohp_pembeli' => $this->input->post('nohp_pembeli'),
			);
		$kode_pembeli = $this->input->post('kode_pembeli');
		$this->Pembeli_Model->edit_data($kode_pembeli,$data);
		redirect(site_url('pembeli'));
	}

	function ubah_password($id)
	{
		$pembeli=($this->Pembeli_Model->ambil_data_id($id));
		$data = array(
			'username' => set_value('username',$pembeli->kode_pembeli),
			'button' => 'Simpan',
			'input' => false,
			'action' => site_url('pembeli/ubah_password_aksi')
			);
		$this->load->view('ubah_password', $data);
	}

	function ubah_password_aksi()
	{
		$passlama = $this->input->post('passwordlama');
		$passbaru = $this->input->post('passwordbaru');
		$username = $this->input->post('username');
		$pembeli=($this->Pembeli_Model->ambil_data_id($username));
		$passvalid = $pembeli->password;
		
		if(($passlama) == $passvalid){
			$this->Pembeli_Model->ubah_pass($username,$passbaru);
		redirect(site_url('pembeli'));
	}		
}
}
?>