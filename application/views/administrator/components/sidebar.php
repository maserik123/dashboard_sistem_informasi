<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-fw fa-chart-area"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Dashboard <sup style="font-size: 11px;">Sistem Informasi</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('administrator') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Beranda </span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('administrator/visualisasiMahasiswa') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Visualisasi Mahasiswa</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('administrator/visualisasiDosen') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Visualisasi Dosen</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('administrator/mahasiswa'); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Mahasiswa</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('administrator/dosen'); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Dosen</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>