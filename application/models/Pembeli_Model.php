<?php
/**
 * 
 */
 class Pembeli_Model extends CI_Model
 {
 	public $nama_table = 'pembeli';
	public $id = 'kode_pembeli';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	function Select_Pembeli()
 	{
 		$data['pembeli'] = $this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
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

 	function edit_data($kode_pembeli,$data)
 	{
 		$this->db->where($this->id, $kode_pembeli);
 		$this->db->update($this->nama_table,$data);
 	}
 	function ubah_pass($username,$password)
 	{
 		$this->db->set('password', $password);
 		$this->db->where($this->id, $username);
 		$this->db->update($this->nama_table);
 	}
 } 
 ?>