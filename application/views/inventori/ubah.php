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
		            <a href="<?= base_url('inventori') ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-reply fa-sm text-white-50"></i>&nbsp;&nbsp;Kembali</a>
		          </div>
				  <hr>
				  <div class="card shadow mb-4">
				  	<div class="card-header py-3">
				  		<h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
				  	</div>
					  <div class="card-body">
						  <?= form_open('inventori/ubah/' . $inventori->id) ?>
							<div class="form-row align-items-center">
								<div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
									<div class="col-sm-12 my-1">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Nama barang
												</div>
											</div>
											<?= form_input('nama_barang', form_error('nama_barang') ? set_value('nama_barang') : $inventori->nama_barang, ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('nama_barang', '<div class="text-danger mt-3">', '</div>') ?>
										<div class="input-group mt-3">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Total barang
												</div>
											</div>
											<input type="number" name="total_barang" class="form-control" autocomplete="off" value="<?= form_error('total_barang') ? set_value('total_barang') : $inventori->total_barang?>">
										</div>
										<?= form_error('total_barang', '<div class="text-danger mt-3">', '</div>') ?>
										<div class="input-group mt-3">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Kondisi barang
												</div>
											</div>
											<?= form_dropdown('kondisi_barang', [NULL => 'Pilih Kondisi Barang', 'Bagus' => 'Bagus', 'Rusak' => 'Rusak'], form_error('kondisi_barang') ? set_value('kondisi_barang') : $inventori->kondisi_barang, ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('kondisi_barang', '<div class="text-danger mt-3">', '</div>') ?>
										<button class="btn btn-block btn-primary mt-4" name="ubah"><i class="fas fa-save fa-sm"></i> Ubah</button>
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