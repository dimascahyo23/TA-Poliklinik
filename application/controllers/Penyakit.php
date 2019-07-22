<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_penyakit');
		if(!$this->session->has_userdata('auth')) redirect(base_url('auth/login'),'refresh');
	}

	public function index(){
		$data['title'] = 'Data Penyakit';
		$data['no'] = 1;
		$data[ 'all_penyakit'] = $this->m_penyakit->get();
		$this->load->view('penyakit/index', $data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Penyakit';

		// validasi form di inputan
		if(isset($_POST['tambah'])){
			$this->form_validation->set_rules('nama_penyakit', 'Nama penyakit', 'required|min_length[3]|max_length[100]');				
			$this->form_validation->set_rules('jenis_penyakit', 'Jenis penyakit', 'required|min_length[3]|max_length[100]');
			$this->form_validation->set_rules('penanganan', 'penanganan', 'required|min_length[3]|max_length[100]');

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
				if($this->m_penyakit->store()){
					//$this->m_kelas->set_total_siswa($this->m_siswa->count());
					$this->session->set_flashdata('success', 'Data penyakit berhasil ditambahkan!');
					redirect(base_url('penyakit'),'refresh');
				}
			} else {
				$this->session->set_flashdata('success', 'Data penyakit gagal ditambahkan!');
				$this->load->view('penyakit/tambah', $data);
			}
		} else {
			$this->load->view('penyakit/tambah', $data);

		}
	}

	public function ubah($id = null){
		if($id == NULL){
			redirect(base_url('penyakit'),'refresh');
		}
		$data['title'] = 'Ubah Penyakit';
		$data['penyakit'] = $this->m_penyakit->show($id);
		if(isset($_POST['ubah'])){
			$this->form_validation->set_rules('nama_penyakit', 'Nama penyakit', 'required|min_length[3]|max_length[100]');				
			$this->form_validation->set_rules('jenis_penyakit', 'Jenis penyakit', 'required|min_length[3]|max_length[100]');
			$this->form_validation->set_rules('penanganan', 'penanganan', 'required|min_length[3]|max_length[100]');
			// $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|in_list[L,P]');			

			$this->form_validation->set_message('is_unique', '{field} tidak boleh sama dengan data sebelumya!');
			$this->form_validation->set_message('required', 'Kolom {field} harus diisi!');
			$this->form_validation->set_message('min_length', 'Kolom {field} harus lebih dari {param} karakter!');
			$this->form_validation->set_message('max_length', 'Kolom {field} harus kurang dari {param} karakter!');
			$this->form_validation->set_message('in_list', 'Kolom {field} harus diisi dengan {param}');
			$this->form_validation->set_message('integer', 'Kolom {field} harus berupa angka!');
			$this->form_validation->set_message('exact_length', 'Kolom {field} harus sebanyak {param} karakter!');

			if ($this->form_validation->run() == TRUE) {
				if($this->m_penyakit->update($id)){
					$this->session->set_flashdata('success', 'Data penyakit berhasil diubah!');
					redirect(base_url('penyakit'),'refresh');
				}
			} else {
				$this->session->set_flashdata('success', 'Data penyakit gagal diubah!');
				$this->load->view('penyakit/ubah', $data);
			}
		} else {
			$this->load->view('penyakit/ubah', $data);
		}
	}

	public function hapus($id = NULL){
		if($id == NULL){
			redirect(base_url('penyakit'),'refresh');
		}
		if($this->m_penyakit->delete($id)){
			//$this->m_kelas->set_total_siswa($this->m_siswa->count());
			$this->session->set_flashdata('success', 'Data penyakit berhasil dihapus!');
			redirect(base_url('penyakit'),'refresh');
		} else {
			$this->session->set_flashdata('error', 'Data penyakit gagal dihapus!');
			redirect(base_url('penyakit'),'refresh');
		}
	}

}

/* End of file Penyakit.php */
/* Location: ./application/controllers/Penyakit.php */