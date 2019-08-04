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
		            <a href="<?= base_url('obat_masuk') ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-reply fa-sm text-white-50"></i>&nbsp;&nbsp;Kembali</a>
		          </div>
				  <hr>
				  <div class="card shadow mb-4">
				  	<div class="card-header py-3">
				  		<h6 class="m-0 font-weight-bold text-primary">Data Pembelian Obat</h6>
				  	</div>
					  <div class="card-body">
						  <?= form_open('obat_masuk/tambah') ?>
							<div class="form-row align-items-center">
								<div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
									<div class="col-sm-12 my-1">
										
										<!-- Mulai membuat input data obat -->
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Id Obat
												</div>
											</div>
											<?= form_input('id_obat', set_value('id_obat'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('id_obat', '<div class="text-danger mt-2">', '</div>') ?>						
										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Jumlah Beli
												</div>
											</div>
										<?= form_input('jumlah_masuk', set_value('jumlah_masuk'), ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('jumlah_masuk', '<div class="text-danger mt-2">', '</div>') ?>										
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