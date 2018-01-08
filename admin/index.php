<?php error_reporting (0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DASHBOARD ADMIN - STARFUTSAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <script src="../assets/jquery/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <style type="text/css" media="screen">
    h1.page-header {
    margin-top: 10px;
}

.sidebar {
    padding-left: 0;
}

.main-container { 
    background: #FFF;
    padding-top: 15px;
}
</style>
<script type="text/javascript">
  $(".nav li").on("click", function() {
  $(".nav").find(".active").removeClass("active");
  $(this).parent().addClass("active");
});
</script>
<body>
<nav class="navbar navbar-default">
  <?php include('header.php'); ?>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" id=nav-atas>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
      <ul class="nav nav-pills nav-stacked">
        <li class="active tab"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="?page=lapangan"><span class="glyphicon glyphicon-folder-close"></span> Lapangan</a></li>
        <li><a href="?page=tarif"><span class="glyphicon glyphicon-folder-close"></span> Tarif</a></li>
        <li><a href="?page=penyewaan"><span class="glyphicon glyphicon-folder-close"></span> Penyewaan</a></li>
        <li><a href="?page=pembayaran"><span class="glyphicon glyphicon-folder-close"></span> Pembayaran</a></li>
        <li><a href="?page=konfirmasi"><span class="glyphicon glyphicon-folder-close"></span> Konfirmasi</a></li>
        <li><a href="?page=laporan"><span class="glyphicon glyphicon-folder-close"></span> Laporan</a></li>
      </ul>
    </div>
    <div class="col-md-10 content">
            <?php

              $page = $_GET['page'];
              $aksi = $_GET['aksi'];

              if($page == "lapangan"){  
                if($aksi == ""){
                  include "../admin/lapangan/lapangan.php";
                }elseif ($aksi == "tambah") {
                  include "../admin/lapangan/tambah.php";
                }elseif ($aksi == "ubah") {
                  include "../admin/lapangan/ubah.php";
                }
              }elseif($page == "tarif"){
                if($aksi == ""){
                  include "../admin/tarif/tarif.php";
                }elseif ($aksi == "tambah") {
                  include "../admin/tarif/tambah.php";
                }elseif ($aksi == "ubah") {
                  include "../admin/tarif/ubah.php";
                }
              }elseif ($page == "penyewaan") {
                if($aksi == ""){
                  include "../admin/penyewaan/penyewaan.php";
                }elseif ($aksi == "tambah") {
                  include "../admin/penyewaan/tambah.php";
                }elseif ($aksi == "ubah") {
                  include "../admin/penyewaan/ubah.php";
                }
              }elseif ($page == "pembayaran") {
                if($aksi == ""){
                  include "../admin/pembayaran/pembayaran.php";
                }elseif ($aksi == "tambah") {
                  include "../admin/pembayaran/tambah.php";
                }elseif ($aksi == "ubah") {
                  include "../admin/pembayaran/ubah.php";
                }
              }elseif ($page == "laporan") {
                if($aksi == ""){
                  include "../admin/laporan/laporan.php";
                }
              }elseif ($page == "konfirmasi") {
                if($aksi == ""){
                  include "../admin/konfirmasi/konfirmasi.php";
                }
              }
            ?>
    </div>
  </div>
</body>
</html>


