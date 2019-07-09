<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_inventori extends CI_Model {

	protected $table = 'inventori';

	public function get(){
		$query = $this->db->get($this->db->dbprefix($this->table));
		return $query->result();
	}

	public function show($id){
		$query = $this->db->get_where($this->db->dbprefix($this->table), ['id' => $id]);
		return $query->row();
	}

	public function ubah($id){
		$data = [
			'nama_barang' => $this->input->post('nama_barang'),
			'total_barang' => $this->input->post('total_barang'),
			'kondisi_barang' => $this->input->post('kondisi_barang'),
		];

		$query = $this->db->set($data);
		$query = $this->db->where('id', $id);
		$query = $this->db->update($this->db->dbprefix($this->table));
		return $query;
	}

	public function tambah(){
		$data = [
			'nama_barang' => $this->input->post('nama_barang'),
			'total_barang' => $this->input->post('total_barang'),
			'kondisi_barang' => $this->input->post('kondisi_barang'),
		];

		$query = $this->db->insert($this->db->dbprefix($this->table), $data);
		return $query;
	}

	public function hapus($id){
		$query = $this->db->where('id', $id);
		$query = $this->db->delete($this->db->dbprefix($this->table));
		return $query;
	}

	public function count(){
		return $this->db->count_all_results($this->db->dbprefix($this->table));
	}

}

/* End of file M_inventori.php */
/* Location: ./application/models/M_inventori.php */