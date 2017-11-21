<?php 
/**
* 
*/
class Mobil extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mobil_Model');
		$this->load->model('MobilHistory_Model');
		$this->load->model('Pembelian_Model');
		$this->load->model('Pemasukkan_Model');
	}
	function index()
	{
		if($this->session->userdata('logged_in'))
		{

			$session_data = $this->session->userdata('logged_in');
			$data2['username'] = $session_data['username'];
			$data['mobil'] = $this->Mobil_Model->Select_Mobil();
			$this->load->view('mobil/mobil_list', $data, $data2);
		}
		else
		{
			redirect('login', 'refresh');

		}		
	}

	function tambah_mobil()
	{
		$data = array(
			'tipe_mobil' => set_value('tipe_mobil'),
			'warna' => set_value('warna'),
			'harga' => set_value('harga'),
			'kode_mobil' => set_value('kode_mobil'),
			'button' => 'Tambah',
			'action' => site_url('mobil/tambah_mobil_aksi')
		);
		$this->load->view('mobil/mobil_form', $data);
	}

	function tambah_mobil_aksi()
	{
		$data = array(
			'tipe_mobil' => $this->input->post('tipe_mobil'),
			'warna' => $this->input->post('warna'),
			'harga' => $this->input->post('harga'),
		);
		
		$this->Mobil_Model->tambah_data($data);
		$this->MobilHistory_Model->tambah_data($data);

        $indeks = $this->db->insert_id(); 
		$indeks = $indeks-0;

		$tipe_mobil = $this->input->post('tipe_mobil');

		$data2 = array(
			'kode_pemasukkan' => set_value('kode_pemasukkan'),
			'tanggal_pemasukkan' => $this->session->userdata('tanggal'),
			'kode_supplier' => $this->session->userdata('kode'),
			'kode_mobil' => $indeks
		);
		$this->Pemasukkan_Model->tambah_data($data2);
		
		redirect(site_url('Mobil'));
	}

	function delete($kode_mobil)
	{
		$this->Mobil_Model->hapus_data($kode_mobil);
		redirect(site_url('mobil'));
	}

	function edit($kode_mobil)
	{
		$mobil=($this->Mobil_Model->ambil_data_kode($kode_mobil));
		$data = array(
			'tipe_mobil' => set_value('tipe_mobil',$mobil->tipe_mobil),
			'warna' => set_value('warna',$mobil->warna),
			'harga' => set_value('harga',$mobil->harga),
			'kode_mobil' => set_value('kode_mobil',$mobil->kode_mobil),
			'button' => 'Edit',
			'action' => site_url('mobil/edit_aksi')
		);
		$this->load->view('mobil/mobil_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'tipe_mobil' => $this->input->post('tipe_mobil'),
			'warna' => $this->input->post('warna'),
			'harga' => $this->input->post('harga'),
		);
		$kode_mobil = $this->input->post('kode_mobil');
		$this->Mobil_Model->edit_data($kode_mobil,$data);
		redirect(site_url('mobil'));
	}

	function beli_mobil($kode_mobil)
	{		
		$data2 = array(	
			'kode_pembelian' => set_value('kode_mobil'),
			'tanggal_pembelian' => $this->session->userdata('tanggal'),
			'kode_pembeli' => $this->session->userdata('kode'),
			'kode_mobil' => $kode_mobil,
		);
		$this->Pembelian_Model->tambah_data($data2);
		$this->Mobil_Model->hapus_data($kode_mobil);
		redirect(site_url('mobil'));
	}
}
?>