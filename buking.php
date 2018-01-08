<!DOCTYPE html>
<?php 
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("2018-01-01");
include 'aksi_buking.php';
?>
<html lang="en">
<head>
  <title>HOME - STARFUTSAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <script src="assets/jquery/jquery-1.12.4.js"></script>
  <script src="assets/jquery/jquery-ui.js"></script>
  <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
  </script>
  <style>
    @font-face{
      font-family:'Glyphicons Halflings';
      src:url(fonts/glyphicons-halflings-regular.eot);
    }

    .container-fluid > h1{
      margin-top: 50px;
      margin-bottom: 50px;
      background-color: black;
      color: white;
    }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    .container{
      margin-top: 60px;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
    }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">STARFUTSAL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-book"></span> Buking</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h3>Ketersediaan Lapangan<?php $tanggal;?></h3>
  <h4>Tanggal: </h4>
  <div class="form-horizontal">
    <p>Date: <input type="text" id="datepicker" class="form-control" styles="width: 400px"></p>
    <button class="btn btn-success" type="submit" name="telusuri"> Telusuri</button></p>
    <div class="table-responsive" id="tabel_pesan">
  </div>
      
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="col-sm-1">NO</th>
                <th class="col-sm-2">Waktu</th>
                <th class="col-sm-2">Harga</th>
                <th class="col-sm-2">Lapangan 1</th>
                <th class="col-sm-2">Lapangan 2</th>
                <th class="col-sm-2">Lapangan 3</th>
              </tr>
            </thead>
            <?php
            $start = "07:00";
            $end = "21:59";
            $now = date("H:i");
            $no = 1;
            
            $myrow = $buk->read('sewa_detail');
            $no = 1;
            while ($start <= $end){
              
                            
      ?>
            <tbody>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo "$start - ";
                    $start = date ("H:i", strtotime("+1 hour", strtotime($start)));
                    echo "$start\n <br/>";?></td>
                <td>
                <?php
                      if($start <= "20:00"){
                          echo "Rp. 100.000";
                      }else{
                        echo "Rp. 120.000";
                      }
                ?> 
                </td>
                <?php
                $status1 = false;
                $status2 = false;
                $status3 = false;
                foreach ($myrow as $row){

                  if($row["KODE_LAPANGAN"] == 'L01' && $row["JAM_SELESAI"] == $start.":00" && $row["TGL_SEWA"] == $tanggal){
                    $status1 = true;
                  }else{
                    $status1;
                  }

                  if($row["KODE_LAPANGAN"] == 'L02' && $row["JAM_SELESAI"] == $start.":00" && $row["TGL_SEWA"] == $tanggal){
                    $status2 = true;
                  }else{
                    $status2;
                  }

                  if($row["KODE_LAPANGAN"] == 'L03' && $row["JAM_SELESAI"] == $start.":00" && $row["TGL_SEWA"] == $tanggal){
                    $status3 = true;
                  }else{
                    $status3;
                  }
                }

                ?>
                <td>
                  <?php
                      if($status1 == true)
                        echo "BOOKED";
                      else
                        echo '<a href="<?php ?>" class="btn btn-success btn-sm">Pesan</a>';
                  ?>  
                </td>
                <td>
                  <?php
                      if($status2 == true)
                        echo "BOOKED";
                      else
                        echo '<a href="<?php ?>" class="btn btn-success btn-sm">Pesan</a>';
                  ?>
                </td>
                <td>
                  <?php
                      if($status3 == true)
                        echo "BOOKED";
                      else
                        echo '<a href="<?php ?>" class="btn btn-success btn-sm">Pesan</a>';
                  ?>
                </td>
              </tr>
            </tbody>
              <?php
        }
      ?>                
          </table>
        </div>

      <h3 align="center">Keranjang Pemesanan</h3>
      <div class="table-responsive" id="tabel_lapangan">     
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="col-sm-1">NO</th>
            <th class="col-sm-3">Lapangan</th>
            <th class="col-sm-3">Tanggal</th>
            <th class="col-sm-3">Waktu</th>
            <th class="col-sm-1">Action</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
    </div>
<div style='margin-left: auto;margin-right: auto;text-align: center;'>
</div>
</body>
</html>