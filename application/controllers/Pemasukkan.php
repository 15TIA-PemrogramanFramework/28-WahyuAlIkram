<?php 
/**
* 
*/
class Pemasukkan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pemasukkan_Model');
		$this->load->model('Supplier_Model');
		$this->load->model('Mobil_Model');
	}
	
	function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data2['username'] = $session_data['username'];
			$data['pemasukkan'] = $this->Pemasukkan_Model->Select_Pemasukkan();
			$this->load->view('Pemasukkan/Pemasukkan_list', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}	
	}

	function tambah_Pemasukkan()
	{
		$data = array(
			'kode_pemasukkan' => set_value('kode_pemasukkan'),
			'tanggal_pemasukkan' => set_value('tanggal_pemasukkan'),
			'supplier' => $this->Supplier_Model->Select_Supplier(),
			'mobil' => $this->Mobil_Model->Select_Mobil(),
			'button' => 'Tambah',
			'action' => site_url('Pemasukkan/tambah_Pemasukkan_aksi')
			);
		$this->load->view('Pemasukkan/Pemasukkan_form', $data);
	}

	function tambah_Pemasukkan_aksi()
	{
		$data = array(
			'kode_pemasukkan' => $this->input->post('kode_pemasukkan'),
			'tanggal_pemasukkan' => $this->session->userdata('tanggal'),
			'kode_supplier' => $this->input->post('kode_supplier'),
			'kode_mobil' => $this->input->post('kode_mobil'),
			);
		$this->Pemasukkan_Model->tambah_data($data);
		redirect(site_url('Pemasukkan'));
	}

	function delete($id)
	{
		$this->Pemasukkan_Model->hapus_data($id);
		redirect(site_url('Pemasukkan'));
	}

	function edit($id)
	{
		$data = array(
			'tanggal_pemasukkan' => set_value('tanggal_pemasukkan',$pemasukkan->tanggal_pemasukkan),
			'supplier' => $this->Supplier_Model->Select_Supplier(),
			'mobil' => $this->Mobil_Model->Select_Mobil(),
			'kode_pemasukkan' => set_value('kode_pemasukkan',$pemasukkan->kode_pemasukkan),
			'button' => 'Edit',
			'action' => site_url('pemasukkan/edit_aksi')
			);
		$this->load->view('pemasukkan/Pemasukkan_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'kode_pemasukkan' => $this->input->post('kode_pemasukkan'),
			'tanggal_pemasukkan' => $this->input->post('tanggal_pemasukkan'),
			'kode_supplier' => $this->input->post('kode_supplier'),
			'kode_mobil' => $this->input->post('kode_mobil'),
			);
		$kode_pemasukkan = $this->input->post('kode_pemasukkan');
		$this->Pemasukkan_Model->edit_data($kode_pemasukkan,$data);
		redirect(site_url('pemasukkan'));
	}

}
?>