<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] ='Data Customer';
		$data['customer'] = $this->db->get('custumer')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/customer', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_customer()
	{
		$data['judul'] = 'Tambah Data Customer';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tambah_customer');
		$this->load->view('templates_admin/footer');

	}
	public function tambah_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE)
		{
			$this->tambah_customer();
		}else{
			$nama= $this->input->post('nama', true);
			$username= $this->input->post('username', true);
			$alamat= $this->input->post('alamat', true);
			$gender= $this->input->post('gender', true);
			$no_hp= $this->input->post('no_hp', true);
			$no_ktp= $this->input->post('no_ktp', true);
			$password= md5($this->input->post('password', true));
			$role_id = $this->input->post('role_id', true);

			$data= array(
				'nama' => $nama,
				'username' => $username,
				'alamat' => $alamat,
				'gender' => $gender,
				'no_hp' => $no_hp,
				'no_ktp' => $no_ktp,
				'password' => $password,
				'role_id' => $role_id
				
			);
			$this->rental_mobil->insert_data($data,'custumer');
			

			
			redirect('admin/customer');
		}
	}
	public function hapus($id)
	{
		$where=array('id_customer'=>$id);
		$this->db->delete('custumer', $where);
		redirect('admin/customer');
	}
	public function update($id)
	{
		$where= array('id_customer'=> $id);
		$data['update'] = $this->db->get_where('custumer',$where)->result();
		$data['judul'] = 'Edit Data Customer';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_customer', $data);
		$this->load->view('templates_admin/footer');

	}
	public function update_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == false)
		{
			$id= $this->input->post('id',true);
			$where= array('id_customer'=> $id);
		$data['update'] = $this->db->get_where('custumer',$where)->result();
		$data['judul'] = 'Edit Data Customer';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_customer', $data);
		$this->load->view('templates_admin/footer');

		}else{
			$id= $this->input->post('id',true);
			$nama= $this->input->post('nama',true);
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
				'password' => $password
				
			);
			$where=array('id_customer'=>$id);
			$this->rental_mobil->update_data('custumer',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil di ubah</div>');
		redirect('admin/customer');
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