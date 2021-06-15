<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){

		$this->load->view('login');
		}else{
			$username= $this->input->post('username', true);
			$password = md5($this->input->post('password', true));
			$cek_login = $this->rental_mobil->cek_login($username, $password);

			if($cek_login == FALSE){
				$this->session->set_flashdata('pesan','<div class="alert alert-danger">Username atau Password Salah</div>');
				redirect('auth');
			}else{
				$this->session->set_userdata('username', $cek_login->username);
				$this->session->set_userdata('role_id', $cek_login->role_id);
				$this->session->set_userdata('nama', $cek_login->nama);
				

				switch ($cek_login->role_id) {
					case 1 : redirect('admin/dashboard');
						# code...
						break;
					case 2 : redirect('dashboard');
						# code...
						break;
					
					default:
						# code...
						break;
				}
				$this->session->set_flashdata('pesan','<div class="alert alert-success">Selamat Datang</div>');
			}
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('dashboard');
	}
	public function ganti_password()
	{
		$this->load->view('ganti_password');
	}
	public function ganti_password_aksi()
	{
		$pass_baru = $this->input->post('pass_baru', true);
		$ulangi_pass = $this->input->post('ulangi_pass', true);

		$this->form_validation->set_rules('pass_baru','Password Baru','required|matches[ulangi_pass]');
		$this->form_validation->set_rules('ulangi_pass','Ulangi Password','required');

		if($this->form_validation->run()== FALSE){
			$this->load->view('ganti_password');
		}else{
			$data = array('password' => md5($pass_baru));
			$id   = array('id_customer' => $this->session->userdata('id_customer'));

			$this->rental_mobil->update_password($id, $data, 'custumer');
			$this->session->set_flashdata('pesan','<div class="alert alert-success">Password Berhasil diganti, Silahkan Login!</div>');
			redirect('auth');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
	}
}