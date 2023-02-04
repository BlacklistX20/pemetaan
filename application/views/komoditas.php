<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Pemetaan Pertanian</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Map Box-->
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css" rel="stylesheet">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/style.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-3 static-top shadow">

                    <!-- Topbar text -->
                    <span class="font-weight-bold text-gray-600 medium">Sistem Informasi Pemetaan Komoditas Pertanian</span>

                    <!-- Topbar Login -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - Menu -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-gray-600 medium">Menu</span>
                            </a>

                            <!-- Dropdown  -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <button type="button" class=" dropdown-item" data-toggle="modal" data-target="#myModal">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Log In
                                </button>
                                <a class="dropdown-item" href="<?php echo base_url() . 'Beranda/index'; ?>">
                                    <i class="fas fa-fw fa-seedling fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Beranda
                                </a>
                            </div>
                        </li>

                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Table Syarat Tumbuh Tanaman -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Komoditas</th>
                                            <th>Curah Hujan (mm/bln)</th>
                                            <th>Kelembapan (%)</th>
                                            <th>Suhu (C)</th>
                                            <th>Ketinggian Tanah (mdpl)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tabel as $key => $tes) { ?>
                                            <tr>
                                                <td><?= $key + 1 ?></td>
                                                <td><?php echo $tes->Komoditas ?></td>
                                                <td><?php echo $tes->HujanMin . "-" . $tes->HujanMax ?></td>
                                                <td><?php echo $tes->KelembapanMin . "-" . $tes->KelembapanMax ?></td>
                                                <td><?php echo $tes->SuhuMin . "-" . $tes->SuhuMax ?></td>
                                                <td><?php echo $tes->TanahMin . "-" . $tes->TanahMax ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Page Content -->
            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Modal Login -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title ml-2">LOG IN</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa fa-times"></i>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form class="user" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username" name="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember
                                    Me</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-user btn-block" type="submit" name="login">
                            Login
                        </button>
                        <hr>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script>
        const baseUrl = '<?= base_url() ?>'
    </script>

    <!-- Costum Javascipt -->
    <script src="<?php echo base_url() ?>asset/script.js"></script>

</body>

</html>