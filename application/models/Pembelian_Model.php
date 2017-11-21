<?php
/**
 * 
 */
 class Pembelian_Model extends CI_Model
 {
 	public $nama_table = 'pembelian';
	public $id = 'kode_pembelian';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Pembelian()
 	{
 		$this->db->distinct();
 		$this->db->select('p.tanggal_pembelian, pb.nama_pembeli, m.tipe_mobil, m.warna, m.harga, p.kode_pembelian');
 		$this->db->from('pembelian p');
 		$this->db->join('pembeli pb', 'pb.kode_pembeli = p.kode_pembeli');
 		$this->db->join('mobil_history m', 'm.kode_mobil = p.kode_mobil');
 		return $this->db->get($this->nama_table)->result();


 		//$data['peminjaman'] = $this->db->order_by($this->id, $this->order);
 		//return $this->db->get($this->nama_table)->result();
 	}

 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

 	function hapus_data($id)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->delete($this->nama_table);
 	}

 	function edit_data($kode_pembelian,$data)
 	{
 		$this->db->where($this->id, $kode_pembelian);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>