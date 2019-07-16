<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_obat extends CI_Model {

	protected $table = 'obat';

	public function get(){
		$query = $this->db->get($this->db->dbprefix($this->table));
		return $query->result();
	}

	public function show($id){
		$query = $this->db->get_where($this->db->dbprefix($this->table), ['id' => $id]);
		return $query->row();
	}

	public function count(){
		return $this->db->count_all_results($this->db->dbprefix($this->table));
	}

	public function store(){
		$data = [
			'nama_obat' => $this->input->post('nama_obat'),
			'satuan' => $this->input->post('satuan'),
			'jenis_obat' => $this->input->post('jenis_obat'),
			'stok' => $this->input->post('stok'),
			'harga' => $this->input->post('harga'),
			'keterangan' => $this->input->post('keterangan'),
		];

		$query = $this->db->insert($this->db->dbprefix($this->table), $data);
		return $query;
	}

	public function delete($id){
		$query = $this->db->where('id', $id);
		$query = $this->db->delete($this->db->dbprefix($this->table));
		return $query;
	}

	public function update($id){
		$data = [
			'nama_obat' => $this->input->post('nama_obat'),
			'satuan' => $this->input->post('satuan'),
			'jenis_obat' => $this->input->post('jenis_obat'),
			'stok' => $this->input->post('stok'),
			'harga' => $this->input->post('harga'),
			'keterangan' => $this->input->post('keterangan'),		
		];
		$query = $this->db->set($data);
		$query = $this->db->where('id', $id);
		$query = $this->db->update($this->db->dbprefix($this->table));
		return $query;
	}

}
/* End of file m_obat.php */
/* Location: ./application/models/m_obat.php */