<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth2 extends CI_Controller {

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
					if ($user->jenis_poli == 'POLI UMUM' ) {
						if(password_verify($this->input->post('password'), $user->password)){
							$this->session->set_userdata('auth', [
								'authenticated' => true,
								'username' => $user->username,
								'password' => $user->password, 								
								'nama_petugas' => $user->password, 								
							]);							
							$this->session->set_flashdata('success', 'Anda berhasil login!');
							redirect(base_url('dashboard'),'refresh');
						} else {						
							$this->load->view('login');
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau password salah</div>');
						}	
					} else {
						if(password_verify($this->input->post('password'), $user->password)){
							$this->session->set_userdata('auth', [
								'authenticated' => true,
								'username' => $user->username,
								'password' => $user->password,
							]);
							$this->session->set_flashdata('success', 'Anda berhasil login!');
							redirect(base_url('dashboard'),'refresh');
						} else {						
							$this->load->view('login');
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau password salah</div>');
						}
					}
					
				} else {
					$this->load->view('login');
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username belum terdaftar</div>');
				}
			} else {
				$this->load->view('login');				
			}
		} else {
			$this->load->view('login');
		}
}

	public function logout(){
		$this->session->unset_userdata('auth');
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil keluar</div>');
		redirect(base_url('auth/login'), 'refresh');
		

	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */