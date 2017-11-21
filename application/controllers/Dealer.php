<?php 
/**
* 
*/
class Dealer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Dealer_Model');
	}
	function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data2['username'] = $session_data['username'];
			$data['dealer'] = $this->Dealer_Model->Select_Dealer();
			$this->load->view('Dealer/Dealer_list', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}	
	}

	function tambah_Dealer()
	{
		$data = array(
			'nama_dealer' => set_value('nama_dealer'),
			'username' => set_value('username'),
			'password' => set_value('password'),
			'jenis_kelamin' => set_value('jenis_kelamin'),
			'alamat' => set_value('alamat'),
			'nohp_dealer' => set_value('nohp_dealer'),
			'button' => 'Tambah',
			'input' => true,
			'action' => site_url('Dealer/tambah_Dealer_aksi')
			);
		$this->load->view('Dealer/Dealer_form', $data);
	}

	function tambah_Dealer_aksi()
	{
		$data = array(
			'nama_dealer' => $this->input->post('nama_dealer'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat'),
			'nohp_dealer' => $this->input->post('nohp_dealer'),
			);
		$this->Dealer_Model->tambah_data($data);
		redirect(site_url('Dealer'));
	}

	function delete($id)
	{
		$this->Dealer_Model->hapus_data($id);
		redirect(site_url('Dealer'));
	}

	function edit($id)
	{
		$dealer=($this->Dealer_Model->ambil_data_id($id));
		$data = array(
			'nama_dealer' => set_value('nama_dealer',$dealer->nama_dealer),
			'username' => set_value('username',$dealer->username),
			'password' => set_value('password',$dealer->password),
			'jenis_kelamin' => set_value('jenis_kelamin',$dealer->jenis_kelamin),
			'alamat' => set_value('alamat',$dealer->alamat),
			'nohp_dealer' => set_value('nohp_dealer',$dealer->nohp_dealer),
			'button' => 'Simpan',
			'input' => true,
			'action' => site_url('Dealer/edit_aksi')
			);
		$this->load->view('Dealer/Dealer_form', $data);
	}

	function edit_aksi()
	{
		$data = array('nama_dealer' => $this->input->post('nama_dealer'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat'),
			'nohp_dealer' => $this->input->post('nohp_dealer'),
			);
		$username = $this->input->post('username');
		$this->Dealer_Model->edit_data($username,$data);
		redirect(site_url('dealer'));
		
	}
	

	function ubah_password($id)
	{
		$dealer=($this->Dealer_Model->ambil_data_id($id));
		$data = array(
			'username' => set_value('username',$dealer->username),
			'button' => 'Simpan',
			'input' => false,
			'action' => site_url('dealer/ubah_password_aksi')
			);
		$this->load->view('ubah_password', $data);
	}

	function ubah_password_aksi()
	{
		$username = $this->input->post('username');
		$passlama = $this->input->post('passwordlama');
		$passbaru = $this->input->post('passwordbaru');
		$dealer=($this->Dealer_Model->ambil_data_id($username));
		$passvalid = $dealer->password;
		$username = $this->input->post('username');
		if(($passlama) == $passvalid){
			$this->Dealer_Model->ubah_pass($username,$passbaru);
		redirect(site_url('dealer'));
	}	
}
}
?>