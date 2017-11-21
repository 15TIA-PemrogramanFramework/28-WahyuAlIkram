<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user','',TRUE);
	}

	function index()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_check_database');

		if($this->form_validation->run()==FALSE)
		{
			// Validasi Gagal, Arahkan Kembali Ke Login
			$this->load->view('login_view');
		}
		else
		{
			if($this->session->userdata('status') == 'dealer')
			{
				redirect('home','refresh');	
			}
			elseif ($this->session->userdata('status' == 'supplier')) {
				redirect('home','refresh');
			}
			else{
				redirect('home','refresh');
			}
			//Berhasil Login
		}

	}

	function check_database($password)
	{
		$username = $this->input->post('username');
		$pilihan = $this->input->post('pilihan');

   //query the database
		$result = $this->user->login($username, $password, $pilihan);

		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'username' => $row->username
					);
				$this->session->set_userdata('logged_in', $sess_array);
				$this->session->set_userdata('nama', $row->nama);
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('kode', $row->kode); 
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
}