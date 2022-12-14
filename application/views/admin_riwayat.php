<!DOCTYPE html>
<html lang="en">

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

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url() ?>asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Riwayat</h1>
                    </div>

                    <!-- Content -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td>Koordinat</td>
                                            <td>Curah Hujan (mm/bln)</td>
                                            <td>Kelembapan (%)</td>
                                            <td>Suhu (C)</td>
                                            <td>Ketinggian Tanah (mdpl)</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tabel as $tes) { ?>
                                            <tr>
                                                <td><?php echo $tes->Tanggal ?></td>
                                                <td><?php echo $tes->Latitude . " - " . $tes->Longitude ?></td>
                                                <td><?php echo $tes->Hujan ?></td>
                                                <td><?php echo $tes->Kelembapan ?></td>
                                                <td><?php echo $tes->Suhu ?></td>
                                                <td><?php echo $tes->Tanah ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    

                </div>
                <!-- End of page Content -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>asset/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>asset/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>asset/js/demo/datatables-demo.js"></script>

    <script>
        $(document).ready(function(){
            $("#riwayat").addClass("active");
        });
    </script>
</body>

</html>