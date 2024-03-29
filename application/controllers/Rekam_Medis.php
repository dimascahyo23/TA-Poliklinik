<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekam_Medis extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_rekam_medis');
		if(!$this->session->has_userdata('username')) redirect(base_url('auth/login'),'refresh');
	}

	public function index(){
		$data['title'] = 'Data Rekam Medis';
		$data['name'] = $this->db->get_where('tb_petugas_medis', ['username' => $this->session->userdata('username')])->row_array();
		$data['no'] = 1;
		$data[ 'all_rekam_medis'] = $this->m_rekam_medis->jointable1();
		$this->load->view('rekam_medis/index', $data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Rekam Medis';
		$data['name'] = $this->db->get_where('tb_petugas_medis', ['username' => $this->session->userdata('username')])->row_array();

		// validasi form di inputan
		if(isset($_POST['tambah'])){
			$this->form_validation->set_rules('nama_lengkap', 'Nama Pasien', 'required|min_length[3]|max_length[50]');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[15]|max_length[100]');		
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|in_list[L,P]');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('nomor_hp', 'Nomor Telepon', 'integer');

			// aturan untun pesan yang akan tampil
			// dengan kondisi sesuai pesan
			$this->form_validation->set_message('is_unique', '{field} tidak boleh sama dengan data sebelumya!');
			$this->form_validation->set_message('required', 'Kolom {field} harus diisi!');
			$this->form_validation->set_message('min_length', 'Kolom {field} harus lebih dari {param} karakter!');
			$this->form_validation->set_message('max_length', 'Kolom {field} harus kurang dari {param} karakter!');
			$this->form_validation->set_message('in_list', 'Kolom {field} harus diisi dengan {param}');
			$this->form_validation->set_message('integer', 'Kolom {field} harus berupa angka!');
			$this->form_validation->set_message('exact_length', 'Kolom {field} harus sebanyak {param} karakter!');

			if ($this->form_validation->run() == TRUE) {
				if($this->m_pasien->store()){
					//$this->m_kelas->set_total_siswa($this->m_siswa->count());
					$this->session->set_flashdata('success', 'Data Rekam Medis berhasil ditambahkan!');
					redirect(base_url('rekam_medis'),'refresh');
				}
			} else {
				$this->session->set_flashdata('success', 'Data Rekam Medis gagal ditambahkan!');
				$this->load->view('rekam_medis/tambah', $data);
			}
		} else {
			$this->load->view('rekam_medis/tambah', $data);

		}
	}

	public function ubah($id = null){
		if($id == NULL){
			redirect(base_url('pasien'),'refresh');
		}
		$data['title'] = 'Ubah Pasien';
		$data['pasien'] = $this->m_pasien->show($id);
		if(isset($_POST['ubah'])){
			$this->form_validation->set_rules('nama_lengkap', 'Nama Pasien', 'required|min_length[3]|max_length[50]');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[15]|max_length[100]');		
			// $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|in_list[L,P]');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('nomor_hp', 'Nomor Telepon', 'integer');

			$this->form_validation->set_message('is_unique', '{field} tidak boleh sama dengan data sebelumya!');
			$this->form_validation->set_message('required', 'Kolom {field} harus diisi!');
			$this->form_validation->set_message('min_length', 'Kolom {field} harus lebih dari {param} karakter!');
			$this->form_validation->set_message('max_length', 'Kolom {field} harus kurang dari {param} karakter!');
			$this->form_validation->set_message('in_list', 'Kolom {field} harus diisi dengan {param}');
			$this->form_validation->set_message('integer', 'Kolom {field} harus berupa angka!');
			$this->form_validation->set_message('exact_length', 'Kolom {field} harus sebanyak {param} karakter!');

			if ($this->form_validation->run() == TRUE) {
				if($this->m_pasien->update($id)){
					$this->session->set_flashdata('success', 'Data pasien berhasil diubah!');
					redirect(base_url('pasien'),'refresh');
				}
			} else {
				$this->session->set_flashdata('success', 'Data pasien gagal diubah!');
				$this->load->view('pasien/ubah', $data);
			}
		} else {
			$this->load->view('pasien/ubah', $data);
		}
	}

	public function hapus($id = NULL){
		if($id == NULL){
			redirect(base_url('pasien'),'refresh');
		}
		if($this->m_pasien->delete($id)){
			$this->m_pasien->set_total_pasien($this->m_pasien->count());
			$this->session->set_flashdata('success', 'Data pasien berhasil dihapus!');
			redirect(base_url('pasien'),'refresh');
		} else {
			$this->session->set_flashdata('error', 'Data pasien gagal dihapus!');
			redirect(base_url('pasien'),'refresh');
		}
	}

}

/* End of file Rekam_Medis.php */
/* Location: ./application/controllers/Rekam_Medis.php */