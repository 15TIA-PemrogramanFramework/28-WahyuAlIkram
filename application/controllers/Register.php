<?php 
/**
 * 
 */
 class Register extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Supplier_Model');
 	}
 	function index()
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
			'action' => site_url('Register/tambah_supplier_aksi')
			);
		$this->load->view('Register', $data);
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
		redirect(site_url('Login'));
	}
 } ?>