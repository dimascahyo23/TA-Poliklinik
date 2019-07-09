<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {

	protected $table = 'master_kelas';

	public function get(){
		$query = $this->db->get($this->db->dbprefix($this->table));
		return $query->row();
	}

	public function update(){
		$data = [
			'nama_kelas' => $this->input->post('nama_kelas'),
			'wali_kelas' => $this->input->post('wali_kelas'),
			'total_siswa' => $this->input->post('total_siswa'),
			'tahun_ajaran' => $this->input->post('tahun_ajaran'), 
			'semester' => $this->input->post('semester'),
			'nama_sekolah' => $this->input->post('nama_sekolah'),
			'alamat_sekolah' => $this->input->post('alamat_sekolah'),
			'website_sekolah' => $this->input->post('website_sekolah'),
 			'email_sekolah' => $this->input->post('email_sekolah'),
		];

		$query = $this->db->set($data);
		$query = $this->db->where('id', 1);
		$query = $this->db->update($this->db->dbprefix($this->table));
		return $query;

	}

	public function set_total_siswa($total){
		$this->db->set('total_siswa', $total);
		$this->db->where('id', 1);
		$this->db->update($this->db->dbprefix($this->table));
	}

}

/* End of file M_kelas.php */
/* Location: ./application/models/M_kelas.php */