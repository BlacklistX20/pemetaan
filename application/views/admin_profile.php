<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pemetaan Komoditas Pertanian</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/style.css" rel="stylesheet">

    <!-- W3.css-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('include/sidebar') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('include/topbar') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid px-2">

                    <!-- Content Row -->
                    <div class="container-fluid rounded bg-white mb-5 shadow">
                        <div class="row">
                            <div class="col-md-4 border-right border-bottom">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-1">
                                    <img class="rounded-circle mt-5 mb-5" width="200px" src="<?php echo base_url() ?>asset/img/undraw_profile.svg">
                                    <button class="btn btn-primary">Upload Image</button>
                                </div>
                            </div>
                            <div class="col-md-8 border-right">
                                <div class="py-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="text-right">Profile</h4>
                                    </div>
                                    <div class="mt-3">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>Username</td>
                                                    <td>:</td>
                                                    <td>a</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>:</td>
                                                    <td>a</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-3 text-center">
                                        <button class="btn btn-primary" type="button">Ubah Profil</button>
                                    </div>
                                    <div class="mt-3 text-center">
                                        <button class="btn btn-primary" type="button    ">Ubah Password</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

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

</body>

</html>