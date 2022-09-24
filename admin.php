<?php  
    session_start();
 
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistem Informasi Pemetaan Komoditas Pertanian</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- W3.css-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  
</head>
<body>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
        <a href="#" class="w3-bar-item w3-button">Link 1</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
    
    <div class="px-0 py-0" id="main">

    <nav class="navbar w3-dark-gray px-0 py-0">
        <div class="container-fluid px-2">
            <button id="openNav" class="w3-button w3-hover-blue-gray w3-xlarge" onclick="w3_open()">&#9776;</button>
            <div class="w3-hover-gray w3-right">
                <a href="logout.php" class="btn w3-right">Log Out</a>
            </div>
            
        </div>
    </nav>

    <div class="container-fluid">
        <h1 class="">Syarat Tumbuh Tanaman</h1>
        <button class="my-3 w3-button w3-green w3-hover-lime" data-bs-toggle="modal" data-bs-target="#myModal">Tambah</button>
        <table class="w3-table w3-card table-bordered table-responsive-md w3-centered">
            <tr class="w3-black">
                <th>Komoditas</th>
                <th>Suhu (C)</th>
                <th>Curah Hujan (mm/bulan)</th>
                <th>Kelembapan Udara (%)</th>
                <th>Ketinggian Tanah</th>
                <th>Edit</th>
            </tr>
            <tr>
                <td>Padi</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="btn-group">
                        <button class="fas fa-edit"></button>
                        <button class="fas fa-trash"></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Jagung</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="btn-group">
                        <button class="fas fa-edit"></button>
                        <button class="fas fa-trash"></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Semangka</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="btn-group">
                        <button class="fas fa-edit"></button>
                        <button class="fas fa-trash"></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Bawang Merah</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="btn-group">
                        <button class="fas fa-edit"></button>
                        <button class="fas fa-trash"></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Cabai</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="btn-group">
                        <button class="fas fa-edit"></button>
                        <button class="fas fa-trash"></button>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header px-4 py-2">
                    <h4 class="modal-title">Syarat Tumbuh Tanaman</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
  
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" class="needs-validation">
                        <div class="mb-2 mt-2">
                            <label for="komoditas" class="form-label">Komoditas</label>
                            <input type="text" class="form-control" id="komoditas" name="Komoditas">
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="suhu" class="form-label">Suhu</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="suhu" name="Suhu">
                                <span class="input-group-text">C</span>
                            </div>
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="hujan" class="form-label">Curah Hujan</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="hujan" name="Curah Hujan">
                                <span class="input-group-text">mm/bulan</span>
                            </div>
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="kelembapan" class="form-label">Kelembapan Udara</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="kelembapan" name="Kelembapan Udara">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="tanah" class="form-label">Ketinggian Tanah</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="tanah" name="Ketinggian Tanah">
                                <span class="input-group-text">mdpl</span>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="w3-button w3-green" >Tambah</button>
                </div>
  
            </div>
        </div>
    </div>

    <script>
        function w3_open() {
          document.getElementById("main").style.marginLeft = "25%";
          document.getElementById("mySidebar").style.width = "25%";
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("openNav").style.display = 'none';
        }
        function w3_close() {
          document.getElementById("main").style.marginLeft = "0%";
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("openNav").style.display = "inline-block";
        }
    </script>
</body>
</html>