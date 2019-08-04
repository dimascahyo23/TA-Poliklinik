<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_rekam_medis extends CI_Model {

	protected $table = 'rekam_medis';

	public function jointable(){
		$this->db->select('*');
		$this->db->from('tb_pasien');
		$this->db->join('tb_rekam_medis','tb_rekam_medis.id_pasien=tb_pasien.id');
		$query = $this->db->get();
		return $query->result();
	}

	public function jointable1(){
		$this->db->select('*');
		$this->db->from('tb_pemeriksaan');
		$this->db->join('tb_rekam_medis','tb_rekam_medis.id_rm=tb_pemeriksaan.id_rekam_medis');
		$this->db->join('tb_pasien','tb_pasien.id=tb_rekam_medis.id_pasien');
		$this->db->join('tb_petugas_medis','tb_petugas_medis.id=tb_pemeriksaan.id_petugas_medis');
		$this->db->join('tb_penyakit','tb_penyakit.id=tb_pemeriksaan.id_penyakit');
		$this->db->join('tb_obat','tb_obat.id=tb_pemeriksaan.id_obat');
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
			'id_rm' => $this->input->post('id_rm'),			
			'id_pasien' => $this->input->post('id_pasien'),
			'id_pemeriksaan' => $this->input->post('id_pemeriksaan'),						
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
			'id_rm' => $this->input->post('id_rm'),			
			'id_pasien' => $this->input->post('id_pasien'),
			'id_pemeriksaan' => $this->input->post('id_pemeriksaan'),		
		];
		$query = $this->db->set($data);
		$query = $this->db->where('id', $id);
		$query = $this->db->update($this->db->dbprefix($this->table));
		return $query;
	}

}

/* End of file m_rekam_medis.php */
/* Location: ./application/models/m_rekam_medis.php */