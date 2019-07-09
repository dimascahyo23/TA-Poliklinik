<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	protected $table = 'users';

	public function check_username(){
		$query = $this->db->get_where($this->db->dbprefix($this->table), ['username' => $this->input->post('username')]);
		return $query->row();
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */