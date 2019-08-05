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
			            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
			         </div>
		            <hr>		           		         
		            <!-- <?= var_dump($name); ?>  -->

						<?php if ($this->session->flashdata('success')):?>
				          	<div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
				          <?php endif ?>
					<div class="row">

			            <!-- Earnings (Monthly) Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-primary shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pasien</div>
			                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_pasien ?></div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-users fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>

			            <!-- Earnings (Monthly) Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-primary shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pemeriksaan</div>
			                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_pasien ?></div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-users fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>

			            <!-- Earnings (Monthly) Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-success shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Penyakit</div>
			                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_penyakit ?></div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-database fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>

			            <!-- Earnings (Monthly) Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-primary shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Obat Tersedia</div>
			                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_obat ?></div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-users fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>


			            <!-- Earnings (Monthly) Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-info shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Wali Kelas</div>
			                      <div class="row no-gutters align-items-center">
			                        <div class="col-auto">
			                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $master->wali_kelas ?></div>
			                        </div>
			                      </div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-user fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>

			            <!-- Pending Requests Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-warning shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tahun</div>
			                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $master->tahun_ajaran ?></div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-layer-group fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>
			          </div>
			        
			        <div class="card shadow mb-4">
	                <div class="card-header py-3">
	                  <h6 class="m-0 font-weight-bold text-primary">Data Petugas Medis <?= $master->nama_kelas ?></h6>
	                </div>
	                <div class="card-body">
						<?= form_open('dashboard/update') ?>
						  <div class="form-row align-items-center">
						  	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							    <div class="col-sm-12 my-1">
							      <div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text" style="width: 150px;">
							          	Nama Kelas
								      </div>
							        </div>
									<?= form_input('nama_kelas', form_error('nama_kelas') ? set_value('nama_kelas') : $master->nama_kelas, ['class' => 'form-control']); ?>
							      </div>
							      <?= form_error('nama_kelas', '<div class="alert alert-danger mt-3">', '</div>') ?>
							    </div>
							    <div class="col-sm-12 my-1">
							      <div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text" style="width: 150px;">
							          	Nama Wali Kelas
								      </div>
							        </div>
									<?= form_input('wali_kelas', form_error('wali_kelas') ? set_value('wali_kelas') : $master->wali_kelas, ['class' => 'form-control']); ?>
							      </div>
							      <?= form_error('wali_kelas', '<div class="alert alert-danger mt-3">', '</div>') ?>
							    </div>
							    <div class="col-sm-12 my-1">
							      <div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text" style="width: 150px;">
							          	Total Siswa
								      </div>
							        </div>
									<?= form_input('total_siswa', form_error('total_siswa') ? set_value('total_siswa') : $master->total_siswa, ['class' => 'form-control', 'readonly' => 'readonly']); ?>
							      </div>					      
							      <?= form_error('total_siswa', '<div class="alert alert-danger mt-3">', '</div>') ?>
							    </div>
							    <div class="col-sm-12 my-1">
							      <div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text" style="width: 150px;">
							          	Tahun Ajaran
								      </div>
							        </div>
									<?= form_input('tahun_ajaran', form_error('tahun_ajaran') ? set_value('tahun_ajaran') : $master->tahun_ajaran, ['class' => 'form-control']); ?>
							      </div>
							      <?= form_error('tahun_ajaran', '<div class="alert alert-danger mt-3">', '</div>') ?>
							    </div>
							    <div class="col-sm-12 my-1">
							      <div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text" style="width: 150px;">
							          	Semester
								      </div>
							        </div>
									<?= form_input('semester', form_error('semester') ? set_value('semester') : $master->semester, ['class' => 'form-control']); ?>
							      </div>
							      <?= form_error('semester', '<div class="alert alert-danger mt-3">', '</div>') ?>
							    </div>
							    <div class="col-sm-12 my-1">
							      <div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text"  style="width: 150px;">
							          	Nama Sekolah
								      </div>
							        </div>
									<?= form_input('nama_sekolah', form_error('nama_sekolah') ? set_value('nama_sekolah') : $master->nama_sekolah, ['class' => 'form-control']); ?>
							      </div>
							      <?= form_error('nama_sekolah', '<div class="alert alert-danger mt-3">', '</div>') ?>
							    </div>
							    <div class="col-sm-12 my-1">
							      <div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text"  style="width: 150px;">
							          	Alamat Sekolah
								      </div>
							        </div>
									<?= form_input('alamat_sekolah', form_error('alamat_sekolah') ? set_value('alamat_sekolah') : $master->alamat_sekolah, ['class' => 'form-control']); ?>
							      </div>
							      <?= form_error('alamat_sekolah', '<div class="alert alert-danger mt-3">', '</div>') ?>
							    </div>
							    <div class="col-sm-12 my-1">
							      <div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text"  style="width: 150px;">
							          	Website Sekolah
								      </div>
							        </div>
									<?= form_input('website_sekolah', form_error('website_sekolah') ? set_value('website_sekolah') : $master->website_sekolah, ['class' => 'form-control']); ?>
							      </div>
							      <?= form_error('website_sekolah', '<div class="alert alert-danger mt-3">', '</div>') ?>
							    </div>
							    <div class="col-sm-12 my-1">
							      <div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text"  style="width: 150px;">
							          	Email Sekolah
								      </div>
							        </div>
									<?= form_input('email_sekolah', form_error('email_sekolah') ? set_value('email_sekolah') : $master->email_sekolah, ['class' => 'form-control']); ?>
							      </div>
							      <?= form_error('email_sekolah', '<div class="alert alert-danger mt-3">', '</div>') ?>
							    </div>
								<div class="col-sm-12 my-1">
								  <button type="submit" class="btn btn-primary btn-block" name="update">Update</button>
								</div>
						  	</div>
						  </div>
						<?= form_close(); ?>
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