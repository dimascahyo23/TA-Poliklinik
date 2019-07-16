<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('_partials/head') ?>
</head>
<body id="page-top">
	<div id="wrapper">
		<?php $this->load->view('_partials/side-nav'); ?>
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<?php $this->load->view('_partials/top-nav'); ?>
				<div class="container-fluid">

		          <!-- Page Heading -->
		          <div class="d-sm-flex align-items-center justify-content-between mb-4">
		            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
		            <a href="<?= base_url('pasien/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>&nbsp;&nbsp;Tambah Data</a>
		          </div>
		          <hr>

		          <?php if ($this->session->flashdata('success')): ?>
		          	<div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
		          <?php endif ?>
					
					<div class="card mb-4">
		                <div class="card-header">
		                  <i class="fas fa-table"></i>&nbsp;&nbsp;&nbsp;&nbsp;Daftar Pasien
		                </div>
		                <div class="card-body">
		                  <div class="table-responsive ">
			                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
			                  <thead>
			                    <tr>
			                      <th>No</th>
			                      <th>Nama Depan</th>
			                      <th>Nama Belakang</th>
			                      <th>Jenis Kelamin</th>
			                      <th>Golongan Darah</th>
			                      <th>Tempat Tanggal Lahir</th>
			                      <th>Agama</th>
			                      <th>Alamat</th>
			                      <th>No Handphone</th>
			                      <th colspan="2">Aksi</th>
			                    </tr>
			                  </thead>
			                  <tbody>
								<?php foreach ($all_pasien as $pasien): ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $pasien->nama_depan ?></td>
										<td><?= $pasien->nama_belakang ?></td>
										<td><?= $pasien->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
										<td><?= $pasien->golongan_darah ?></td>
										<td><?= $pasien->tempat_lahir ?>, <?= date('d-m-Y', strtotime($pasien->tanggal_lahir)) ?></td>
										<td><?= $pasien->agama ?></td>
										<td><?= $pasien->alamat ?></td>
										<td><?= $pasien->nomor_hp ?></td>
										
										<td>
											<a href="<?= base_url('pasien/ubah/' . $pasien->id) ?>" class="btn btn-sm btn-success"><i class="fas fa-sm fa-pen"></i>&nbsp;Ubah</a>
											<a href="<?= base_url('pasien/hapus/' . $pasien->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')"><i class="fas fa-sm fa-trash"></i>&nbsp;Hapus</a>									</tr>	
								<?php endforeach ?>	
			                  </tbody>
			                </table>
			              </div>
		                </div>
		              </div>
		        </div>
			</div>
		<?php $this->load->view('_partials/footer'); ?>
		</div>
	</div>
	<?php $this->load->view('_partials/js'); ?>
</body>
</html>