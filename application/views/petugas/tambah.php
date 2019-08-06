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
		            <a href="<?= base_url('petugas') ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-reply fa-sm text-white-50"></i>&nbsp;&nbsp;Kembali</a>
		          </div>
				  <hr>
				  <div class="card shadow mb-4">
				  	<div class="card-header py-3">
				  		<h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
				  	</div>
					  <div class="card-body">
						  <?= form_open('petugas/tambah') ?>
							<div class="form-row align-items-center">
								<div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
									<div class="col-sm-12 my-1">
										
										<!-- Mulai membuat input data petugas -->
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Nama Petugas 
												</div>
											</div>
											<?= form_input('nama_petugas', set_value('nama_petugas'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('nama_petugas', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Tanggal Lahir
												</div>
											</div>
											<input type="date" name="tanggal_lahir" class="form-control" value="<?= set_value('tanggal_lahir') ?>">
										</div>
										<?= form_error('tanggal_lahir', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Alamat 
												</div>
											</div>
											<?= form_input('alamat', set_value('alamat'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('alamat', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Jabatan
												</div>
											</div>
											<?= form_dropdown('role', [NULL => 'Pilih Jabatan Petugas', 'Admin' => 'Admin', 'Dokter' => 'Dokter', 'Perawat' => 'Perawat'], set_value('role'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('role', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Telepon
												</div>
											</div>
											<?= form_input('telepon', set_value('telepon'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('telepon', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Email
												</div>
											</div>
											<?= form_input('email', set_value('email'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('email', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Username
												</div>
											</div>
											<?= form_input('username', set_value('username'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('username', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Password
												</div>
											</div>
											<?= form_input('password', set_value('password'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('password', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Jenis Poli
												</div>
											</div>
										<?= form_dropdown('jenis_poli', [NULL => 'Pilih Jenis Poli', 'POLI UMUM' => 'POLI UMUM', 'POLI GIGI' => 'POLI GIGI'], set_value('jenis_poli'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('jenis_poli', '<div class="text-danger mt-2">', '</div>') ?>

										<button class="btn btn-block btn-primary mt-4" name="tambah"><i class="fas fa-save fa-sm"></i> Tambah</button>
									</div>
								</div>
							</div>
						  <?= form_close() ?>

					  </div>
				  </div>

		        </div>
			</div>
		<?php $this->load->view('_partials/footer');?>
		</div>
	</div>
	<?php $this->load->view('_partials/js'); ?>
</body>
</html>