<?php 
/**
* 
*/
class Pembelian extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pembelian_Model');
		$this->load->model('Pembeli_Model');
		$this->load->model('Mobil_Model');
	}
	
	function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data2['username'] = $session_data['username'];
			$data['pembelian'] = $this->Pembelian_Model->Select_Pembelian();
			$this->load->view('Pembelian/Pembelian_list', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}	
	}

	function tambah_Pembelian()
	{
		$data = array(
			'kode_pembelian' => set_value('kode_pembelian'),
			'tanggal_pembelian' => set_value('tanggal_pembelian'),
			'pembeli' => $this->Pembeli_Model->Select_Pembeli(),
			'mobil' => $this->Mobil_Model->Select_Mobil(),
			'button' => 'Tambah',
			'action' => site_url('Pembelian/tambah_Pembelian_aksi')
			);
		$this->load->view('Pembelian/Pembelian_form', $data);
	}

	function tambah_Pembelian_aksi()
	{
		$data = array(
			'kode_pembelian' => $this->input->post('kode_pembelian'),
			'tanggal_pembelian' => $this->input->post('tanggal_pembelian'),
			'kode_pembeli' => $this->input->post('kode_pembeli'),
			'kode_mobil' => $this->input->post('kode_mobil'),
			);
		$this->Pembelian_Model->tambah_data($data);
		redirect(site_url('Pembelian'));
	}

	function delete($id)
	{
		$this->Pembelian_Model->hapus_data($id);
		redirect(site_url('Pemabelian'));
	}

	function edit($id)
	{
		$data = array(
			'tanggal_pembelian' => set_value('tanggal_pembelian',$pembelian->tanggal_pembelian),
			'pembeli' => $this->Pembeli_Model->Select_Pembeli(),
			'mobil' => $this->Mobil_Model->Select_Mobil(),
			'kode_pembelian' => set_value('kode_pembelian',$pembelian->kode_pembelian),
			'button' => 'Edit',
			'action' => site_url('pembelian/edit_aksi')
			);
		$this->load->view('pembelian/Pembelian_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'kode_pembelian' => $this->input->post('kode_pembelian'),
			'tanggal_pembelian' => $this->input->post('tanggal_pembelian'),
			'kode_pembeli' => $this->input->post('kode_pembeli'),
			'kode_mobil' => $this->input->post('kode_mobil'),
			);
		$kode_pembelian = $this->input->post('kode_pembelian');
		$this->Pembelian_Model->edit_data($kode_pembelian,$data);
		redirect(site_url('pembelian'));
	}

}
?>