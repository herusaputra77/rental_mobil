<?php
class Transaksi extends CI_Controller
{
	public function index()
	{
		$data['transaksi'] = $this->db->query("SELECT * fROM transaksi tr, mobil mb, custumer cs WHERE tr.id_mobil=mb.id_mobil and tr.username=cs.username")->result();
		$data['judul'] = 'Data Transaksi';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/transaksi', $data);
		$this->load->view('templates_admin/footer');
	}
	public function pembayaran($id)
	{
		$data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental='$id'")->result();
		$data['judul'] = 'Pembayaran';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/konfirmasi_pembayaran', $data);
		$this->load->view('templates_admin/footer');

	}
	public function cek_pembayaran()
	{
		$id = $this->input->post('id_rental');
		$status_pembayaran = $this->input->post('status_pembayaran');
		$data = array('status_pembayaran' => $status_pembayaran);
		$where = array('id_rental' => $id);

		$this->db->update('transaksi', $data, $where);
		redirect('admin/transaksi');
	}
	public function download($id)
	{
		$this->load->helper('download');
		$filepembayaran = $this->rental_mobil->download($id);
		$file = 'assets/upload/'.$filepembayaran['bukti_pembayaran'];
		force_download($file, NULL);
	}
}