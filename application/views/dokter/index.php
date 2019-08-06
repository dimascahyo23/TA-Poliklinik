<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('dokter/_partials/head') ?>
</head>
<body id="page-top">
	<div id="wrapper">
		<?php $this->load->view('dokter/_partials/side-nav'); ?>
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<?php $this->load->view('dokter/_partials/top-nav'); ?>
				<div class="container-fluid">
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
			            <h1 class="h3 mb-0 text-gray-800">Dokter</h1>
			         </div>
		            <hr>		           		         		            

						<?php if ($this->session->flashdata('success')):?>
				          	<div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
				          <?php endif ?>						        			    			      
              </div>
			</div>
		<?php $this->load->view('_partials/footer'); ?>
		</div>
	</div>
	<?php $this->load->view('_partials/js'); ?>
</body>
</html>