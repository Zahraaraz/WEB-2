<?php
$activeUrl = $_GET['url'] ?? ''; // Get the current URL parameter or default to 'home'
?>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./?url=dashboard" class="brand-link">
        <img src="dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-family: 'Poppins';">Kegiatan Dosen</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class -->
                <li class="nav-header">LIST DATA</li>
                <li class="nav-item">
                    <a href="./?url=dashboard" class="nav-link <?php echo $activeUrl === 'dashboard' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-users"></i> <!-- Icon for Dosen -->
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./?url=dosen" class="nav-link <?php echo $activeUrl === 'dosen' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-users"></i> <!-- Icon for Dosen -->
                        <p>Manajemen Data Dosen</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./?url=penelitian" class="nav-link <?php echo $activeUrl === 'penelitian' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-user-md"></i> <!-- Icon for penelitian -->
                        <p>Manajemen Penelitian</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./?url=kegiatan"
                        class="nav-link <?php echo $activeUrl === 'kegiatan' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-user-md"></i> <!-- Icon for kegiatan -->
                        <p>Manajemen Kegiatan Akademik</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./?url=jenis_kegiatan"
                        class="nav-link <?php echo $activeUrl === 'jenis_kegiatan' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-user-md"></i> <!-- Icon for Jenis Kegiatan -->
                        <p>Manajemen Kategori Kegiatan</p>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>