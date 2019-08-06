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
		            <h1 class="h3 mb-0 text-gray-800 sm"><?= $title ?></h1>
		            <a href="<?= base_url('petugas/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>&nbsp;&nbsp;Tambah Data</a>
		          </div>
		          <hr>

		          <?php if ($this->session->flashdata('success')): ?>
		          	<div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
		          <?php endif ?>
					
					<div class="card mb-4">
		                <div class="card-header">
		                  <i class="fas fa-table"></i>&nbsp;&nbsp;&nbsp;&nbsp;Daftar Petugas
		                </div>
		                <div class="card-body">
		                  <div class="table-responsive">
			                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
			                  <thead>
			                    <tr>
			                      <th>No</th>
			                      <th>Nama Petugas</th>				                     
			                      <th>Jabatan</th>
			                      <th>Telepon</th>                
			                      <th>Jenis Poli</th>   
			                      <th>Alamat</th>              			                      
			                      <th style="width:90px;">Aksi</th>	
			                    </tr>
			                  </thead>
			                  <tfoot>
			                    
			                  </tfoot>
			                  <tbody>
								<?php foreach ($all_petugas as $petugas): ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $petugas->nama_petugas ?></td>			
										<td><?= $petugas->role ?></td>
										<td><?= $petugas->telepon ?></td>
										<td><?= $petugas->jenis_poli ?></td>
										<td><?= $petugas->alamat ?></td>
										<td>											
											<a href="<?= base_url('petugas/detail/' . $petugas->id) ?>" data-toggle="tooltip" title="Detail" class="btn btn-sm btn-primary"><i class="fas fa-sm fa-eye"></i></a>
											<a href="<?= base_url('petugas/ubah/' . $petugas->id) ?>" data-toggle="tooltip" title="Edit" class="btn btn-sm btn-success"><i class="fas fa-sm fa-pen"></i></a>
											<a href="<?= base_url('petugas/hapus/' . $petugas->id) ?>" data-toggle="tooltip" title="Hapus" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')"><i class="fas fa-sm fa-trash"></i></a>
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