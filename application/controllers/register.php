<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Registrasi';
		$this->load->view('register',$data);
	}
	public function tambah()
	{
		$this->_rules();
		if($this->form_validation->run()== false){
			$data['judul'] = 'Registrasi';
		$this->load->view('register',$data);

		}else{
			$nama= $this->input->post('nama', true);
			$username= $this->input->post('username', true);
			$alamat= $this->input->post('alamat', true);
			$gender= $this->input->post('gender', true);
			$no_hp= $this->input->post('no_hp', true);
			$no_ktp= $this->input->post('no_ktp', true);
			$password= md5($this->input->post('password', true));

			$data= array(
				'nama' => $nama,
				'username' => $username,
				'alamat' => $alamat,
				'gender' => $gender,
				'no_hp' => $no_hp,
				'no_ktp' => $no_ktp,
				'password' => $password,
				'role_id' => '2'
				
			);
			$this->rental_mobil->insert_data($data,'custumer');
			$this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil di ubah</div>');

			
			redirect('auth');

		}

	}
	public function _rules()
	{
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('alamat','Alamat','required|trim');
		$this->form_validation->set_rules('gender','Gender','required|trim');
		$this->form_validation->set_rules('no_hp','No HP','required|trim|numeric');
		$this->form_validation->set_rules('no_ktp','No KTP','required|trim|numeric');
		$this->form_validation->set_rules('password','Password','required|trim');
	}
		
}