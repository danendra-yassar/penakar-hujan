<?php
    error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="assets/css/style.css" rel="stylesheet"> 
    <!-- framework bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- datepicker bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <script src="assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js"></script>
    <link rel="icon" 
      type="image/png" 
      href="logo.png" /> 
    <title>Penakar Hujan</title>
  </head>


  <body>

    <?php 
        session_start();
        if($_SESSION['status']!="login"){
        header("login.php?pesan=belum_login");
        }
    ?>
    
  <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcontent" aria-controls="navcontent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
            <ul class="sidebar-nav" id="navcontent">
                <li class="sidebar-brand">
                    <a>
                       Sipejan BMKG Semarang
                    </a>
                </li>
                <li>
                <center>
                    <div class="card " style="width: 23rem;" >
                    <div class="card-body">
                    <a> <center>
                    Selamat datang, <?php echo $_SESSION['nama']; ?>! 
                    <br>anda telah login.
                    </center></a>
                    </div>
                    </div>
                </center>
                </li>
                <li>
                    <a href="index.php?page=grafik">Grafik</a>
                </li>
                <li>
                    <a href="index.php?page=data-user">User</a>
                </li>
                <li>
                    <a href="index.php?page=data-menit">Data Hujan Per Menit</a>
                </li>
                <li>
                <a href="index.php?page=data-hujan">Data Hujan Per Jam</a>
                </li>
                <li>
                    <a href="index.php?page=data-hujan-all">Data Hujan</a>
                </li>
                <li>
                    <a href="index.php?page=filter-tanggal">Laporan Data Hujan</a>
                </li>
                <li>
                    <a href="index.php?page=form-input-hujan-all">Input Data Hujan</a>
                </li>
                <li>
                    <a href="index.php?page=logout">Logout</a>
                </li>
            </ul>
        </div>
        
        <br>
        <div class="col-lg-12">
            <?php 
            if(isset($_GET['pesan'])){
                $pesan = $_GET['pesan'];
                if($pesan == "input"){
                    echo "<p class='alert alert-success'>Data Berhasil Di Input</p>";
                }else if($pesan == "update"){
                    echo "<p class='alert alert-info'>Data Berhasil Di Update</p>";
                }else if($pesan == "hapus"){
                    echo "<p class='alert alert-warning'>Data Berhasil Di Hapus</p>";
                }
            }
            ?>
        </div>
        <!-- /#sidebar-wrapper -->

        <?php
            if(isset($_GET['page']))
            {
                $page = $_GET['page'];
                
                // cek apakah halaman yang diminta itu ada atau tidak??
                if(file_exists($page.".php") == true)
                {

                    // tampilkan halaman sesuai request
                    require_once($page.".php");
                }
                else
                {
                    // tampilkan halaman 404.php
                    require_once("404.php");
                }
            }
            else
            {
                // tampilkan halaman default dari website kita
                require_once("grafik.php");
            }
        ?>
 

    </div>
    <!-- /#wrapper -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    -->
  </body>
</html>