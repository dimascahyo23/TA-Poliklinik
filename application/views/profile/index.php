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
			            <h1 class="h3 mb-0 text-gray-800">My Profile</h1>
			         </div>
		            <hr>		           		        		            
						<?php if ($this->session->flashdata('success')):?>
				          	<div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
				          <?php endif ?>
					<div class="row">			         			        
			        <div class="card mb-4 shadow h-100 py-2" style="max-width: 600px;">
					  <div class="row no-gutters">
					    <div class="col-md-4 mt-5">
					      <img src="<?= base_url('assets/img/profile/') . $name['image']; ?>" class="card-img " alt="...">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class="card-title"><strong><?= $name['nama_petugas'] ?></strong></h5>
					        <p class="card-text">Tanggal Lahir : <?= $name['tanggal_lahir'] ?></p>
					        <p class="card-text">Alamat : <?= $name['alamat'] ?></p>
					        <p class="card-text">No Telepon : <?= $name['telepon'] ?></p>
					        <p class="card-text">Email : <?= $name['email'] ?></p>
					        <p class="card-text">Jabatan : <?= $name['role'] ?></p>
					        <p class="card-text"><small class="text-muted">Terdaftar sejak <?= $name['create_at']  ?></small></p>
					      </div>
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