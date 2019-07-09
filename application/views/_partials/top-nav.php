<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="<?= base_url('auth/logout') ?>" onclick="return confirm('apakah anda yakin?')">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout</span>
      </a>
    </li>

  </ul>

</nav>