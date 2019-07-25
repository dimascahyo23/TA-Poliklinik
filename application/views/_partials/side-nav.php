<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
    <div class="sidebar-brand-icon">
      <i class="fas fa-hospital"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Poliklinik POLNEP</div>
  </a>

  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading">
    Administator
  </div>
  <li class="nav-item <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('dashboard') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  
  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading">
    User
  </div>
  

  <li class="nav-item <?= $this->uri->segment(1) == 'pasien' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('pasien') ?>">
      <i class="fas fa-fw fa-users"></i>
      <span>Data Pasien</span></a>
  </li>
  <li class="nav-item">
      <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-medkit"></i>
        <span>Data Obat</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Pilihan :</h6>
          <a class="collapse-item" href="<?= base_url('obat') ?>">Stok Obat</a>
          <a class="collapse-item" href="<?= base_url('obat/tambah') ?>">Obat Masuk</a>
          <a class="collapse-item" href="<?= base_url('obat') ?>">Obat Keluar</a>
        </div>
      </div>
    </li>
<!--   <li class="nav-item <?= $this->uri->segment(1) == 'obat' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('obat') ?>">
      <i class="fas fa-fw fa-medkit "></i>
      <span>Data Obat</span></a>
  </li> -->

  <li class="nav-item <?= $this->uri->segment(1) == 'penyakit' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('penyakit') ?>">
      <i class="fas fa-fw  fa-stethoscope"></i>
      <span>Data Penyakit</span></a>
  </li>
  <li class="nav-item <?= $this->uri->segment(1) == 'petugas' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('petugas') ?>">
      <i class="fas fa-fw fa-user-md"></i>
      <span>Data Petugas Medis</span></a>
  </li>
  <li class="nav-item <?= $this->uri->segment(1) == 'inventori' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('inventori') ?>">
      <i class="fas fa-fw fa-paste"></i>
      <span>Data Rekam Medis</span></a>
  </li>
  
  <li class="nav-item <?= $this->uri->segment(1) == 'pemeriksaan' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('pemeriksaan') ?>">
      <i class="fas fa-fw fa-database"></i>
      <span>Data Pemeriksaan</span></a>
  </li>

  <li class="nav-item <?= $this->uri->segment(1) == 'laporan' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('laporan') ?>">
      <i class="fas fa-fw fa-print"></i>
      <span>Laporan</span></a>
  </li>
  
  <hr class="sidebar-divider d-none d-md-block">
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Logout</span></a>
  </li>
  <hr class="sidebar-divider d-none d-md-block">
  <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>