<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		if(!$this->session->has_userdata('username')) redirect(base_url('auth/login'),'refresh');
	}

	public function index($id = NULL){
		$data['title'] = 'Data Obat';
		$data['name'] = $this->db->get_where('tb_petugas_medis', ['username' => $this->session->userdata('username')])->row_array();
		$data['no'] = 1;
		$data['all_obat'] = $this->m_obat->get();
		$data['detail_obat'] = $this->m_obat->show($id);
		$this->load->view('obat/index', $data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Obat';
		$data['name'] = $this->db->get_where('tb_petugas_medis', ['username' => $this->session->userdata('username')])->row_array();

		// validasi form di inputan
		if(isset($_POST['tambah'])){
			$this->form_validation->set_rules('nama_obat', 'Nama obat', 'required|min_length[3]|max_length[100]');
			$this->form_validation->set_rules('satuan', 'Satuan', 'required|min_length[3]|max_length[100]');
			$this->form_validation->set_rules('harga', 'Harga', 'integer|required');
			$this->form_validation->set_rules('expired', 'Tanggal Expired', 'required' );
			$this->form_validation->set_rules('jumlah_stok', 'Jumlah Stok', 'integer|required');
			$this->form_validation->set_rules('keterangan', 'Keterangan');

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
				if($this->m_obat->store()){					
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
		$data['title'] = 'Ubah Obat';
		$data['name'] = $this->db->get_where('tb_petugas_medis', ['username' => $this->session->userdata('username')])->row_array();
		$data['obat'] = $this->m_obat->show($id);
		if(isset($_POST['ubah'])){
			$this->form_validation->set_rules('nama_obat', 'Nama obat', 'required|min_length[3]|max_length[100]');
			$this->form_validation->set_rules('satuan', 'Satuan', 'required|min_length[3]|max_length[100]');
			$this->form_validation->set_rules('harga', 'Harga', 'integer|required');
			$this->form_validation->set_rules('expired', 'Tanggal Expired', 'required' );
			$this->form_validation->set_rules('jumlah_stok', 'Jumlah Stok', 'integer|required');
			$this->form_validation->set_rules('keterangan', 'Keterangan');			

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

	public function detail($id = null){
		if($id == NULL){
			redirect(base_url('obat'),'refresh');
		}
		$data['title'] = 'Detail Obat';
		$data['name'] = $this->db->get_where('tb_petugas_medis', ['username' => $this->session->userdata('username')])->row_array();
		$data['obat'] = $this->m_obat->show($id);
	}

	public function hapus($id = NULL){
		if($id == NULL){
			redirect(base_url('obat'),'refresh');
		}
		if($this->m_obat->delete($id)){
			//$this->m_obat->set_total_obat($this->m_obat->count());
			$this->session->set_flashdata('success', 'Data obat berhasil dihapus!');
			redirect(base_url('obat'),'refresh');
		} else {
			$this->session->set_flashdata('error', 'Data obat gagal dihapus!');
			redirect(base_url('obat'),'refresh');
		}
	}

}

/* End of file Obat.php */
/* Location: ./application/controllers/Obat.php */