<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Aplikasi Pelayanan Pasien - Login</title>

	<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/img/favicon.png') ?>" rel="shortcut icon" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>
<body class="bg-gradient-primary">
<div class="container">
<div class="row justify-content-center">
  <div class="col-xl-6 col-lg-6 col-md-8">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
				<div class="text-center">
				<h1 class="h3 text-gray-900 mb-2">POLI KLINIK</h1>
				<h1 class="h3 text-gray-900 mb-4">Politeknik Negeri Pontianak</h1>
				</div>
				<hr>
				<?= $this->session->flashdata('message');  ?>
				<form class="user" method="POST" action="<?= base_url('auth');  ?>">
					<div class="form-group">
					  <input type="text" autocomplete="off" class="form-control form-control-user" name="username" placeholder="Username" value="<?= set_value('username') ?>">
					  <?= form_error('username', '<div class="alert alert-danger mt-3">', '</div>') ?>
					</div>
					<div class="form-group">
					  <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
					  <?= form_error('password', '<div class="alert alert-danger mt-3">', '</div>') ?>
					</div>								
					
					<!-- <div class="form-group">							
						<?= form_dropdown('jenis_poli', [NULL => 'Pilih Jenis Poli', 'Poli Umum' => 'Poli Umum', 'Poli Gigi' => 'Poli Gigi'], set_value('jenis_poli'), ['class' => 'form-control form-control-lg mt-3 ', 'autocomplete' => 'off']);?>	
					</div>	
					<?= form_error('jenis_poli', '<div class="text-danger mt-2">', '</div>') ?>	 -->
					
					<button type="submit" class="btn btn-primary btn-user btn-block" name="login">Login</button>
					<hr>
					<div class="text-center">Aplikasi Pelayanan Pasien Berbasis Web</div>	
				</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div> 
 <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>
</body>
</html>