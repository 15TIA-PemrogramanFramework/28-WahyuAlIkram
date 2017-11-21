<?php 
/**
* 
*/
class Supplier extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Supplier_Model');
		
	}
	function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data2['username'] = $session_data['username'];
			$data['supplier'] = $this->Supplier_Model->Select_Supplier();
			$this->load->view('supplier/supplier_list', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}	
	}

	function tambah_supplier()
	{
		$data = array(
			'kode_supplier' => set_value('kode_supplier'),
			'username' => set_value('username'),
			'password' => set_value('password'),
			'nama_supplier' => set_value('name_supplier'),
			'jenis_kelamin' => set_value('jenis_kelamin'),
			'alamat' => set_value('alamat'),
			'nohp_supplier' => set_value('nohp_supplier'),
			'button' => 'Tambah',
			'action' => site_url('supplier/tambah_supplier_aksi')
			);
		$this->load->view('supplier/supplier_form', $data);
	}

	function tambah_supplier_aksi()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama_supplier' => $this->input->post('nama_supplier'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat'),
			'nohp_supplier' => $this->input->post('nohp_supplier'),
			);
		$this->Supplier_Model->tambah_data($data);
		redirect(site_url('supplier'));
	}

	function delete($id)
	{
		$this->Supplier_Model->hapus_data($id);
		redirect(site_url('supplier'));
	}

	function edit($id)
	{
		$supplier=($this->Supplier_Model->ambil_data_id($id));
		$data = array(
			'kode_supplier' => set_value('kode_supplier',$supplier->kode_supplier),
			'username' => set_value('username',$supplier->username),
			'password' => set_value('password',$supplier->password),
			'nama_supplier' => set_value('name_supplier',$supplier->nama_supplier),
			'jenis_kelamin' => set_value('jenis_kelamin',$supplier->jenis_kelamin),
			'alamat' => set_value('alamat',$supplier->alamat),
			'nohp_supplier' => set_value('nohp_supplier',$supplier->nohp_supplier),
			'button' => 'Simpan',
			'action' => site_url('supplier/edit_aksi')
			);
		$this->load->view('supplier/supplier_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama_supplier' => $this->input->post('nama_supplier'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat'),
			'nohp_supplier' => $this->input->post('nohp_supplier'),
			);
		$kode_supplier = $this->input->post('kode_supplier');
		$this->Supplier_Model->edit_data($kode_supplier,$data);
		redirect(site_url('supplier'));
	}

	function ubah_password($id)
	{
		$supplier=($this->Supplier_Model->ambil_data_id($id));
		$data = array(
			'username' => set_value('username',$supplier->kode_supplier),
			'button' => 'Simpan',
			'input' => false,
			'action' => site_url('supplier/ubah_password_aksi')
			);
		$this->load->view('ubah_password', $data);
	}

	function ubah_password_aksi()
	{
		$passlama = $this->input->post('passwordlama');
		$passbaru = $this->input->post('passwordbaru');
		$username = $this->input->post('username');
		$supplier=($this->Supplier_Model->ambil_data_id($username));
		$passvalid = $supplier->password;
		
		if(($passlama) == $passvalid){
			$this->Supplier_Model->ubah_pass($username,$passbaru);
		redirect(site_url('supplier'));
	}		
}
}
?>