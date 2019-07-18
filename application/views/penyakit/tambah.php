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
		            <a href="<?= base_url('penyakit') ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-reply fa-sm text-white-50"></i>&nbsp;&nbsp;Kembali</a>
		          </div>
				  <hr>
				  <div class="card shadow mb-4">
				  	<div class="card-header py-3">
				  		<h6 class="m-0 font-weight-bold text-primary">Data Penyakit</h6>
				  	</div>
					  <div class="card-body">
						  <?= form_open('penyakit/tambah') ?>
							<div class="form-row align-items-center">
								<div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
									<div class="col-sm-12 my-1">
										
										<!-- Mulai membuat input data penyakit -->
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Nama Penyakit
												</div>
											</div>
											<?= form_input('nama_penyakit', set_value('nama_penyakit'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>

										<?= form_error('nama_penyakit', '<div class="text-danger mt-2">', '</div>') ?>


										<?= form_error('penanganan', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Jenis Penyakit
												</div>
											</div>
											<?= form_input('jenis_penyakit', set_value('jenis_penyakit'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>

										<?= form_error('jenis_penyakit', '<div class="text-danger mt-2">', '</div>') ?>									
										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Penanganan
												</div>
											</div>
											<?= form_input('penanganan', set_value('penanganan'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>										

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