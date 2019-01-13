<?php  
//start session
session_start();
require 'function.php';

//cek cookie
if (isset($_COOKIE['loginuser']) && isset($_COOKIE['ganteng']) ) {
  $id = $_COOKIE['bamswijayanto'];
  $key = $_COOKIE['ganteng'];
  
  //ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM pelanggan WHERE id_pelanggan = $id_pelanggam");
  $row =  mysqli_fetch_assoc($result);

  //cek cookie dan username
  if ( $ganteng === hash('sha256', $row['username']) ) {
    $_SESSION['loginuser'] = true;
  }
  
}

if (isset($_POST["loginuser"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM pelanggan WHERE username = '$username' AND password = '$password'");
  //cek username
  if(mysqli_num_rows($result) === 1 ){
    //set session
    $_SESSION["loginuser"] = true;
    //cek remember me
      if (isset($_POST['remember'])) {
        
      //buat cookie
        setcookie('bamswijayanto', $row['id'], time()+3600);
        setcookie('ganteng', hash('sha256', $row['username']), time()+3600);
      }

header("Location: index.php");
        exit;
  }
    else{
    echo "<script>
    alert('Username dan Password SALAH!');
    </script>";
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
                <li> <a href="orderbanner.php" target="_self">Desain Banner</a> </li>
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
                <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Login</a> 
              <ul class="dropdown-menu" role="menu">
                <li> <a href="loginadmin.php" target="_self">Admin</a> </li>
                <li> <a href="loginuser.php" target="_self">User</a> </li>
          </ul>
        </li>
        </div>
      </div>
    </nav>
</div>
</div>

<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST">
          <span class="login100-form-title p-b-26">
           Login User
          </span>
          <span class="login100-form-title p-b-48">
            <i class="zmdi zmdi-font"></i>
          </span>
          <br>
          <br>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="username" id="username">
            <span class="focus-input100" data-placeholder="Username"></span>
          </div>


          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="password" id="password">
            <span class="focus-input100" data-placeholder="Password"></span>
          </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn" name="loginuser">
                Login!
              </button>
            </div>
          </div>

              <div class="text-center p-t-115">
            <span class="txt1">
           Remember Me <input type="checkbox" name="remember" id="remember">
            </span>
          <div class="text-center p-t-115">
            <span class="txt1">
              Don’t have an account?
            </span>

            <a class="txt2" href="daftaruser.php">
              Daftar!
            </a>
          </div>
        </form>
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