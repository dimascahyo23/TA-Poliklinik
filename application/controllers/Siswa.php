<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('username')) redirect(base_url('auth/login'),'refresh');
	}

	public function index(){
		$data['title'] = 'Data Pasien';
		$data['no'] = 1;
		$data['all_siswa'] = $this->m_siswa->get();
		$this->load->view('siswa/index', $data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Siswa';
		if(isset($_POST['tambah'])){
			$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required|min_length[3]|max_length[30]|is_unique[tbl_siswa.nama_siswa]');
			$this->form_validation->set_rules('alamat_siswa', 'Alamat Siswa', 'required|min_length[15]|max_length[100]');
			$this->form_validation->set_rules('nis_siswa', 'NIS', 'required|exact_length[4]|is_unique[tbl_siswa.nis_siswa]|integer');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|in_list[L,P]');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|min_length[3]|max_length[15]');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');

			$this->form_validation->set_message('is_unique', '{field} tidak boleh sama dengan data sebelumya!');
			$this->form_validation->set_message('required', 'Kolom {field} harus diisi!');
			$this->form_validation->set_message('min_length', 'Kolom {field} harus lebih dari {param} karakter!');
			$this->form_validation->set_message('max_length', 'Kolom {field} harus kurang dari {param} karakter!');
			$this->form_validation->set_message('in_list', 'Kolom {field} harus diisi dengan {param}');
			$this->form_validation->set_message('integer', 'Kolom {field} harus berupa angka!');
			$this->form_validation->set_message('exact_length', 'Kolom {field} harus sebanyak {param} karakter!');

			if ($this->form_validation->run() == TRUE) {
				if($this->m_siswa->store()){
					$this->m_kelas->set_total_siswa($this->m_siswa->count());
					$this->session->set_flashdata('success', 'Data siswa berhasil ditambahkan!');
					redirect(base_url('siswa'),'refresh');
				}
			} else {
				$this->session->set_flashdata('success', 'Data siswa gagal ditambahkan!');
				$this->load->view('siswa/tambah', $data);
			}
		} else {
			$this->load->view('siswa/tambah', $data);
		}
	}

	public function ubah($id = null){
		if($id == NULL){
			redirect(base_url('siswa'),'refresh');
		}
		$data['title'] = 'Ubah Siswa';
		$data['siswa'] = $this->m_siswa->show($id);
		if(isset($_POST['ubah'])){
			$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required|min_length[3]|max_length[30]');
			$this->form_validation->set_rules('alamat_siswa', 'Alamat Siswa', 'required|min_length[15]|max_length[100]');
			$this->form_validation->set_rules('nis_siswa', 'NIS', 'required|exact_length[4]|integer');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|in_list[L,P]');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|min_length[3]|max_length[15]');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');

			$this->form_validation->set_message('is_unique', '{field} tidak boleh sama dengan data sebelumya!');
			$this->form_validation->set_message('required', 'Kolom {field} harus diisi!');
			$this->form_validation->set_message('min_length', 'Kolom {field} harus lebih dari {param} karakter!');
			$this->form_validation->set_message('max_length', 'Kolom {field} harus kurang dari {param} karakter!');
			$this->form_validation->set_message('in_list', 'Kolom {field} harus diisi dengan {param}');
			$this->form_validation->set_message('integer', 'Kolom {field} harus berupa angka!');
			$this->form_validation->set_message('exact_length', 'Kolom {field} harus sebanyak {param} karakter!');

			if ($this->form_validation->run() == TRUE) {
				if($this->m_siswa->update($id)){
					$this->session->set_flashdata('success', 'Data siswa berhasil diubah!');
					redirect(base_url('siswa'),'refresh');
				}
			} else {
				$this->session->set_flashdata('success', 'Data siswa gagal diubah!');
				$this->load->view('siswa/ubah', $data);
			}
		} else {
			$this->load->view('siswa/ubah', $data);
		}
	}

	public function hapus($id = NULL){
		if($id == NULL){
			redirect(base_url('siswa'),'refresh');
		}
		if($this->m_siswa->delete($id)){
			$this->m_kelas->set_total_siswa($this->m_siswa->count());
			$this->session->set_flashdata('success', 'Data siswa berhasil dihapus!');
			redirect(base_url('siswa'),'refresh');
		} else {
			$this->session->set_flashdata('error', 'Data siswa gagal dihapus!');
			redirect(base_url('siswa'),'refresh');
		}
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */