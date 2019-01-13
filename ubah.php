<?php  
session_start();
if (!isset($_SESSION["loginadmin"])) {
  header("Location: loginadmin.php");
  exit;
}
require 'function.php';

$user = query("SELECT * FROM `pelanggan` ORDER BY `id_pelanggan` DESC");

//ambil data di URL
$id = $_GET["id"];
$row = query("SELECT * FROM `pelanggan` WHERE `id_pelanggan` = $id")[0];
//cek apakah tombol submit sudah ditekan apa belum
if(isset($_POST["submit"]) ){

//cek apakah data berhasil diubah atau tidak
if(ubah($_POST) > 0){
  echo "
      <script>
      alert('data berhasil diubah!');
      document.location.href = 'memberlist.php';
      </script>
  ";
}else {
  echo "
      <script>
      alert('data gagal diubah!');
      document.location.href = 'memberlist.php';
      </script>
  ";
}
}

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
  <link rel="stylesheet" type="text/css" href="css/admin.css">

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
            <li><a class="page-scroll" href="adminpage.php" target="_self">Recent </a></li>
                <li><a class="page-scroll" href="orderdone.php" target="_self">Order Done</a></li>
                <li><a class="page-scroll" href="memberlist.php" target="_self">Member List</a></li>
             
              <!-- JIKA BELUM LOGIN MAKA TAMPILKAN MENU LOGIN -->
                 <?php if (!isset($_SESSION["loginadmin"])): ?>
                <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Login</a> 
              <ul class="dropdown-menu" role="menu">
                <li> <a href="loginadmin.php" target="_self">Admin</a> </li>
                <li> <a href="loginuser.php" target="_self">User</a> </li>
                 <?php endif; ?>
                <!-- JIKA SUDAH LOGIN MAKA AKAN KELUAR LIST LOGOUT
         -->   
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
<form action="" method="POST"  enctype="multipart/form-data">

  <div class="limiter">
    <div class="container-table100">
      <div class="wrap-table100">
          <div class="table">

            <div class="row header">
              <div class="cell">
                ID
              </div>
              <div class="cell">
                Username
              </div>
              <div class="cell">
                E-mail
              </div>
              <div class="cell">
                Password
              </div>
               <div class="cell">
                Ubah
              </div>
         
            </div>

<?php $i=1; ?>
<?php foreach ($user as $row) : ?>
  <div class="row">
              <div class="cell" data-title="id">
              <input type="hidden" name="id" placeholder="id" required=""
      value="<?php echo $row["id_pelanggan"]; ?>">
              </div>
              <div class="cell" data-title="username">
              <input type="text" name="username" id="username" placeholder="username" required=""
      value="<?php echo $row["username"]; ?>">
              </div>
              <div class="cell" data-title="email">
                   <input type="text" name="email" id="email" placeholder="email" required=""
      value="<?php echo $row["email"]; ?>">              </div>
              <div class="cell" data-title="password">
                     <input type="text" name="password" id="password" placeholder="password" required=""
      value="<?php echo $row["password"]; ?>">  
              </div>

        <BUTTON type="submit" name="submit">Ubah Data</BUTTON>

                
       

        
           
    
            </div>
  <?php $i++ ?>
<?php endforeach; ?>

          </div>
      </div>
    </div>
  </div>
</form>
   
                      <!-- Footer -->

<footer class="footer-bamsdesign">

<div class="footer-left">
   <a href=""> <img src="images/logorg.png" width="220" height="35" alt="bamslogo" /> </a>
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
         <a href="">Bagaimana cara memesan?</a><br>
         <a href=""> Bagaimana cara pembayaran?</a><br>
         <a href=""> Ada kontak lain yang bisa dihubungi?</a><br>
         <a href=""> Bisa saya lihat portofolio anda?</a>
       
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