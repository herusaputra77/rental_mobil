<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_mobil extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
	}
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data['mobil'] = $this->db->get('mobil')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_mobil', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah()
	{
		$data['judul'] = 'Tambah Data Mobil';
		$data['type'] = $this->db->get('type')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tambah_data_mobil', $data);
		$this->load->view('templates_admin/footer');

	}
	public function tambah_mobil()
	{
		$this->_rules();
		if($this->form_validation->run() == false){
			$this->tambah();
		}else{

		$type = $this->input->post('type', true);
		$merk = $this->input->post('merk', true);
		$no_plat = $this->input->post('no_plat', true);
		$warna = $this->input->post('warna', true);
		$tahun = $this->input->post('tahun', true);
		$status = $this->input->post('status', true);
		$harga = $this->input->post('harga', true);
		$denda = $this->input->post('denda', true);
		$ac = $this->input->post('ac', true);
		$supir = $this->input->post('supir', true);
		$mp3_player = $this->input->post('mp3_player', true);
		$central_lock = $this->input->post('central_lock', true);
		$gambar = $_FILES['gambar']['name'];
		if($gambar=''){}else{
			$config['upload_path'] = './assets/upload/';
			$config['allowed_types'] = 'jpg|png|jpeg|';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Mobil Gagal di Upload";
			}else{ 		
				$gambar =$this->upload->data('file_name');
			}
		}

		$data= array(
			'kode_type'=> $type,
			'merk'=> $merk,
			'no_plat'=> $no_plat,
			'warna' => $warna,
			'tahun' => $tahun,
			'status' => $status,
			'harga' => $harga,
			'denda' => $denda,
			'ac' => $ac,
			'supir' => $supir,
			'mp3_player' => $mp3_player,
			'central_lock' => $central_lock,
			'gambar'=> $gambar
		);
		$this->rental_mobil->tambah_mobil($data, 'mobil');
		$this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil di ubah</div>');
		redirect('admin/data_mobil');
		}
	}
	public function hapus($id)
	{
		$where = array('id_mobil'=>$id);
		$this->db->delete('mobil', $where);
		redirect('admin/data_mobil');
	}
	public function update_mobil($id)
	{
		$where = array('id_mobil'=>$id);
		$data['mobil'] = $this->db->query("SELECT * FROM mobil , type WHERE mobil.kode_type=type.kode_type AND mobil.id_mobil='$id'")->result();
		$data['type']= $this->rental_mobil->get_data('type')->result();
		$data['judul'] = 'Update data mobil';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_mobil', $data);
		$this->load->view('templates_admin/footer');
	}
	public function update_mobil_aksi()
	{
		$this->_rules();
		if($this->form_validation->run()==false){
			$this-> update_mobil();
		}else{
			$id= $this->input->post('id_mobil', true);
			$type = $this->input->post('type', true);
			$merk = $this->input->post('merk', true);
			$no_plat = $this->input->post('no_plat', true);
			$warna = $this->input->post('warna', true);
			$tahun = $this->input->post('tahun', true);
			$status = $this->input->post('status', true);
			$harga = $this->input->post('harga', true);
			$denda = $this->input->post('denda', true);
			$ac = $this->input->post('ac', true);
			$supir = $this->input->post('supir', true);
			$mp3_player = $this->input->post('mp3_player', true);
			$central_lock = $this->input->post('central_lock', true);
			$gambar = $_FILES['gambar']['name'];
			if($gambar){
				$config['upload_path'] = './assets/upload/';
				$config['allowed_types'] = 'jpg|png|jpeg|';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('gambar')){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar',$gambar);

				}else{ 		
					echo $this->upload->display_errors();
				}
			}
			$data= array(
			'kode_type'=> $type,
			'merk'=> $merk,
			'no_plat'=> $no_plat,
			'warna' => $warna,
			'tahun' => $tahun,
			'status' => $status,
			'harga' => $harga,
			'denda' => $denda,
			'ac' => $ac,
			'supir' => $supir,
			'mp3_player' => $mp3_player,
			'central_lock' => $central_lock
			
		);
			$where= array('id_mobil'=>$id);
			$this->rental_mobil->update_data('mobil',$data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil di ubah</div>');
		redirect('admin/data_mobil');


		}
	}
	public function edit($id)
	{
		$where = array('id_mobil'=>$id);
		$data['judul'] = 'Detail Mobil';
		$data['detail']=$this->rental_mobil->ambil_id_mobil($id);
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_mobil', $data);
		$this->load->view('templates_admin/footer');

	}
	public function _rules()
	{
		$this->form_validation->set_rules('type','Type','required|trim');
		$this->form_validation->set_rules('merk','Merk','required|trim');
		$this->form_validation->set_rules('no_plat','No Plat','required|trim');
		$this->form_validation->set_rules('warna','Warna','required|trim');
		$this->form_validation->set_rules('status','status','required|trim');
		$this->form_validation->set_rules('tahun','Tahun','required|trim');
		$this->form_validation->set_rules('harga','harga','required|trim');
		$this->form_validation->set_rules('denda','denda','required|trim');
		$this->form_validation->set_rules('ac','ac','required|trim');
		$this->form_validation->set_rules('supir','supir','required|trim');
		$this->form_validation->set_rules('mp3_player','mp3_player','required|trim');
		$this->form_validation->set_rules('central_lock','central_lock','required|trim');
		
	}

}