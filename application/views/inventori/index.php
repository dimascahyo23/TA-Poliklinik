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

		          <div class="d-sm-flex align-items-center justify-content-between mb-4">
		            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
		            <a href="<?= base_url('inventori/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>&nbsp;&nbsp;Tambah Data</a>
		          </div>
				  <hr>

				  <?php if ($this->session->flashdata('success')): ?>
		          	<div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
		          <?php endif ?>

		          <div class="card mb-4">
	                <div class="card-header">
	                  <i class="fas fa-table"></i>&nbsp;&nbsp;&nbsp;&nbsp;Daftar Inventori
	                </div>
	                <div class="card-body">
	                  <div class="table-responsive">
		                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		                  <thead>
		                    <tr>
		                      <th>No</th>
		                      <th>Nama</th>
		                      <th>Total</th>
		                      <th>Kondisi</th>
		                      <th>Aksi</th>
		                    </tr>
		                  </thead>
		                  <tfoot>
		                    <tr>
		                      <th>No</th>
		                      <th>Nama</th>
		                      <th>Total</th>
		                      <th>Kondisi</th>
		                      <th>Aksi</th>
		                    </tr>
		                  </tfoot>
		                  <tbody>
		                  	<?php foreach ($all_inventori as $inventori): ?>
		                  		<tr>
		                  			<td><?= $no++ ?></td>
		                  			<td><?= $inventori->nama_barang ?></td>
		                  			<td><?= $inventori->total_barang ?></td>
		                  			<td><?= $inventori->kondisi_barang ?></td>
		                  			<td>
		                  				<a href="<?= base_url('inventori/ubah/' . $inventori->id) ?>" class="btn btn-success btn-sm"><i class="fas fa-pen fa-sm"></i>&nbsp;&nbsp;Ubah</a>
		                  				<a onclick="return confirm('apakah anda yakin?')" href="<?= base_url('inventori/hapus/' . $inventori->id) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash fa-sm"></i>&nbsp;&nbsp;Hapus</a>
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