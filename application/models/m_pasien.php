<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pasien extends CI_Model {

	protected $table = 'pasien';

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
			'nama_lengkap' => $this->input->post('nama_lengkap'),			
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'golongan_darah' => $this->input->post('golongan_darah'),			
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),	
			'alamat' => $this->input->post('alamat'),
			'nomor_hp' => $this->input->post('nomor_hp'),				
			'status' => $this->input->post('status'),				
			'jurusan' => $this->input->post('jurusan'),				
			'prodi' => $this->input->post('prodi'),							
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
			'nama_lengkap' => $this->input->post('nama_lengkap'),			
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'golongan_darah' => $this->input->post('golongan_darah'),			
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),	
			'alamat' => $this->input->post('alamat'),
			'nomor_hp' => $this->input->post('nomor_hp'),			
			'status' => $this->input->post('status'),				
			'jurusan' => $this->input->post('jurusan'),				
			'prodi' => $this->input->post('prodi'),				
		];
		$query = $this->db->set($data);
		$query = $this->db->where('id', $id);
		$query = $this->db->update($this->db->dbprefix($this->table));
		return $query;
	}

}

/* End of file m_pasien.php */
/* Location: ./application/models/m_pasien.php */