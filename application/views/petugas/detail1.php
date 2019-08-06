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
		          </div>
				  <hr>
				  <div class="card shadow mb-4">
				  	<div class="card-header py-3">
				  		<h6 class="m-0 font-weight-bold text-primary">Data Petugaasdfs</h6>
				  	</div>
					  <div class="card-body">
						  <?= form_open('petugas/detail/' . $petugas->id) ?>
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
										<?= form_input('nama_petugas', form_error('nama_petugas') ? set_value('nama_petugas') : $petugas->nama_petugas, ['class' => 'form-control', 'autocomplete' => 'off' , 'readonly'=>'true']); ?>
										</div>

										<?= form_error('nama_petugas', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Tanggal Lahir
												</div>
											</div> 
											<?= form_input('tanggal_lahir', form_error('tanggal_lahir') ? set_value('tanggal_lahir') : $petugas->tanggal_lahir, ['class' => 'form-control', 'autocomplete' => 'off' , 'readonly'=>'true']); ?>
										</div>
										<?= form_error('tanggal_lahir', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Alamat
												</div>
											</div>
											<?= form_input('alamat', form_error('alamat') ? set_value('alamat') : $petugas->alamat, ['class' => 'form-control', 'autocomplete' => 'off' , 'readonly'=>'true']); ?>
										</div>

										<?= form_error('jenis_petugas', '<div class="text-danger mt-2">', '</div>') ?>									

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Jabatan
												</div>
											</div>
											<?= form_dropdown('jabatan', [NULL => 'Pilih Jabatan Petugas', 'dokter' => 'Dokter', 'perawat' => 'Perawat'], form_error('jabatan') ? set_value('jabatan') : $petugas->role, ['class' => 'form-control', 'autocomplete' => 'off' , 'readonly'=>'true']); ?>
										</div>

										<?= form_error('jabatan', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Telepon
												</div>
											</div>
												<?= form_input('telepon', form_error('telepon') ? set_value('telepon') : $petugas->telepon, ['class' => 'form-control', 'autocomplete' => 'off' , 'readonly'=>'true']); ?>
										</div>
										<?= form_error('telepon', '<div class="text-danger mt-2">', '</div>') ?>	

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Email
												</div>
											</div>
											<?= form_input('email', form_error('email') ? set_value('email') : $petugas->email, ['class' => 'form-control', 'autocomplete' => 'off' , 'readonly'=>'true']); ?>
										</div>

									<!-- 	<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Username
												</div>
											</div>
											<?= form_input('username', form_error('username') ? set_value('username') : $petugas->username, ['class' => 'form-control', 'autocomplete' => 'off' , 'readonly'=>'true']); ?>
										</div> -->
										<?= form_error('email', '<div class="text-danger mt-2">', '</div>') ?>
										<a href="<?= base_url('petugas') ?>" class="btn btn-block btn-primary mt-4"><i class="fas fa-reply fa-sm "></i>&nbsp;&nbsp;Kembali</a>										
									</div>
								</div>
							</div>
						  <?= form_close() ?>
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