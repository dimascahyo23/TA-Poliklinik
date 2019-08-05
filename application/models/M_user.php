<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {

	protected $table = 'petugas_medis';

	public function check_username(){
		$query = $this->db->get_where($this->db->dbprefix($this->table), ['username' => $this->input->post('username')]);
		return $query->row();
	}

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */