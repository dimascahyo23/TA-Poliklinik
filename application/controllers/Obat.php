<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_obat');
		if(!$this->session->has_userdata('auth')) redirect(base_url('auth/login'),'refresh');
	}

	public function index(){
		$data['title'] = 'Data Obat';
		$data['no'] = 1;
		$data[ 'all_obat'] = $this->m_obat->get();
		$this->load->view('obat/index', $data);
	}

	public function tambah(){
		$data['title'] = 'Tambah obat';

		// validasi form di inputan
		if(isset($_POST['tambah'])){
			$this->form_validation->set_rules('nama_obat', 'Nama obat', 'required|min_length[3]|max_length[50]');
			$this->form_validation->set_rules('satuan', 'Satuan', 'required|min_length[3]|max_length[100]');		
			$this->form_validation->set_rules('jenis_obat', 'Jenis Obat', 'required|min_length[3]|max_length[100]');
			$this->form_validation->set_rules('stok', 'Stok', 'required', 'Nomor Telepon', 'integer');
			$this->form_validation->set_rules('harga', 'Harga', 'required' ,'integer');
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
					$this->session->set_flashdata('success', 'Data obat berhasil ditambahkan!');
					redirect(base_url('obat'),'refresh');
				}
			} else {
				$this->session->set_flashdata('success', 'Data obat gagal ditambahkan!');
				$this->load->view('obat/tambah', $data);
			}
		} else {
			$this->load->view('obat/tambah', $data);

		}
	}

	public function ubah($id = null){
		if($id == NULL){
			redirect(base_url('obat'),'refresh');
		}
		$data['title'] = 'Ubah obat';
		$data['obat'] = $this->m_obat->show($id);
		if(isset($_POST['ubah'])){
			$this->form_validation->set_rules('nama_lengkap', 'Nama obat', 'required|min_length[3]|max_length[50]');
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
				if($this->m_obat->update($id)){
					$this->session->set_flashdata('success', 'Data obat berhasil diubah!');
					redirect(base_url('obat'),'refresh');
				}
			} else {
				$this->session->set_flashdata('success', 'Data obat gagal diubah!');
				$this->load->view('obat/ubah', $data);
			}
		} else {
			$this->load->view('obat/ubah', $data);
		}
	}

	public function hapus($id = NULL){
		if($id == NULL){
			redirect(base_url('obat'),'refresh');
		}
		if($this->m_obat->delete($id)){
			//$this->m_kelas->set_total_siswa($this->m_siswa->count());
			$this->session->set_flashdata('success', 'Data obat berhasil dihapus!');
			redirect(base_url('obat'),'refresh');
		} else {
			$this->session->set_flashdata('error', 'Data obat gagal dihapus!');
			redirect(base_url('obat'),'refresh');
		}
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */