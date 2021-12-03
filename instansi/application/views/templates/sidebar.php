<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-capsules"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIPO</div>
    </a>

    <?php if ($user['role'] == "Admin") { ?>

        <div class="sidebar-heading ">
            ADMINISTRATOR
        </div>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin/C_Admin/') ?>">
                <i class="fas fa-folder-open"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <a class="sidebar-heading">
            <div class="sidebar-heading ">
                DATA
            </div>
        </a>

        <!-- Nav Item - Data Obat -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin/C_Instansi') ?>">
                <i class="far fa-fw fa-newspaper"></i>
                <span>Data Instansi</span></a>
        </li>

       
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    <?php } ?>

</ul>