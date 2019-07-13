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
		            <a href="<?= base_url('pasien') ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-reply fa-sm text-white-50"></i>&nbsp;&nbsp;Kembali</a>
		          </div>
				  <hr>
				  <div class="card shadow mb-4">
				  	<div class="card-header py-3">
				  		<h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
				  	</div>
					  <div class="card-body">
						  <?= form_open('pasien/tambah') ?>
							<div class="form-row align-items-center">
								<div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
									<div class="col-sm-12 my-1">
										
										<!-- Mulai membuat input data pasien -->
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Nama Depan
												</div>
											</div>
											<?= form_input('nama_depan', set_value('nama_depan'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>

										<?= form_error('nama_depan', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Nama Belakang
												</div>
											</div>
											<?= form_input('nama_belakang', set_value('nama_belakang'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>

										<?= form_error('nama_belakang', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Jenis Kelamin
												</div>
											</div>
											<?= form_dropdown('jenis_kelamin', [NULL => 'Pilih Jenis Kelamin', 'L' => 'Laki Laki', 'P' => 'Perempuan'], set_value('jenis_kelamin'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>

										<?= form_error('jenis_kelamin', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Golongan Darah
												</div>
											</div>
											<?= form_dropdown('golongan_darah', [NULL => 'Pilih Golongan Darah', 'A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O'], set_value('golongan_darah'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>	

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Tempat Lahir
												</div>
											</div>
											<?= form_input('tempat_lahir', set_value('tempat_lahir'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>

										<?= form_error('tempat_lahir', '<div class="text-danger mt-2">', '</div>') ?>

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
													Agama
												</div>
											</div>
											<?= form_dropdown('agama', [NULL => 'Pilih Agama', 'Islam' => 'Islam', 'Kristen' => 'Kristen', 'Hindu' => 'Hindu', 'Budha' => 'Budha', 'Konghucu' => 'Konghucu'], set_value('agama'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>

										<?= form_error('agama', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Alamat Lengkap
												</div>
											</div>
											<?= form_input('alamat', set_value('alamat'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>

										<?= form_error('alamat', '<div class="text-danger mt-2">', '</div>') ?>
										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Nomor Telepon
												</div>
											</div>
											<?= form_input('nomor_hp', set_value('nomor_hp'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>

										<?= form_error('nomor_hp', '<div class="text-danger mt-2">', '</div>') ?>															

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