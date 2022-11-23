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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Syarat Tumbuh Tanam</h1>
                    </div>

                    <!-- Table Syarat Tumbuh Tanaman -->
                    <button type="button" class="btn btn-success btn-icon-split my-2" data-toggle="modal" data-target="#Tambah">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">Tambah</span>
                    </button>

                    <table class="table table-bordered text-center table-striped table-responsive-sm">
                        <thead class="table-dark">
                            <tr>
                                <th>NO</th>
                                <th>Komoditas</th>
                                <th>Curah Hujan (mm/bln)</th>
                                <th>Kelembapan (%)</th>
                                <th>Suhu (C)</th>
                                <th>Ketinggian Tanah (mdpl)</th>
                                <th>Aksi</th>
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
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm btnEdit" data-id="<?= $tes->ID ?>">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm btnHapus" data-id="<?= $tes->ID ?>">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
                <!-- End of page Content -->

            </div>
            <!-- End of Main Wrapper -->

        </div>
        <!-- End of Content Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

    </div>
    <!-- End of Page Wrapper -->

    <!-- Tambah Modal -->
    <div class="modal" id="Tambah">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Syarat Tumbuh Tanaman</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form action="<?php echo base_url() . 'Admin/tambah_syarat'; ?>" method="POST">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="mb-2 mt-2">
                            <label for="komoditas" class="form-label">Komoditas</label>
                            <input type="text" class="form-control" id="komoditas" name="Komoditas">
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="hujan" class="form-label">Curah Hujan</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="hujan" name="HujanMin" placeholder="Minimum">
                                <span class="m-2">-</span>
                                <input type="number" class="form-control" id="hujan" name="HujanMax" placeholder="Maximum">
                                <span class="input-group-text">mm/bulan</span>
                            </div>
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="kelembapan" class="form-label">Kelembapan Udara</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="kelembapan" name="KelembapanMin" placeholder="Minimum">
                                <span class="m-2">-</span>
                                <input type="number" class="form-control" id="kelembapan" name="KelembapanMax" placeholder="Maximum">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="suhu" class="form-label">Suhu</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="suhu" name="SuhuMin" placeholder="Minimum">
                                <span class="m-2">-</span>
                                <input type="number" class="form-control" id="suhu" name="SuhuMax" placeholder="Maximum">
                                <span class="input-group-text">C</span>
                            </div>
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="tanah" class="form-label">Ketinggian Tanah</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="tanah" name="TanahMin" placeholder="Minimum">
                                <span class="m-2">-</span>
                                <input type="number" class="form-control" id="tanah" name="TanahMax" placeholder="Maximum">
                                <span class="input-group-text">mdpl</span>
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal" id="Edit">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Syarat Tumbuh Tanaman</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form action="#" method="POST" id="formEdit">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="mb-2 mt-2">
                            <label for="komoditas" class="form-label">Komoditas</label>
                            <input type="text" class="form-control" id="komoditasEdit" name="Komoditas">
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="hujan" class="form-label">Curah Hujan</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="hujanMinEdit" name="HujanMin">
                                <span class="m-2">-</span>
                                <input type="number" class="form-control" id="hujanMaxEdit" name="HujanMax">
                                <span class="input-group-text">mm/bulan</span>
                            </div>
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="kelembapan" class="form-label">Kelembapan Udara</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="kelembapanMinEdit" name="KelembapanMin">
                                <span class="m-2">-</span>
                                <input type="number" class="form-control" id="kelembapanMaxEdit" name="KelembapanMax">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="suhu" class="form-label">Suhu</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="suhuMinEdit" name="SuhuMin">
                                <span class="m-2">-</span>
                                <input type="number" class="form-control" id="suhuMaxEdit" name="SuhuMax">
                                <span class="input-group-text">C</span>
                            </div>
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="tanah" class="form-label">Ketinggian Tanah</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="tanahMinEdit" name="TanahMin">
                                <span class="m-2">-</span>
                                <input type="number" class="form-control" id="tanahMaxEdit" name="TanahMax">
                                <span class="input-group-text">mdpl</span>
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Hapus Modal-->
    <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin menghapus data <span id="namaHapus"></span> ?</div>
                <div class="modal-footer">
                    <a class="btn btn-danger" id="hapus" href="#">Hapus</a>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>asset/js/sb-admin-2.min.js"></script>

    <script>
        $('.btnEdit').click(function() {
            var idSyarat = $(this).data('id');
            $.ajax({
                url: '<?= base_url('admin/ambil_dataId/') ?>' + idSyarat,
                success: function(respond) {
                    var data = JSON.parse(respond)
                    $('#komoditasEdit').val(data.Komoditas)
                    $('#hujanMinEdit').val(data.HujanMin)
                    $('#hujanMaxEdit').val(data.HujanMax)
                    $('#kelembapanMinEdit').val(data.KelembapanMin)
                    $('#kelembapanMaxEdit').val(data.KelembapanMax)
                    $('#suhuMinEdit').val(data.SuhuMin)
                    $('#suhuMaxEdit').val(data.SuhuMax)
                    $('#tanahMinEdit').val(data.TanahMin)
                    $('#tanahMaxEdit').val(data.TanahMax)
                    $('#formEdit').attr('action', '<?= base_url('admin/edit_syarat/') ?>' + idSyarat);
                    $('#Edit').modal('show');
                }
            })

        });
        $('.btnHapus').click(function() {
            var idSyarat = $(this).data('id');
            $.ajax({
                url: '<?= base_url('admin/ambil_dataId/') ?>' + idSyarat,
                success: function(respond) {
                    var data = JSON.parse(respond)
                    $('#namaHapus').text(data.Komoditas)
                    $('#hapus').attr('href', '<?= base_url('admin/hapus/') ?>' + idSyarat);
                    $('#hapusModal').modal('show');
                }
            })
        });

        $(document).ready(function(){
            $("#syarat").addClass("active");
        });
    </script>

</body>

</html>