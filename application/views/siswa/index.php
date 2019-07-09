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
		            <a href="<?= base_url('siswa/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>&nbsp;&nbsp;Tambah Data</a>
		          </div>
		          <hr>

		          <?php if ($this->session->flashdata('success')): ?>
		          	<div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
		          <?php endif ?>
					
					<div class="card mb-4">
		                <div class="card-header">
		                  <i class="fas fa-table"></i>&nbsp;&nbsp;&nbsp;&nbsp;Daftar Siswa
		                </div>
		                <div class="card-body">
		                  <div class="table-responsive">
			                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			                  <thead>
			                    <tr>
			                      <th>No</th>
			                      <th>Nama</th>
			                      <th>NIS</th>
			                      <th>Jenis Kelamin</th>
			                      <th>Tempat Tanggal Lahir</th>
			                      <th>Alamat</th>
			                      <th>Aksi</th>
			                    </tr>
			                  </thead>
			                  <tfoot>
			                    <tr>
			                      <th>No</th>
			                      <th>Nama</th>
			                      <th>NIS</th>
			                      <th>Jenis Kelamin</th>
			                      <th>Tempat Tanggal Lahir</th>
			                      <th>Alamat</th>
			                      <th>Aksi</th>
			                    </tr>
			                  </tfoot>
			                  <tbody>
								<?php foreach ($all_siswa as $siswa): ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $siswa->nama_siswa ?></td>
										<td><?= $siswa->nis_siswa ?></td>
										<td><?= $siswa->jenis_kelamin == 'L' ? 'Laki - Laki' : 'Perempuan' ?></td>
										<td><?= $siswa->tempat_lahir ?>, <?= date('d-m-Y', strtotime($siswa->tanggal_lahir)) ?></td>
										<td><?= $siswa->alamat_siswa ?></td>
										<td>
											<a href="<?= base_url('siswa/ubah/' . $siswa->id) ?>" class="btn btn-sm btn-success"><i class="fas fa-sm fa-pen"></i>&nbsp;&nbsp;</a>
											<a href="<?= base_url('siswa/hapus/' . $siswa->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')"><i class="fas fa-sm fa-trash"></i>&nbsp;&nbsp;</a>
										</td>
									</tr>	
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