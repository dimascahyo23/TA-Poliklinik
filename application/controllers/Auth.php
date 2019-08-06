<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index(){		
		//$this->session->has_userdata('data') ? redirect(base_url('dashboard'), 'refresh') : redirect(base_url('auth/login'),'refresh');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_message('required', '{field} tidak boleh kosong!');
		
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			$this->login();
		}
	}

	public function login(){
		//$this->session->has_userdata('data') ? redirect(base_url('dashboard'), 'refresh') : NULL;
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_petugas_medis', ['username' => $username])->row_array();

		if ($user) {	
			if ($user['jenis_poli'] == 'POLI UMUM') {
				if (password_verify($password, $user['password'])) {	
					$data = [
						'username' => $user['username']
					];
					$this->session->set_userdata($data);
					
					if ($user['role'] == 'Admin') {
						$this->session->set_flashdata('success', 'Anda berhasil login!');
						redirect(base_url('dashboard'),'refresh');	
					} elseif ($user['role']== 'Dokter') {
						$this->session->set_flashdata('success', 'Anda berhasil login!');
						redirect(base_url('dokter'),'refresh');	
					} else {
						$this->session->set_flashdata('success', 'Anda berhasil login!');
						redirect(base_url('perawat'),'refresh');	
					}							
					$this->session->set_flashdata('success', 'Anda berhasil login!');
					redirect(base_url('dashboard'),'refresh');
				} else {
					$this->load->view('login');
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
					
				}
			} else if ($user['jenis_poli'] == 'POLI GIGI') {
				if (password_verify($password, $user['password'])) {
					$data = [
						'username' => $user['username']
					];
					$this->session->set_userdata($data);
					$this->session->set_flashdata('success', 'Anda berhasil login!');
					redirect(base_url('dashboard'),'refresh');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
					$this->load->view('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal login!</div>');
				$this->load->view('login');
			}
		} else {
			//$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username belum terdaftar</div>');
			$this->load->view('login');
		}
	}

// 	public function login(){
// 		$this->session->has_userdata('auth') ? redirect(base_url('dashboard'), 'refresh') : NULL;
// 		if(isset($_POST['login'])){
// 			$this->form_validation->set_rules('username', 'Username', 'required');
// 			$this->form_validation->set_rules('password', 'Password', 'required');
// 			$this->form_validation->set_message('required', '{field} tidak boleh kosong!');
// 			if ($this->form_validation->run() == TRUE) {
// 				$user = $this->m_user->check_username();								
// 				if ($user) {					
// 					if ($user->jenis_poli == 'POLI UMUM' ) {
// 						if(password_verify($this->input->post('password'), $user->password)){
// 							$this->session->set_userdata('auth', [
// 								'authenticated' => true,
// 								'username' => $user->username,
// 								'password' => $user->password, 								
// 								'nama_petugas' => $user->password, 								
// 							]);							
// 							$this->session->set_flashdata('success', 'Anda berhasil login!');
// 							redirect(base_url('dashboard'),'refresh');
// 						} else {						
// 							$this->load->view('login');
// 							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau password salah</div>');
// 						}	
// 					} else {
// 						if(password_verify($this->input->post('password'), $user->password)){
// 							$this->session->set_userdata('auth', [
// 								'authenticated' => true,
// 								'username' => $user->username,
// 								'password' => $user->password,
// 							]);
// 							$this->session->set_flashdata('success', 'Anda berhasil login!');
// 							redirect(base_url('dashboard'),'refresh');
// 						} else {						
// 							$this->load->view('login');
// 							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau password salah</div>');
// 						}
// 					}
					
// 				} else {
// 					$this->load->view('login');
// 					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username belum terdaftar</div>');
// 				}
// 			} else {
// 				$this->load->view('login');				
// 			}
// 		} else {
// 			$this->load->view('login');
// 		}
// }

	public function logout(){		
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil keluar</div>');
		redirect(base_url('auth/login'), 'refresh');
		

	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */