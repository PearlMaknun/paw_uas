<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME - STARFUTSAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
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
      padding-top: 50px;
    }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
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
      <a class="navbar-brand" href="#">STARFUTSAL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Beranda</a></li>
        <li><a href="#Tentang">Tentang</a></li>
        <li><a href="#Fasilitas">Fasilitas</a></li>
        <li><a href="#LnK">Lokasi dan Kontak</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="buking.php"><span class="glyphicon glyphicon-book"></span> Buking disini!</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="assets/images/futsal-HD-crop.JPG" alt="Image">
        <div class="carousel-caption">
          <h3>Play Fair!</h3>
          <p>....</p>
        </div>      
      </div>

      <div class="item">
        <img src="assets/images/futsal-HD-crop.JPG" alt="Image">
        <div class="carousel-caption">
          <h3>STAR FUTSAL COMPETITION!</h3>
          <p>....</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center" id="Tentang">
<div class="container-fluid">
  <h1>Star Futsal</h1>
</div>
</div>
<div class="container-fluid">
<div class="row">
  <div class="col-sm-4">
    <img src="assets/images/futsal.jpg" alt="gambar-futsal" style="width: 100%"/>
  </div>
    <div class="col-sm-8">
      <p>STAR Futsal is Indonesia’s largest indoor soccer centers chain – operating at fourteen locations, spread across ten cities along the country’s archipelago. The company’s philosophy is to combine sports venues with entertainment in providing an alternative and healthier lifestyle to Indonesia’s metropolitan executives and young adults.</p><br>


    <p>Born out of the dreams of a few entrepreneurs, and inspired by Indonesians’ love for soccer, Planet Futsal opened its first branch in 2004 to kick off the Euro competition. It was the first indoor sport center of its kind, dedicated to Futsal or five-a-side soccer that boasted the country’s first artificial turf pitches. Although commonplace in Europe, artificial turf was an unknown sporting surface in Indonesia. The business idea was simple, but so revolutionary that it propelled the growth of a new industry. As the sport’s popularity grew, Futsal-related businesses, from magazines to events management, mushroomed.
    </p><br>
    <button type="button" class="btn btn-info">Read More</button>
    </div>
</div>
</div>
</div>

<div class="container text-center" id="Fasilitas">
<div class="container-fluid">
  <h1>Fasilitas</h1>
</div>
</div>  
<div class="container text-center">
  <div class="row">
    <div class="col-sm-4">
      <img src="assets/images/fasilitas-resepsionis.JPG" class="img-responsive" style="width:100%" alt="Image">
      <p>Resepsionis</p>
    </div>
    <div class="col-sm-4"> 
      <img src="assets/images/fasilitas-ruanggantiloker.JPG" class="img-responsive" style="width:100%" alt="Image">
      <p>Ruang Ganti & Loker</p>    
    </div>
    <div class="col-sm-4">
      <img src="assets/images/fasilitas-cafe.JPG" class="img-responsive" style="width:100%" alt="Image">
      <p>Star Futsal Cafe</p>
    </div>
  </div>
</div><br>

<div class="container text-center" id="LnK">
<div class="container-fluid">
  <h1>Lokasi dan Kontak</h1>
</div>
</div>

<?php
require_once 'lokasi.php';
require_once 'footer.php';
?>

</html>