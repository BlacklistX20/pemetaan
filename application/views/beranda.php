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

    <!-- W3.css-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
                    <span class="text-gray-600 medium">Sistem Informasi Pemetaan Komoditas Pertanian</span>

                    <!-- Topbar Login -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Login Modal Button -->
                        <li class="nav-item">
                            <button type="button" class="btn w3-hover-light-grey" data-toggle="modal" data-target="#myModal">Log In</button>
                        </li>

                        <!-- Modal Login -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title ml-2">LOG IN</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">&times;</button>
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
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-4 mb-4">
                            <div class="card shadow flex-fill">
                                <div class="card-header py-2">
                                    <h6 class="m-0 font-weight-bold text-primary">Parameter</h6>
                                </div>
                                <div class="card-body py-2">
                                    <table class="table-borderless" style="width: 100%">
                                        <colgroup>
                                            <col style="width: 45%">
                                            <col style="width: 10%">
                                            <col style="width: 45%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td>Longitude</td>
                                                <td>:</td>
                                                <td id="lng"></td>
                                            </tr>
                                            <tr>
                                                <td>Latitude</td>
                                                <td>:</td>
                                                <td id="lat"></td>
                                            </tr>
                                            <tr>
                                                <td>Curah Hujan</td>
                                                <td>:</td>
                                                <td><span id="curahHujan"></span></td>
                                            </tr>
                                            <tr>
                                                <td>Kelembapan</td>
                                                <td>:</td>
                                                <td><span id="kelembapan"></span></td>
                                            </tr>
                                            <tr>
                                                <td>Suhu</td>
                                                <td>:</td>
                                                <td><span id="suhu"></span></td>
                                            </tr>
                                            <tr>
                                                <td>Ketinggian Tanah</td>
                                                <td>:</td>
                                                <td id="ele"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 mb-4">
                            <div class="card shadow flex-fill">
                                <div class="card-header py-2">
                                    <h6 class="m-0 font-weight-bold text-primary">Komoditas yang Cocok</h6>
                                </div>
                                <div class="card-body py-2">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Komoditas</th>
                                                <th>Curah Hujan</th>
                                                <th>Kelembapan</th>
                                                <th>Suhu</th>
                                                <th>Ketinggian Tanah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div id="map"></div>
                        </div>
                    </div>
                    <!-- End of Page Content -->
                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url() ?>asset/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url() ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url() ?>asset/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?php echo base_url() ?>asset/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo base_url() ?>asset/js/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url() ?>asset/js/demo/chart-pie-demo.js"></script>

        <!-- Map Js -->
        <script src="<?php echo base_url() ?>asset\script.js"></script>

</body>

</html>