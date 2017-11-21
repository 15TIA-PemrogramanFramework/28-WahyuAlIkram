<?php
/**
 * 
 */
 class Dealer_Model extends CI_Model
 {
 	public $nama_table = 'dealer';
	public $id = 'username';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Dealer()
 	{
 		$data['dealer'] = $this->db->order_by($this->id, $this->order);
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

 	function edit_data($username,$data)
 	{
 		$this->db->where($this->id, $username);
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