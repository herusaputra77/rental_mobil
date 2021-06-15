<?php
class Transaksi extends CI_Controller
{
	public function index()
	{
		$nama = $this->session->userdata('username');
		$data['transaksi'] = $this->db->query("SELECT * fROM transaksi tr, mobil mb, custumer cs WHERE tr.id_mobil=mb.id_mobil and tr.username=cs.username and tr.username='$nama' order by id_rental DESC")->result();
		$this->load->view('templates_cardoor/header');
		$this->load->view('customer/transaksi', $data);
		$this->load->view('templates_cardoor/footer');
	}
	public function pembayaran($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * fROM transaksi tr, mobil mb, custumer cs WHERE tr.id_mobil=mb.id_mobil and tr.username=cs.username and tr.id_rental='$id' order by id_rental DESC")->result();
		$this->load->view('templates_cardoor/header');
		$this->load->view('customer/pembayaran', $data);
		$this->load->view('templates_cardoor/footer');
	}
	public function pembayaran_aksi()
	{
		$id_rental = $this->input->post('id_rental', true);
		$bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
		if($bukti_pembayaran){
			$config['upload_path'] = './assets/upload';
			$config['allowed_types'] = 'jpg|png|gif|pdf|docx|tiff';
			$this->load->library('upload', $config);
			if($this->upload->do_upload('bukti_pembayaran')){
				$bukti_pembayaran = $this->upload->data('file_name');
				$this->db->set('bukti_pembayaran', $bukti_pembayaran);
			}else{
				echo $this->upload->display_errors();
			}
		}
		$data= array(
			'bukti_pembayaran'=> $bukti_pembayaran
		);
		$where = array(
			'id_rental' => $id_rental
		);

		$this->db->update('transaksi',$data, $where);
		redirect('transaksi');
	}
}