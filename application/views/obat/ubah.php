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
						  <?= form_open('obat/ubah') ?>
							<div class="form-row align-items-center">
								<div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
									<div class="col-sm-12 my-1">
										
										<!-- Mulai membuat input data obat -->
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Nama Obat
												</div>
											</div>
											<?= form_input('nama_obat', set_value('nama_obat'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>

										<?= form_error('nama_obat', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Satuan
												</div>
											</div>
											<?= form_input('satuan', set_value('satuan'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>

										<?= form_error('satuan', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Jenis Obat
												</div>
											</div>
											<?= form_dropdown('jenis_obat', [NULL => 'Pilih Jenis Kelamin', 'L' => 'Laki Laki', 'P' => 'Perempuan'], set_value('jenis_obat'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>

										<?= form_error('jenis_obat', '<div class="text-danger mt-2">', '</div>') ?>									

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Stok
												</div>
											</div>
										<?= form_input('stok', set_value('stok'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>

										<?= form_error('stok', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Harga
												</div>
											</div>
											<input type="date" name="harga" class="form-control" value="<?= set_value('harga') ?>">
										</div>

										<?= form_error('harga', '<div class="text-danger mt-2">', '</div>') ?>	

										<button class="btn btn-block btn-primary mt-4" name="tambah"><i class="fas fa-save fa-sm"></i> Tambah</button>
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