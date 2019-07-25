<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_petugas');
		if(!$this->session->has_userdata('auth')) redirect(base_url('auth/login'),'refresh');
	}

	public function index(){
		$data['title'] = 'Data Petugas Medis';
		$data['no'] = 1;
		$data[ 'all_petugas'] = $this->m_petugas->jointable();
		$this->load->view('petugas/index', $data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Petugas';

		// validasi form di inputan
		if(isset($_POST['tambah'])){
			$this->form_validation->set_rules('nama_petugas', 'Nama Petugas', 'required|min_length[5]|max_length[50]');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[5]|max_length[150]');		
			$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
			$this->form_validation->set_rules('telepon', 'Telepon', 'required', 'integer');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');

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
				if($this->m_petugas->store()){
					//$this->m_kelas->set_total_siswa($this->m_siswa->count());
					$this->session->set_flashdata('success', 'Data petugas berhasil ditambahkan!');
					redirect(base_url('petugas'),'refresh');
				}
			} else {
				$this->session->set_flashdata('success', 'Data petugas gagal ditambahkan!');
				$this->load->view('petugas/tambah', $data);
			}
		} else {
			$this->load->view('petugas/tambah', $data);

		}
	}

	public function ubah($id = null){
		if($id == NULL){
			redirect(base_url('petugas'),'refresh');
		}
		$data['title'] = 'Ubah Petugas';
		$data['petugas'] = $this->m_petugas->show($id);
		if(isset($_POST['ubah'])){
			$this->form_validation->set_rules('nama_petugas', 'Nama Petugas', 'required|min_length[5]|max_length[50]');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[5]|max_length[150]');		
			$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
			$this->form_validation->set_rules('telepon', 'Telepon', 'integer');
			$this->form_validation->set_rules('email', 'Email', 'required');			

			$this->form_validation->set_message('is_unique', '{field} tidak boleh sama dengan data sebelumya!');
			$this->form_validation->set_message('required', 'Kolom {field} harus diisi!');
			$this->form_validation->set_message('min_length', 'Kolom {field} harus lebih dari {param} karakter!');
			$this->form_validation->set_message('max_length', 'Kolom {field} harus kurang dari {param} karakter!');
			$this->form_validation->set_message('in_list', 'Kolom {field} harus diisi dengan {param}');
			$this->form_validation->set_message('integer', 'Kolom {field} harus berupa angka!');
			$this->form_validation->set_message('exact_length', 'Kolom {field} harus sebanyak {param} karakter!');

			if ($this->form_validation->run() == TRUE) {
				if($this->m_petugas->update($id)){
					$this->session->set_flashdata('success', 'Data petugas berhasil diubah!');
					redirect(base_url('petugas'),'refresh');
				}
			} else {
				$this->session->set_flashdata('success', 'Data petugas gagal diubah!');
				$this->load->view('petugas/ubah', $data);
			}
		} else {
			$this->load->view('petugas/ubah', $data);
		}
	}

	public function hapus($id = NULL){
		if($id == NULL){
			redirect(base_url('petugas'),'refresh');
		}
		if($this->m_petugas->delete($id)){
			//$this->m_kelas->set_total_siswa($this->m_siswa->count());
			$this->session->set_flashdata('success', 'Data petugas berhasil dihapus!');
			redirect(base_url('petugas'),'refresh');
		} else {
			$this->session->set_flashdata('error', 'Data petugas gagal dihapus!');
			redirect(base_url('petugas'),'refresh');
		}
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */