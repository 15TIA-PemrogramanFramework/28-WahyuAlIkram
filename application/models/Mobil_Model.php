<?php
/**
 * 
 */
 class Mobil_Model extends CI_Model
 {
 	public $nama_table = 'mobil';
	public $id = 'kode_mobil';
	public $id2 = 'tipe_mobil';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Mobil()
 	{
 		$data['mobil'] = $this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
 	}

 	function ambil_data_kode($kode_mobil)
 	{
 		$this->db->where($this->id,$kode_mobil);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function ambil_data_tipe($tipe_mobil)
 	{
 		$this->db->where($this->id2,$tipe_mobil);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function tambah_data($kode_mobil)
 	{
 		return $this->db->insert($this->nama_table, $kode_mobil);
 	}

 	function hapus_data($kode_mobil)
 	{
 		$this->db->where($this->id, $kode_mobil);
 		$this->db->delete($this->nama_table);
 	}

 	function edit_data($kode_mobil,$data)
 	{
 		$this->db->where($this->id, $kode_mobil);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>