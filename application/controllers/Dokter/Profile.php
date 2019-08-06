<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('username')) redirect(base_url('auth/login'),'refresh');
	}

	public function index(){	
		$data['title'] = 'My Profile';
		$data['name'] = $this->db->get_where('tb_petugas_medis', ['username' => $this->session->userdata('username')])->row_array();				
		$this->load->view('dokter/profile/index', $data);

	}

	public function update(){
		if(!isset($_POST['update'])){
			redirect(base_url('dashboard'),'refresh');
		}
		$data['title'] = 'Dashboard';
		$data['master'] = $this->m_kelas->get();
		$data['total_siswa'] = $this->m_siswa->count();
		$data['total_inventori'] = $this->m_inventori->count();
		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas','required|min_length[4]|max_length[10]');
		$this->form_validation->set_rules('wali_kelas', 'Nama Wali Kelas','required|min_length[3]|max_length[80]');
		$this->form_validation->set_rules('total_siswa','Total Siswa', 'required|min_length[1]|max_length[40]|integer');
		$this->form_validation->set_rules('tahun_ajaran', 'Tahun Ajaran', 'required|exact_length[9]');
		$this->form_validation->set_rules('semester', 'Semester', 'required|in_list[I,II]');
		$this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required|min_length[8]|max_length[20]');
		$this->form_validation->set_rules('alamat_sekolah', 'Alamat Sekolah', 'required|min_length[15]|max_length[255]');
		$this->form_validation->set_rules('website_sekolah', 'Website Sekolah', 'required|min_length[10]|max_length[100]|valid_url');
		$this->form_validation->set_rules('email_sekolah', 'Email Sekolah', 'required|min_length[8]|max_length[30]|valid_email');

		$this->form_validation->set_message('is_unique', '{field} tidak boleh sama dengan data sebelumya!');
		$this->form_validation->set_message('required', 'Kolom {field} harus diisi!');
		$this->form_validation->set_message('min_length', 'Kolom {field} harus lebih dari {param} karakter!');
		$this->form_validation->set_message('max_length', 'Kolom {field} harus kurang dari {param} karakter!');
		$this->form_validation->set_message('in_list', 'Kolom {field} harus diisi dengan {param}');
		$this->form_validation->set_message('integer', 'Kolom {field} harus berupa angka!');
		$this->form_validation->set_message('exact_length', 'Kolom {field} harus sebanyak {param} karakter!');
		$this->form_validation->set_message('valid_url', 'Kolom {field} harus valid URL!');
		$this->form_validation->set_message('valid_email', 'Kolom {field} harus valid Email!');
		if ($this->form_validation->run() == TRUE) {
			if($this->m_kelas->update()){
				$this->session->set_flashdata('success', 'Data berhasil diubah!');
				redirect(base_url('dashboard'),'refresh');
			} else {
				$this->session->set_flashdata('error', 'Data gagal diubah!');
				redirect(base_url('dashboard'),'refresh');
			}
		} else {
			$this->load->view('dashboard/index', $data);
		}
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */