<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventori extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('auth')) redirect(base_url('auth/login'),'refresh');
	}

	public function index(){
		$data['title'] = 'Data Inventori';
		$data['no'] = 1;
		$data['all_inventori'] = $this->m_inventori->get();
		$this->load->view('inventori/index', $data);
	}

	public function ubah($id = NULL){
		$data['title'] = 'Ubah Inventori';
		$data['inventori'] = $this->m_inventori->show($id);
		if($id == NULL){
			redirect(base_url('inventori'),'refresh');
		}

		if(isset($_POST['ubah'])){
			$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required|min_length[3]|max_length[15]');
			$this->form_validation->set_rules('total_barang', 'Total Barang', 'required|integer');
			$this->form_validation->set_rules('kondisi_barang', 'Kondisi Barang', 'required|in_list[Bagus,Rusak]');

			$this->form_validation->set_message('required', 'Kolom {field} harus diisi!');
			$this->form_validation->set_message('min_length', 'Kolom {field} harus lebih dari {param} karakter!');
			$this->form_validation->set_message('max_length', 'Kolom {field} harus kurang dari {param} karakter!');
			$this->form_validation->set_message('in_list', 'Kolom {field} harus diisi dengan {param}');

			if ($this->form_validation->run() == TRUE) {
				if($this->m_inventori->ubah($id)){
					$this->session->set_flashdata('success', 'Data inventori berhasil diubah!');
					redirect(base_url('inventori'),'refresh');
				} else {
					$this->session->set_flashdata('error', 'Data inventori gagal ditambahkan!');
					redirect(base_url('inventori'),'refresh');
				}
			} else {
				$this->load->view('inventori/ubah', $data);
			}
		} else {
			$this->load->view('inventori/ubah', $data);
		}
	}

	public function tambah(){
		$data['title'] = 'Tambah Inventori';
		if(isset($_POST['tambah'])){
			$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required|min_length[3]|max_length[15]|is_unique[tbl_inventori.nama_barang]');
			$this->form_validation->set_rules('total_barang', 'Total Barang', 'required|integer');
			$this->form_validation->set_rules('kondisi_barang', 'Kondisi Barang', 'required|in_list[Bagus,Rusak]');

			$this->form_validation->set_message('is_unique', '{field} tidak boleh sama dengan data sebelumya!');
			$this->form_validation->set_message('required', 'Kolom {field} harus diisi!');
			$this->form_validation->set_message('min_length', 'Kolom {field} harus lebih dari {param} karakter!');
			$this->form_validation->set_message('max_length', 'Kolom {field} harus kurang dari {param} karakter!');
			$this->form_validation->set_message('in_list', 'Kolom {field} harus diisi dengan {param}');

			if ($this->form_validation->run() == TRUE) {
				if($this->m_inventori->tambah()){
					$this->session->set_flashdata('success', 'Data inventori berhasil ditambahkan!');
					redirect(base_url('inventori'),'refresh');
				} else {
					$this->session->set_flashdata('error', 'Data inventori gagal ditambahkan!');
					redirect(base_url('inventori'),'refresh');
				}
			} else {
				$this->load->view('inventori/tambah', $data);
			}
		} else {
			$this->load->view('inventori/tambah', $data);
		}
	}

	public function hapus($id = NULL){
		if($id == NULL){
			redirect(base_url('inventori'),'refresh');
		}
		if($this->m_inventori->hapus($id)){
			$this->session->set_flashdata('success', 'Data inventori berhasil dihapus!');
			redirect(base_url('inventori'),'refresh');
		} else {
			$this->session->set_flashdata('error', 'Data inventori gagal dihapus!');
			redirect(base_url('inventori'),'refresh');
		}
	}

}

/* End of file Inventori.php */
/* Location: ./application/controllers/Inventori.php */