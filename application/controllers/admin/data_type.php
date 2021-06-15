<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_type extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Type Mobil';
		$data['type'] = $this->db->get('type')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_type', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah()
	{
		$data['judul'] = 'Tambah Type Mobil';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tambah_type');
		$this->load->view('templates_admin/footer');

	}
	public function simpan_aksi()
	{
		$kode=$this->input->post('kode_type', true);
		$nama = $this->input->post('nama_type', true);

		$data=[
			'kode_type'=>$kode,
			'nama_type'=>$nama];
			$this->db->insert('type',$data);
			redirect('admin/data_type');
	}
	public function hapus($id)
	{
		$where = array('id_type'=>$id);
		$this->db->delete('type',$where);
		redirect('admin/data-Type');
	}
}