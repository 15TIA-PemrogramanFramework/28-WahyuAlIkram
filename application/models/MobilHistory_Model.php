<?php
/**
 * 
 */
 class MobilHistory_Model extends CI_Model
 {
 	public $nama_table = 'mobil_history';
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

 	function ambil_data_kode($kode_history)
 	{
 		$this->db->where($this->id,$kode_history);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function ambil_data_tipe($tipe_mobil)
 	{
 		$this->db->where($this->id2,$tipe_mobil);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function tambah_data($kode_history)
 	{
 		return $this->db->insert($this->nama_table, $kode_history);
 	}

 	function hapus_data($kode_history)
 	{
 		$this->db->where($this->id, $kode_history);
 		$this->db->delete($this->nama_table);
 	}

 	function edit_data($kode_history,$data)
 	{
 		$this->db->where($this->id, $kode_history);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>