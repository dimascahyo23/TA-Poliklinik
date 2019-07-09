<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
    <div class="sidebar-brand-icon">
      <i class="fas fa-hospital"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Poliklinik POLNEP</div>
  </a>

  <hr class="sidebar-divider my-0">

  <li class="nav-item <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('dashboard') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item <?= $this->uri->segment(1) == 'siswa' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('siswa') ?>">
      <i class="fas fa-fw fa-user-md"></i>
      <span>Data Petugas Medis</span></a>
  </li>

  <li class="nav-item <?= $this->uri->segment(1) == 'siswa' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('siswa') ?>">
      <i class="fas fa-fw fa-users"></i>
      <span>Data Pasien</span></a>
  </li>

  <li class="nav-item <?= $this->uri->segment(1) == 'siswa' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('siswa') ?>">
      <i class="fas fa-fw fa-medkit "></i>
      <span>Data Obat</span></a>
  </li>

  <li class="nav-item <?= $this->uri->segment(1) == 'siswa' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('siswa') ?>">
      <i class="fas fa-fw  fa-stethoscope"></i>
      <span>Data Penyakit</span></a>
  </li>

  <li class="nav-item <?= $this->uri->segment(1) == 'inventori' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('inventori') ?>">
      <i class="fas fa-fw fa-paste"></i>
      <span>Data Rekam Medis</span></a>
  </li>
  
  <li class="nav-item <?= $this->uri->segment(1) == 'siswa' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('siswa') ?>">
      <i class="fas fa-fw fa-database"></i>
      <span>Data Pemeriksaan</span></a>
  </li>

  <li class="nav-item <?= $this->uri->segment(1) == 'siswa' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('siswa') ?>">
      <i class="fas fa-fw fa-print"></i>
      <span>Laporan</span></a>
  </li>
  <hr class="sidebar-divider d-none d-md-block">

  <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>