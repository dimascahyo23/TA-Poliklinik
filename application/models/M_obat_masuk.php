<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_obat_masuk extends CI_Model {

	protected $table = 'obat_masuk';

	public function get(){
		$query = $this->db->get($this->db->dbprefix($this->table));
		return $query->result();
	}

	public function jointable(){
		$this->db->select('*');
		$this->db->from('tb_obat');
		$this->db->join('tb_obat_masuk','tb_obat_masuk.id_obat=tb_obat.id');
		$query = $this->db->get();
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
			'id_obat' => $this->input->post('id_obat'),
			'jumlah_masuk' => $this->input->post('jumlah_masuk'),			
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
			'jumlah_masuk' => $this->input->post('jumlah_masuk'),			
			'tanggal' => $this->input->post('tanggal'),
		];
		$query = $this->db->set($data);
		$query = $this->db->where('id', $id);
		$query = $this->db->update($this->db->dbprefix($this->table));
		return $query;
	}

}
/* End of file m_obat_masuk.php */
/* Location: ./application/models/m_obat_masuk.php */