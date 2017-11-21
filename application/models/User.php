<?php
/**
 * 
 */
class User extends CI_Model
{

	function login($username, $password, $pilihan)
	{
		if($pilihan == 1){
			$this->db->select('username kode, nama_dealer nama, username, password, jenis_kelamin, alamat, nohp_dealer');
			$this->db->from('dealer');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->limit(1);

			$query = $this->db->get();

			if($query->num_rows() == 1)
			{
				$this->session->set_userdata('status', 'dealer');
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		else if($pilihan == 2){
			$this->db->select('kode_supplier kode, nama_supplier nama, username, password, jenis_kelamin, alamat, nohp_supplier');
			$this->db->from('supplier');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->limit(1);

			$query = $this->db->get();

			if($query->num_rows() == 1)
			{
				$this->session->set_userdata('status', 'supplier');
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		else{
			$this->db->select('kode_pembeli kode, nama_pembeli nama, username, password, jenis_kelamin, alamat, nohp_pembeli');
			$this->db->from('pembeli');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->limit(1);

			$query = $this->db->get();

			if($query->num_rows() == 1)
			{
				$this->session->set_userdata('status', 'pembeli');
				return $query->result();
			}
			else
			{
				return false;
			}
		}

	}
} 
?>