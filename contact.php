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
<title>Ruang Grafika | Jasa Desain Grafis & Adversitements - </title>
<script type="text/javascript">   var txt="Ruang Grafika | Jasa Desain Grafis & Adversitements";   var kecepatan=500;   var segarkan=null;   function bergerak() {     document.title=txt;    txt=txt.substring(1,txt.length)+txt.charAt(0);    segarkan=setTimeout("bergerak()",kecepatan);   }   bergerak(); </script> 

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
           <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand page-scroll" href="index.php"  target="_self"><img src="images/logorg.png" width="210" height="35" alt="bamslogo" /></a> </div>
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
                <li> <a href="orderbanner.php" target="_self">Desain Banner</a> </li>
                <li> <a href="ordercv.php" target="_self">Desain Identitas</a> </li>
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
                <?php if (isset($_SESSION["loginadmin"])): ?>
                 <li> <a href="logout.php" target="_self">logout</a> </li>
                <?php endif; ?>
          </ul>
        </li>
        </div>
      </div>
    </nav>
</div>
</div>
<!-- CONTENT -->


<center>
<div class="logo">
  <br>
  <br>
<h2>Hubungi Kami</h2>
<h5>Jangan Ragu Hubungi Kami Kapanpun</h5>
</div>


<div class="font-image">
<a href="https://facebook.com/bambang.soekamti.54"><img src="images/fb.png" width="45px" height="45x">&nbsp;Bambang Wijayanto</a>&emsp;&emsp;
          <a href="https://instagram.com/bamswijayanto"><img src="images/instagram.png" width="45px" height="45px">&nbsp;@bamswijayanto</a><br>
          <a href="http://api.whatsapp.com/send?phone=6289670450300&amp;text=Permisi%20gan,%20Saya%20mau%20order%20desain"><img src="images/wasap.png" width="45px" height="45px">&nbsp;+6289670450300</a>&emsp;&emsp;
          <a href="mailto:bamnbang.0078@students.amikom.ac.id"><img src="images/gmail.png" width="45px" height="45px">&nbsp; bamsdesain@gmail.com</a>
</center>

<div class="bank">
<center>
<img src="images/unnamed.png" width="250px" height="150px">&emsp;&emsp;a/n Bambang WIjayanto&emsp;No Rek. 00080-01-61-001672-6</center></div>

<div class="logo">
<h2>Alamat Kami</h2>
</div>
<div class="peta">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4702.084452784369!2d110.60850793182892!3d-7.6868019747268095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a43e1501b256d%3A0x6493a2312ed7be6!2sSMK+Muhammadiyah+1+Klaten+Utara!5e0!3m2!1sen!2sid!4v1529500143828" width="100%" height="450" frameborder="0" style="border:2px" allowfullscreen></iframe>
</div>

   
<!-- FOOTER -->
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
          <a href="http://api.whatsapp.com/send?phone=6289670450300&amp;text=Permisi%20mas,%20Saya%20mau%20order%desain"><img src="images/wasap.png" width="40px" height="40px"></a>&nbsp;
          <a href="mailto:bamsdesain@gmail.com"><img src="images/gmail.png" width="40px" height="40x"></a>&nbsp;
        </div>
      </div>

<div class="footer-right">
  <p class="footer-company-faq">
    <span>F.A.Q</span>
        <a href="contact.php">Bagaimana cara pemesanan?</a><br>
       <a href="contact.php"> Bagaimana cara pembayaran?</a><br>
        <a href="contact.php"> Ada kontak lain yang bisa dihubungi?</a><br>
        <a href="about.php"> Bisa saya lihat profile anda?</a>
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