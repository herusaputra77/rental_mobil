<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		
		$this->load->view('templates_cardoor/header');
		$this->load->view('dashboard2');
		$this->load->view('templates_cardoor/footer');
	}
	public function data_mobil()
	{
		$data['mobil'] = $this->db->get('mobil')->result();
		$this->load->view('templates_cardoor/header');
		$this->load->view('customer/data_mobil', $data);
		$this->load->view('templates_cardoor/footer');

	}
	public function detail($id)
	{
		$data['detail'] =$this->rental_mobil->ambil_id_mobil($id);
		$this->load->view('templates_cardoor/header');
		$this->load->view('customer/detail', $data);
		$this->load->view('templates_cardoor/footer');

	}


}