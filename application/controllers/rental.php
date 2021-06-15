<?php
class Rental extends CI_Controller{

	public function tambah_rental($id)
	{
		$data['rental'] = $this->db->query("SELECT * FROM mobil where mobil.id_mobil='$id'")->result();
		$data['customer'] = $this->db->query("SELECT * FROM custumer")->result();
		// $data['rental'] =$this->rental_mobil->ambil_id_mobil($id);
		$this->load->view('templates_cardoor/header');
		$this->load->view('customer/tambah_rental', $data);
		$this->load->view('templates_cardoor/footer');
	}
	public function tambah_rental_aksi()
	{
		$username = $this->session->userdata('username');
		$id_mobil = $this->input->post('id_mobil',true);
		$harga = $this->input->post('harga',true);
		$denda = $this->input->post('denda',true);
		$tgl_rental = $this->input->post('tgl_rental',true);
		$tgl_kembali = $this->input->post('tgl_kembali',true);

		$data= array(
			'username' => $username,
			'id_mobil' => $id_mobil,
			'tgl_rental' => $tgl_rental,
			'tgl_kembali' => $tgl_kembali,
			'denda' => $denda,
			'harga' => $harga,
			'tgl_pengembalian' => '_',
			'status_pengembalian' => 'Belum Selesai',
			'status_rental' => 'Belum Kembali'
		);

		$this->db->insert('transaksi', $data);
		$status = array('status'=> 0);
		$id = array('id_mobil' => $id_mobil);
		$this->db->update('mobil',$status,$id);
		redirect();
		
	}

	public function _rules()
	{
		$this->form_validation->set_rules('tgl_rental','Tanggal Rental','required|trim');
		$this->form_validation->set_rules('tgl_kembali','Tanggal Kembali','required|trim');
	}
}