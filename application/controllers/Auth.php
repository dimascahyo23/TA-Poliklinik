<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index(){
		$this->session->has_userdata('auth') ? redirect(base_url('dashboard'), 'refresh') : redirect(base_url('auth/login'),'refresh');
	}

	public function login(){
		$this->session->has_userdata('auth') ? redirect(base_url('dashboard'), 'refresh') : NULL;
		if(isset($_POST['login'])){
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_message('required', '{field} tidak boleh kosong!');
			if ($this->form_validation->run() == TRUE) {
				$user = $this->m_user->check_username();
				if ($user) {
					if(password_verify($this->input->post('password'), $user->password)){
						$this->session->set_userdata('auth', [
							'authenticated' => true,
							'username' => $user->username,
							'password' => $user->password,
						]);
						$this->session->set_flashdata('success', 'Anda berhasil login!');
						redirect(base_url('dashboard'),'refresh');
					} else {						
						$this->session->set_flashdata('Gagal', 'Username atau password salah');
						$this->load->view('login');
						
					}
				}
			} else {
				$this->load->view('login');
			}
		} else {
			$this->load->view('login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('auth/login'), 'refresh');
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */