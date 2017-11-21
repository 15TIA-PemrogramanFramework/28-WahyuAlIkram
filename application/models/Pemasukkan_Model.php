<?php
/**
 * 
 */
class Pemasukkan_Model extends CI_Model
{
	public $nama_table = 'pemasukkan';
	public $id = 'kode_pemasukkan';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

 	//untuk mengambil data seluruh mahasiswa
	function Select_Pemasukkan()
	{
		$this->db->distinct();
		$this->db->select('p.tanggal_pemasukkan, s.nama_supplier, m.tipe_mobil, m.warna, m.harga, p.kode_pemasukkan');
		$this->db->from('pemasukkan p');
		$this->db->join('supplier s', 's.kode_supplier = p.kode_supplier');
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

	function edit_data($kode_pinjam,$data)
	{
		$this->db->where($this->id, $kode_pemasukkan);
		$this->db->update($this->nama_table,$data);
	}
} 
?>