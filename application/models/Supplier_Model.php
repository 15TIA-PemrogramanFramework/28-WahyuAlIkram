<?php
/**
 * 
 */
 class Supplier_Model extends CI_Model
 {
 	public $nama_table = 'supplier';
	public $id = 'kode_supplier';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	function Select_Supplier()
 	{
 		$data['supplier'] = $this->db->order_by($this->id, $this->order);
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

 	function edit_data($kode_supplier,$data)
 	{
 		$this->db->where($this->id, $kode_supplier);
 		$this->db->update($this->nama_table,$data);
 	}
 	function ubah_pass($kode_supplier,$password)
 	{
 		$this->db->set('password', $password);
 		$this->db->where($this->id, $kode_supplier);
 		$this->db->update($this->nama_table);
 	}
 } 
 ?>