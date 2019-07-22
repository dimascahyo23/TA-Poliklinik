<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_petugas extends CI_Model {

	protected $table = 'petugas_medis';


	public function jointable(){
		$this->db->select('*');
		$this->db->from('tb_petugas_medis');
		$this->db->join('tb_users','tb_users.id_petugas_medis=tb_petugas_medis.id');
		$query = $this->db->get();
		return $query->result();
	}

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
			'nama_petugas' => $this->input->post('nama_petugas'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
			'jabatan' => $this->input->post('jabatan'),
			'telepon' => $this->input->post('telepon'),
			'email' => $this->input->post('email'),
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
			'nama_petugas' => $this->input->post('nama_petugas'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
			'jabatan' => $this->input->post('jabatan'),
			'telepon' => $this->input->post('telepon'),
			'email' => $this->input->post('email'),	
		];
		$query = $this->db->set($data);
		$query = $this->db->where('id', $id);
		$query = $this->db->update($this->db->dbprefix($this->table));
		return $query;
	}

}
/* End of file m_petugas.php */
/* Location: ./application/models/m_petugas.php */