
<!-- ALL SCRIPT BY
Name: Bambang Wijayanto
NIM: 17.02.0078
Class: D3 Manajemen Informatika - 02
University: Amikom University of Yogyakarta
 -->
 
<?php 
session_start();
if (!isset($_SESSION["loginuser"])) {
  header("Location: loginuser.php");
  exit;
}

require 'function.php';

//cek apakah tombol submit sudah ditekan apa belum
if(isset($_POST["submit"]) ){

//cek apakah data berhasil sitambahkan atau tidak
if(tambah($_POST) > 0){
  echo "
      <script>
      alert('order anda berhasil!, tunggu konfirmasi dari kami');
      document.location.href = 'index.php';
      </script>
  ";
}else {
  echo "
      <script>
      alert('order anda gagal');
      document.location.href = 'index.php';
      </script>
  ";
}


}
 ?>

<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
<link href="images/iconruang.png" rel="shortcut icon" type="image/x-icon">
      <!-- Resource style -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="plugins/flexslider.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/main.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
      <!-- Title berjalan -->
<title>Ruang Grafika | Jasa Desain Grafis & Adversitements - </title>
<script type="text/javascript">   var txt="RuangGrafika | Jasa Desain Grafis & Adversitements";   var kecepatan=500;   var segarkan=null;   function bergerak() {     document.title=txt;    txt=txt.substring(1,txt.length)+txt.charAt(0);    segarkan=setTimeout("bergerak()",kecepatan);   }   bergerak(); </script> 

</head>

<body>
<!--Navbar Header -->
<div class="wrapper">
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand page-scroll" href="index.php"  target="_self"><img src="images/logorg.png" width="210" height="35" alt="bamslogo" /></a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a class="page-scroll" href="index.html" target="_self">Beranda</a></li>
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
       
          </ul>
        </li>
        </div>
      </div>
    </nav>
</div>
</div>


<!--Home Content -->
<div class="home">
<div class="logo">
<br>
<br>
<h2>FORM PEMESANAN</h2>
</div>
 <div class="single-product-area">
    <div class="row">
      <div class="col-md-4">
        <div class="single-sidebar">
          <div class="thubmnail-recent">
            <img src="images/hargacv.png" class="recent-thumb" alt="harga desain">
            <br>
            <br>
             <img src="images/harganamecard.png" class="recent-thumb" alt="harga desain">
            </div>
          </div> 
      </div>
                
 <div class="col-md-8">
      <div class="content-right">
         <form action="" class="checkout" method="POST" name="checkout">
                              <div id="customer_details" class="col2-set">
                                      <div class="col-1">
                                              <p>
                                                  <label for="nama">Nama Lengkap </label>
                                                  <input type="text" placeholder="Nama Lengkap Anda" name="nama" id="nama" class="input-text" required="harap isi bidang ini">
                                              </p>
                                              <p>
                                                  <label for="namadesain">Nama Desain </label>
                                                  <input type="text" value="" placeholder="Nama desain anda "name="namadesain" id="namadesain" class="input-text" required="harap isi bidang ini">
                                              </p>
                                               <p>
                                                  <label for="telepon">No. Telp / Hp</label>
                                                  <input type="text" value="" placeholder="085xxxxxxxxx" name="telepon" id="telepon" class="input-text" required="harap isi bidang ini">
                                              </p>
                                                <p>
                                                  <label for="email">E-mail</label>
                                                  <input type="email" value="" placeholder="ask@gmail.com" id="email"  name="email" class="input-text" required="harap isi bidang ini">
                                              </p>  
                                               <p>
                                                  <label for="alamat">Alamat</label>
                                                  <textarea cols="5" rows="2" placeholder="Alamat rumah anda" class="input-text " id="alamat" name="alamat" required="harap isi bidang ini"></textarea>
                                              </p>
                                          </div>
                                     
                                    <div class="col-2">
                                                 <p>
                                                  <label for="gambar"> Contoh desain yang disukai (bila ada) </label>
                                                  <input type="file" name="gambar" id="gambar" >
                                              </p>
                                             
                                              <p>
                                                  <label for="tanggal"> Tanggal Pesan </label>
                                                  <input type="date" name="tanggal" placeholder="Bidang Usaha anda, contoh: kuliner" class="input-text" required="harap isi bidang ini" id="tanggal">
                                              </p>
                                                <p>
                                                  <label for="catatan">Catatan Anda</label>
                                                  <textarea cols="5" rows="2" placeholder="Catatan tentang desain anda" class="input-text " name="catatan" id="catatan"></textarea>
                                             </p>   
                                               <p>
                                            
                                                  <button name="submit" type="submit">Submit</button>
                                              </p>
                                              <br>
                                              <p>
                                                  <button name="reset" type="reset">Cancel</button>
                                              </p>
                                      </div>
                                </div>
                            </form>
                        </div>                       
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

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="plugins/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="plugins/jquery.flexslider.js"></script>
   

</body>
</html>