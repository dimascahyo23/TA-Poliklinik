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
		            <a href="<?= base_url('obat_masuk/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>&nbsp;&nbsp;Tambah Data</a>
		          </div>
		          <hr>

		          <?php if ($this->session->flashdata('success')): ?>
		          	<div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
		          <?php endif ?>
					
					<div class="card mb-4">
		                <div class="card-header">
		                  <i class="fas fa-table"></i>&nbsp;&nbsp;&nbsp;&nbsp;Daftar Pembelian Obat 
		                </div>
		                <div class="card-body">
		                  <div class="table-responsive">
			                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
			                  <thead>
			                    <tr>
			                      <th>No</th>
			                      <th>Nama Obat</th>			                      
			                      <th>Jumlah Beli</th>			                      
			                      <th>Tanggal Beli</th>			                      
			                      <th style="width:90px;">Aksi</th>			                     			                     
			                    </tr>
			                  </thead>
			                  <tfoot>
			                    
			                  </tfoot>
			                  <tbody>
								<?php foreach ($all_obat as $obat): ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $obat->nama_obat ?></td>										
										<td><?= $obat->jumlah_masuk ?></td>										
										<td><?= $obat->tanggal ?></td>										
										<td>				
											<a href="<?= base_url('obat/ubah/' . $obat->id) ?>" data-toggle="tooltip" title="Edit" class="btn btn-sm btn-success"><i class="fas fa-sm fa-pen"></i></a>	
											<a href="<?= base_url('obat/hapus/' . $obat->id) ?>" data-toggle="tooltip" title="Hapus" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')"><i class="fas fa-sm fa-trash"></i></a>
										</td>									
									</tr>	
								<?php endforeach ?>	
			                  </tbody>
			                </table>
			              </div>
		                </div>
		              </div>

		              <!-- Tampilkan modal detail -->
		              <div class="modal" id="myModal">
					  <div class="modal-dialog modal-dialog-centered">
					    <div class="modal-content">
				      	<!-- Modal Header -->
					      <div class="modal-header">
					        <div class="d-sm-flex align-items-center justify-content-between">
					            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>					            
		         			 </div>
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					      </div>

					      <!-- Modal body -->
					      <div class="modal-body">
					         <?= form_open('obat/ubah/' . $obat->id) ?>
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
										<?= form_input('nama_obat', form_error('nama_obat') ? set_value('nama_obat') : $obat->nama_obat, ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('nama_obat', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Satuan
												</div>
											</div>
											<?= form_dropdown('satuan', [NULL => 'Pilih Satuan Obat', 'Tablet' => 'Tablet', 'Kotak' => 'Kotak', 'Keping' => 'Keping'], 
											form_error('satuan') ? set_value('satuan') : $obat->satuan, ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('satuan', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Harga
												</div>
											</div>
												<?= form_input('harga', form_error('harga') ? set_value('harga') : $obat->harga, ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('harga', '<div class="text-danger mt-2">', '</div>') ?>									

											<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Tanggal Expired
												</div>
											</div>
												<input type="date" name="expired" class="form-control" value="<?= form_error('expired') ? set_value('expired') : $obat->expired ?>">
										</div>
										<?= form_error('expired', '<div class="text-danger mt-2">', '</div>') ?>	

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Stok
												</div>
											</div>
										<?= form_input('jumlah_stok', form_error('jumlah_stok') ? set_value('jumlah_stok') : $obat->jumlah_stok, ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('jumlah_stok', '<div class="text-danger mt-2">', '</div>') ?>

										<div class="input-group mt-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 150px">
													Keterangan
												</div>
											</div>
											<?= form_input('keterangan', form_error('keterangan') ? set_value('keterangan') : $obat->keterangan, ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										</div>
										<?= form_error('keterangan', '<div class="text-danger mt-2">', '</div>') ?>											
								</div>
							</div>
						  <?= form_close() ?>
					      </div>

					      <!-- Modal footer -->
					      <div class="modal-footer">					      
					        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					      </div>
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