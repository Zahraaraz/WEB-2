<?php
    include_once 'config/Connection.php';

    // Query jumlah data dari masing-masing entitas
    $countDosen = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) as total FROM dosen"))['total'];
    $countPenelitian = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) as total FROM penelitian"))['total'];
    $countKegiatan = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) as total FROM kegiatan"))['total'];
    $countJenisKegiatan = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) as total FROM jenis_kegiatan"))['total'];
    ?> 


            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <h1 class="m-0 text-dark">Selamat Datang di Dashboard Kegiatan Dosen</h1>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?= $countDosen ?></h3>
                                    <p>Data Dosen</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <a href="./?url=dosen" class="nav-link <?php echo $activeUrl === 'dosen' ? 'active' : ''; ?>">Lihat <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?= $countPenelitian ?></h3>
                                    <p>Penelitian</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                <a href="./?url=penelitian"
                        class="nav-link <?php echo $activeUrl === 'penelitian' ? 'active' : ''; ?>">Lihat <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?= $countKegiatan ?></h3>
                                    <p>Kegiatan Akademik</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <a href="./?url=kegiatan" class="nav-link <?php echo $activeUrl === 'kegiatan' ? 'active' : ''; ?>">Lihat <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?= $countJenisKegiatan ?></h3>
                                    <p>Kategori Kegiatan</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-tags"></i>
                                </div>
                                <a href="./?url=jenis_kegiatan"
                        class="nav-link <?php echo $activeUrl === 'jenis_kegiatan' ? 'active' : ''; ?>">Lihat <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


    <!-- Scripts -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>