<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental_mobil extends CI_Model{
	public function tambah_mobil( $data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function insert_data( $data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function get_data($table)
	{
		return $this->db->get($table);
	}
	public function update_data($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}
	public function ambil_id_mobil($id)
	{
		$hasil = $this->db->where('id_mobil', $id)->get('mobil');
		if($hasil->num_rows()>0)
		{
			return $hasil->result();
		}else{
			return false;
		}
	}
	public function cek_login(){
		$username = set_value('username');
		$password = set_value('password');
		$result = $this->db->where('username',$username)
							->where('password', md5($password))
							->limit(1)
							->get('custumer');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return FALSE;
		}
	}
	public function update_password($where, $data, $table)
	{
		// $this->db->where($where);
		$this->db->update($table, $data, $where);

	}
	public function download($id)
	{
		$query = $this->db->get_where('transaksi',array('id_rental' => $id));
		return $query->row_array();
	}
}