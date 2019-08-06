<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
    <div class="sidebar-brand-icon">
      <i class="fas fa-hospital"></i>
    </div>
    <div class="sidebar-brand-text mx-3">POLIKLINIK POLNEP</div>
  </a>
  
  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading">
    User
  </div>
  <li class="nav-item <?= $this->uri->segment(1) == 'profile' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('dokter/profile') ?>">
      <i class="fas fa-fw fa-user-md"></i>
      <span>My Profile</span></a>
  </li>
  <li class="nav-item <?= $this->uri->segment(1) == 'petugas' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('petugas') ?>">
      <i class="fas fa-fw fa-user-md"></i>
      <span>Data Petugas Medis</span></a>
  </li>
  <li class="nav-item <?= $this->uri->segment(1) == 'rekam_medis' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('rekam_medis') ?>">
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