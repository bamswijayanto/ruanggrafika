<?php  
session_start();

?>

<!-- ALL SCRIPT BY
Name: Bambang Wijayanto
NIM: 17.02.0078
Class: D3 Manajemen Informatika - 02
University: Amikom University of Yogyakarta
 -->
 
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Title Bergerak -->
<title>Ruang Grafika | Jasa Desain Grafis & Adversitements</title>
<script type="text/javascript">   var txt="Ruang Grafika | Jasa Desain Grafis & Adversitements - ";   var kecepatan=500;   var segarkan=null;   function bergerak() {     document.title=txt;    txt=txt.substring(1,txt.length)+txt.charAt(0);    segarkan=setTimeout("bergerak()",kecepatan);   }   bergerak(); </script> 

<!-- FAV ICON -->
<link href="images/iconruang.png" rel="shortcut icon" type="image/x-icon">

<!-- Resource style -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts/legend.ttf" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="plugins/flexslider.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main.css">

</head>

<body>
<!--Navbar Header -->
<div class="wrapper">
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"aria-expanded="false">
           <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand page-scroll" href="index.php"  target="_self"><img src="images/logorg.png" width="210" height="35" alt="bamslogo" /></a>
           </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a class="page-scroll" href="index.php" target="_self">Beranda</a></li>
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Pesan Sekarang</a> 
              <ul class="dropdown-menu" role="menu">
                <li> <a href="orderbaju.php" target="_self">Desain Baju</a> </li>
                <li> <a href="orderbrosur.php" target="_self">Desain Korsa</a> </li>
                <li> <a href="orderundangan.php" target="_self">Desain Undangan </a> </li>
                <li> <a href="orderlogo.php" target="_self">Desain Logo</a> </li>
                <li> <a href="orderbrosur.php" target="_self">Desain Brosur</a> </li>
                <li> <a hre f="orderbanner.php" target="_self">Desain Banner</a> </li>
                <li> <a href="orderidentitas.php" target="_self">Desain Identitas</a> </li>
                <li> <a href="ordercardgame.php" target="_self">Desain Cardgame</a> </li>
                <li> <a href="ordergraffiti.php" target="_self">Desain Graffiti</a> </li>
                <li> <a href="orderposter.php" target="_self">Desain Poster</a> </li>
                <li> <a href="orderstiker.php" target="_self">Desain Stiker</a> </li>
                <li> <a href="orderpin.php" target="_self">Desain Pin &amp; Cd</a> </li>
              </ul>
            </li>
                <li><a class="page-scroll" href="contact.php" target="_self">Kontak</a></li>
                <li><a class="page-scroll" href="about.php" target="_self">Tentang</a></li>
                <li><a class="page-scroll" href="testimoni.php" target="_self">Testimoni</a></li>
                
              <!-- JIKA BELUM LOGIN MAKA TAMPILKAN MENU LOGIN -->
                 <?php if (!isset($_SESSION["loginuser"])): ?>
                <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Login</a> 
                <ul class="dropdown-menu" role="menu">
                <li> <a href="loginadmin.php" target="_self">Admin</a> </li>
                <li> <a href="loginuser.php" target="_self">User</a> </li>
                 <?php endif; ?>
                <!-- JIKA SUDAH LOGIN MAKA AKAN KELUAR LIST LOGOUT  -->    
                <?php if (isset($_SESSION["loginuser"])): ?>
                 <li> <a href="logout.php" target="_self">logout</a> </li>
                <?php endif; ?>
            
          </ul>
        </li>
        </div>
      </div>
    </nav>
</div> 

<!-- CONTENT -->
<img src="images/home.png" width="100%" height="65%">
<img src="images/HOMEEE.png" width="100%" height="65%">
<br>
<br>



<div class="homepilih">
<h1>Pilih Jasa Desain Sesuai Kebutuhan Anda</h1>
</div>

<div id="main">
<div class="inner">

        <!-- DESAIN KAOS -->
<div class="thumbnails">
<div class="box">
<div class="inner">
<div class="flexslider">

  <ul class="slides">
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="">
      <img src="images/baju.jpg" draggable="false">
      <p class="flex-caption">Tshirt Klaten</p>
    </li>
       <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/baju1.png" draggable="false">
      <p class="flex-caption">Kaos Amikom 1</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/baju2.png" draggable="false">
      <p class="flex-caption">Kaos Amikom 2</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/baju3.png" draggable="false">
      <p class="flex-caption">Polo Amikom</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/baju4.jpg" draggable="false">
      <p class="flex-caption">Hoodie Kurang Turu Crew</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/baju5.jpg" draggable="false">
      <p class="flex-caption">Hoodie Klaten</p>
    </li>
  </ul>

  <ol class="flex-control-paging"></ol>
  <ul class="flex-direction-nav">
    <li> <a class="flex-prev" href="#">Previous</a> </li>
    <li> <a class="flex-next" href="#">Next</a>  </li>
  </ul>
</div>
  <h3>Desain Baju</h3>
  <p>Contoh Desain Yang Pernah Dibuat</p>    
  <button onclick="window.location.href='orderbaju.php'" class="button style1 fit">Pesan Sekarang</button>
</div>
</div>

          <!-- DESAIN KORSA -->

<div class="box">
<div class="inner">
<div class="flexslider">
  
  <ul class="slides">
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/korsa1.jpg" draggable="false">
      <p class="flex-caption">Desain Korsa 1</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="">
      <img src="images/korsa2.jpg" draggable="false">
      <p class="flex-caption">Desain Korsa 2</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/korsa3.jpg" draggable="false">
      <p class="flex-caption">Desain Korsa 3</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/korsa4.jpeg" draggable="false">
      <p class="flex-caption">Desain Korsa 4</p>
    </li>    
  </ul>

  <ol class="flex-control-paging"></ol>
  <ul class="flex-direction-nav">
    <li>  <a class="flex-prev" href="#">Previous</a>  </li>
    <li>  <a class="flex-next" href="#">Next</a>  </li>
  </ul>
</div>

  
  <h3>Desain Korsa</h3>
  <p>Contoh Desain Yang pernah Dibuat</p>
  <button onclick="window.location.href='orderkorsa.php'" class="button style2 fit">Pesan Sekarang</button>
</div>
</div>


        <!-- DESAIN UNDANGAN -->
<div class="box">
<div class="inner">
  <div class="flexslider">
  
  <ul class="slides">
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/undangan1.jpg" draggable="false">
      <p class="flex-caption">Desain Undangan 1</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="">
      <img src="images/undangan2.jpg" draggable="false">
      <p class="flex-caption">Desain Undangan 2</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/undangan3.jpg" draggable="false">
      <p class="flex-caption">Desain Undangan 3</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/undangan4.jpg" draggable="false">
      <p class="flex-caption">Desain Undangan 4</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/undangan5.jpeg" draggable="false">
      <p class="flex-caption">Desain Undangan 5</p>
    </li>
  </ul>

  <ol class="flex-control-paging"></ol>
  <ul class="flex-direction-nav">
    <li>  <a class="flex-prev" href="#">Previous</a>  </li>
    <li>  <a class="flex-next" href="#">Next</a>  </li>
  </ul>
</div>

  <h3>Desain Undangan</h3>
    <p>Contoh Desain Yang pernah Dibuat</p>
    <button onclick="window.location.href='orderundangan.php'" class="button style3 fit">Pesan Sekarang</button>
</div>
</div>



        <!-- DESAIN LOGO -->
<div class="thumbnails">
<div class="box">
<div class="inner">
<div class="flexslider">

  <ul class="slides">
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
      <img src="images/logo1.png" draggable="false">
      <p class="flex-caption">Aby Toys</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/logo2.png" draggable="false">
      <p class="flex-caption">Mr Vegan Green</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/logo3.png" draggable="false">
      <p class="flex-caption">Aksestani</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/logo4.jpg" draggable="false">
      <p class="flex-caption">Club Burung</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/logo5.png" draggable="false">
      <p class="flex-caption">Mrbamsgraff Logo</p>
    </li>
        <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/logo6.jpg" draggable="false">
      <p class="flex-caption">Andik Logo</p>
    </li>
  </ul>

  <ol class="flex-control-paging"></ol>
  <ul class="flex-direction-nav">
    <li> <a class="flex-prev" href="#">Previous</a> </li>
    <li> <a class="flex-next" href="#">Next</a>  </li>
  </ul>
</div>
  <h3>Desain Logo</h3>
  <p>Contoh Desain Yang Pernah Dibuat</p>    
  <button onclick="window.location.href='orderlogo.php'" class="button style3 fit">Pesan Sekarang</button>
</div>
</div>

        <!-- DESAIN BROSUR -->
<div class="box">
<div class="inner">
<div class="flexslider">
  
  <ul class="slides">
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/brosur1.png" draggable="false">
      <p class="flex-caption">Desain Brosur 1</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
      <img src="images/brosur2.png" draggable="false">
      <p class="flex-caption">Desain Brosur 2</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/brosur3.png" draggable="false">
      <p class="flex-caption">Desain Brosur 3</p>
    </li>
  </ul>

  <ol class="flex-control-paging"></ol>
  <ul class="flex-direction-nav">
    <li>  <a class="flex-prev" href="#">Previous</a>  </li>
    <li>  <a class="flex-next" href="#">Next</a>  </li>
  </ul>
</div>
  
  <h3>Desain Brosur</h3>
  <p>Contoh Desain Yang pernah Dibuat</p>
  <button onclick="window.location.href='orderbrosur.php'" class="button style2 fit">Pesan Sekarang</button>
</div>
</div>

        <!-- DESAIN BANNER -->
<div class="box">
<div class="inner">
  <div class="flexslider">
  
  <ul class="slides">
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/banner1.png" draggable="false">
      <p class="flex-caption">Desain Banner 1</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="">
      <img src="images/banner2.png" draggable="false">
      <p class="flex-caption">Desain Banner 2</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/banner3.png" draggable="false">
      <p class="flex-caption">Desain Banner 3</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/banner4.png" draggable="false">
      <p class="flex-caption">Desain Banner 4</p>
    </li>
  </ul>

  <ol class="flex-control-paging"></ol>
  <ul class="flex-direction-nav">
    <li>  <a class="flex-prev" href="#">Previous</a>  </li>
    <li>  <a class="flex-next" href="#">Next</a>  </li>
  </ul>
</div>

  <h3>Desain Banner</h3>
    <p>Contoh Desain Yang pernah Dibuat</p>
    <button onclick="window.location.href='orderbanner.php'" class="button style1 fit">Pesan Sekarang</button>
</div>
</div>

        <!-- DESAIN IDENTITAS -->
<div class="box">
<div class="inner">
<div class="flexslider">
  <ul class="slides">
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="">
      <img src="images/identitas1.jpg" draggable="false">
      <p class="flex-caption">Desain CV 1</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/identitas2.jpg" draggable="false">
      <p class="flex-caption">Desain CV 2</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/identitas3.jpg" draggable="false">
      <p class="flex-caption">Desain CV 3</p>
    </li>
      <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/identitas4.png" draggable="false">
      <p class="flex-caption">Desain Kartu Nama 1</p>
    </li>
      <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/identitas5.png" draggable="false">
      <p class="flex-caption">Desain Kartu Nama 2</p>
    </li>
  </ul>

  <ol class="flex-control-paging"></ol>
  <ul class="flex-direction-nav">
    <li>  <a class="flex-prev" href="#">Previous</a>  </li>
    <li>  <a class="flex-next" href="#">Next</a>  </li>
  </ul>
</div>

  <h3>Desain Identitas</h3>
  <p>Contoh Desain Yang Pernah Dibuat</p>
  <button onclick="window.location.href='orderidentitas.php'" class="button style1 fit">Pesan Sekarang</button>
</div>
</div>  

        <!-- DESAIN CARD GAME -->
<div class="box">
<div class="inner">
<div class="flexslider">
  <ul class="slides">
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/gamekartu3.jpeg" draggable="false">
      <p class="flex-caption">Desain Game Kartu 1</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="">
      <img src="images/game1.png" draggable="false">
      <p class="flex-caption">Desain Game Kartu 2</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/game2.png" draggable="false">
      <p class="flex-caption">Desain Game Kartu 3</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/game3.png" draggable="false">
      <p class="flex-caption">Desain Box Game</p>
    </li>
  </ul>

  <ol class="flex-control-paging"></ol>
  <ul class="flex-direction-nav">
    <li>  <a class="flex-prev" href="#">Previous</a>  </li>
    <li>  <a class="flex-next" href="#">Next</a>  </li>
  </ul>
</div>

  <h3>Desain Cardgame</h3>
  <p>Contoh Desain Yang Pernah Dibuat</p>
  <button onclick="window.location.href='ordercardgame.php'" class="button style2 fit">Pesan Sekarang</button>
</div>
</div>

        <!-- DESAIN GRAFFITI -->
<div class="box">
<div class="inner">
<div class="flexslider">

  <ul class="slides">
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="">
      <img src="images/graff1.png" draggable="false">
      <p class="flex-caption">Bams Rasta Wildstyle</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/graff2.png" draggable="false">
      <p class="flex-caption">Amikom Wildstyle</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/graff3.jpg" draggable="false">
      <p class="flex-caption">Mrbams Pink</p>
    </li>
        <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/graff4.jpg" draggable="false">
      <p class="flex-caption">Mrbams Simple</p>
    </li>
        <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/graff5.png" draggable="false">
      <p class="flex-caption">MrBams Throw Up</p>
    </li>
  </ul>

  <ol class="flex-control-paging"></ol>
  <ul class="flex-direction-nav">
    <li>  <a class="flex-prev" href="#">Previous</a>  </li>
    <li>  <a class="flex-next" href="#">Next</a>  </li>
  </ul>
</div>  

  <h3>Desain Graffiti</h3>
    <p>Contoh Desain Yang Pernah Dibuat</p>
    <button onclick="window.location.href='ordergraffiti.php'" class="button style3 fit">Pesan Sekarang</button>   
</div>
</div>

          <!-- DESAIN POSTER -->
<div class="box">
<div class="inner">
<div class="flexslider">

  <ul class="slides">
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="">
      <img src="images/poster1.jpg" draggable="false">
      <p class="flex-caption">Poter Kemerdekaan</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/poster5.jpg" draggable="false">
      <p class="flex-caption">Poster UGM</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/poster.png" draggable="false">
      <p class="flex-caption">Poster Iklan</p>
    </li>
      <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/poster6.jpg" draggable="false">
      <p class="flex-caption">Poster Iklan</p>
    </li>
  </ul>

  <ol class="flex-control-paging"></ol>
  <ul class="flex-direction-nav">
    <li>  <a class="flex-prev" href="#">Previous</a>  </li>
    <li>  <a class="flex-next" href="#">Next</a>  </li>
  </ul>
</div>  

  <h3>Desain Graffiti</h3>
    <p>Contoh Desain Yang Pernah Dibuat</p>
    <button onclick="window.location.href='ordergraffiti.php'" class="button style3 fit">Pesan Sekarang</button>   
</div>
</div>

        <!-- DESAIN STIKER -->
<div class="box">
<div class="inner">
<div class="flexslider">

  <ul class="slides">
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/stiker1.jpg" draggable="false">
      <p class="flex-caption">Desain 1</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
      <img src="images/stiker5.jpg" draggable="false">
      <p class="flex-caption">Desain 2</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/stiker6.jpeg" draggable="false">
      <p class="flex-caption">Desain 3</p>
    </li>
        <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/stiker4.jpg" draggable="false">
      <p class="flex-caption">Desain 4</p>
    </li>
  </ul>

<ol class="flex-control-paging"></ol>
  <ul class="flex-direction-nav">
    <li>  <a class="flex-prev" href="#">Previous</a>  </li>
    <li>  <a class="flex-next" href="#">Next</a>  </li>
  </ul>
</div>   

  <h3>Desain Stiker</h3>
  <p>Contoh Desain Yang Pernah Dibuat</p>
  <button onclick="window.location.href='orderstiker.php'" class="button style2 fit">Pesan Sekarang</button>
</div>
</div>

        <!-- DESAIN PIN & CD -->
<div class="box">
<div class="inner">
<div class="flexslider">
 
  <ul class="slides">
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      <img src="images/pin.png" draggable="false">
      <p class="flex-caption">Desain Pin Amikom</p>
    </li>
    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="">
      <img src="images/pin1.jpg" draggable="false">
      <p class="flex-caption">Desain Pin Brand</p>
    </li>
        <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="">
      <img src="images/cd1.jpeg" draggable="false">
      <p class="flex-caption">Desain CD 1</p>
    </li>
        <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="">
      <img src="images/cd2.png" draggable="false">
      <p class="flex-caption">Desain CD 2</p>
    </li>
        <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="">
      <img src="images/cd3.jpeg" draggable="false">
      <p class="flex-caption">Desain CD 3</p>
    </li>
  </ul>

  <ol class="flex-control-paging"></ol>
  <ul class="flex-direction-nav">
    <li>  <a class="flex-prev" href="#">Previous</a>  </li>
    <li>  <a class="flex-next" href="#">Next</a>  </li>
  </ul>
</div>

<h3>Desain Pin&amp;CD</h3>
  <p>Contoh Desain Yang Pernah Dibuat</p>
  <button onclick="window.location.href='orderpin.php'" class="button style1 fit">Pesan Sekarang</button>
</div>
</div>


<div class="homepilih">
<h2>Ingin Tanya<sup>2</sup> Hubungi WhatsApp Kami</h2>
          <a href="http://api.whatsapp.com/send?phone=6289670450300&amp;text=Permisi%20gan,%20Saya%20mau%20order%desain"><img src="images/wasap.png" width="55px" height="55px">&nbsp;<font size="6px">+6289670450300</font><br>
<br></a>
          <br>
</div>

   </div>
 </div>
</div>   
                      <!-- Footer -->
<footer class="footer-bamsdesign">

<div class="footer-left">
   <a href="index.php"> <img src="images/logorg.png" width="220" height="35" alt="bamslogo" /> </a>
        <p class="footer-links">
          SIMPLE
          ·
          CREATIVE
          ·
          EXCLUSIVE
        </p>
      </div>
<div class="footer-center">
        <div>
          <p class="footer-company-name">Ruang Grafika &copy; 2019. All Right Reservered.</p>
        </div>
<div class="footer-icons">
          &nbsp;<a href="https://facebook.com/bambang.soekamti.54"><img src="images/fb.png" width="40px" height="40px"></a>&nbsp;&nbsp;
          <a href="https://instagram.com/bamswijayanto"><img src="images/instagram.png" width="40px" height="40px"></a>&nbsp;
          <a href="http://api.whatsapp.com/send?phone=6289670450300&amp;text=Permisi%20gan,%20Saya%20mau%20order%20desain"><img src="images/wasap.png" width="40px" height="40px"></a>&nbsp;
          <a href="mailto:bamsdesain@gmail.com"><img src="images/gmail.png" width="40px" height="40x"></a>&nbsp;
        </div>
      </div>

<div class="footer-right">
        <p class="footer-company-faq">
          <span>F.A.Q</span>
         <a href="contact.php">Bagaimana cara memesan?</a><br>
         <a href="contact.php"> Bagaimana cara pembayaran?</a><br>
         <a href="contact.php"> Ada kontak lain yang bisa dihubungi?</a><br>
         <a href="about.php"> Bisa saya lihat portofolio anda?</a>
       
      </p>
      </div>

</footer>

<!-- SCRIPT GAHUL -->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="plugins/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="plugins/jquery.flexslider.js"></script>
    <script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    // more complex call
    $('.flexslider').flexslider({
         animation: "fade",
slideshow: "true",
slideshowSpeed: 3000,
animationSpeed: 800,
pauseOnHover: true,         easing: "swing",
         controlsContainer: ".flex-container",
         start: function(slider) {
           $('.total-slides').text(slider.count);
         },
         after: function(slider) {
           $('.current-slide').text(slider.currentSlide);
         }
    });
  });
</script>

</body>
</html>