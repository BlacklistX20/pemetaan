<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-map"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pemetaan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item" id="utama">
            <a class="nav-link" href="<?php echo base_url() . 'Admin/index'; ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

        <!-- Nav Item -->
        <li class="nav-item" id="syarat">
            <a class="nav-link" href="<?php echo base_url() . 'Admin/syarat'; ?>">
                <i class="fas fa-fw fa-seedling"></i>
                <span>Syarat Tumbuh Tanaman</span></a>
        </li>

        <!-- Nav Item -->
        <li class="nav-item" id="riwayat">
            <a class="nav-link" href="<?php echo base_url() . 'Admin/riwayat'; ?>">
                <i class="fas fa-fw fa-history"></i>
                <span>Riwayat</span></a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->