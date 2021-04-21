<!-- Sidebar -->

    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> -->
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('Home/index');?>">
        <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-angle-double-right"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard UP3 Cikupa </div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Home/index');?>">
          <i class="fas fa-home"></i>
          <span>Beranda</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Kinerja -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="far fa-chart-bar"></i>
          <span>Kinerja</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Kinerja/index'); ?>">Kontrak Manajemen (PDF)</a>
            <a class="collapse-item" href="<?= base_url('Kinerja/inputbag'); ?>">Input Data Kinerja</a>
            <a class="collapse-item" href="<?= base_url('Kinerja/realisasikinerja'); ?>">Realisasi Kinerja</a>
           
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <!-- Data Pengusaha -->
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="far fa-chart-bar"></i>
          <span>Data Pengusahaan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar" >
          <div class="bg-white py-6 collapse-inner rounded" >
            <a class="collapse-item" href="<?= base_url('Kinerja/datap'); ?>">Buku Pengusaha (PDF)</a>
            <!-- <a class="collapse-item" href="<?= base_url('Data/tren'); ?>">Penjualan(Tren)</a>
            <a class="collapse-item" href="<?= base_url('Data/komposisi'); ?>">Penjualan (Komposisi)</a>
            <a class="collapse-item" href="<?= base_url('Data/listrik'); ?>">Listrik Pedesaan</a> -->
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Decision Supporting Data -->
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-list-ul"></i>
          <span>Decision Supporting Data</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Decision/profil'); ?>">Profil Risiko (PDF)</a>
            <a class="collapse-item" href="<?= base_url('Decision/realisasi'); ?>">Realisasi Kerja Manajemen</a>
          </div>
        </div>
      </li> -->
     <!--  <hr class="sidebar-divider"> -->
      <!-- Kepegawaian -->
     <!--  <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-female"></i>
          <span>Kepegawaian</span>
        </a>
         <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="<?= base_url('Decision/absensi'); ?>">Absensi Pegawai</a>
            </div>
        </div>
      </li> -->
        <!-- <hr class="sidebar-divider"> -->
      <!-- Logout -->
       <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('auth/logout');?>">
              <i class="fas fa-sign-out-alt"></i>
              <span>Logout</span>
            </a>
      </li>
           <hr class="sidebar-divider">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->