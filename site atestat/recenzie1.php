<?php
  session_start();
  if(isset($_POST['email']))
  {
    require("connection.php");
    $val = $_POST['email'];

    $verific = "SELECT * FROM newsletter WHERE email = '$val' ";
    $result = mysqli_query($con, $verific);
    $ok = mysqli_num_rows($result);

    if($ok == 0)
    {
      $insert = "INSERT INTO `newsletter`(`id`, `email`) values ('', '$val') ";
      mysqli_query($con, $insert);
      echo "
      <script>
      alert('De acum esti abonat la newsletter');
      </script>
      ";
    }
    else
    {
      echo "
      <script>
          alert('Esti deja abonat');
      </script>
      ";
    }
  }
  if(isset($_SESSION['user']))
  {
    $link = "logout.php";
    $text = "Logout";
    $user_id = $_SESSION['user'];
    $nume = $_SESSION['nume'];
    // echo $nume;
  }
  else
  {
    $link = "login.php";
    $text = "Log in";
    $user_id = 0;
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

<style>
th, td
{
    padding:0 100px;
}
</style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Day Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v4.0.1
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">PC_shop@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +40356 123 456
      </div>
      <div class="social-links d-none d-md-block">
      <a href="<?php echo $link?>"> <?php echo $text?> </a>
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>
  <?php     
        if(isset($_SESSION['nume']))
        {
    ?>
        <p style="position:absolute; right:550px; top:7px; color:white"> <b>Welcome,  <?php echo $nume ?> </b></p>

    <?php
        }
    ?>


<!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="Home.php">PC shop</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto " href="Home.php">Home</a></li>
          <li><a class="nav-link scrollto" href="Despre_noi.php">Despre noi</a></li>
          <li><a class="nav-link scrollto" href="Catalog.php">Catalog</a></li>
          <li><a class="nav-link scrollto " href="Recenzii.php">Configuratii PC de gaming</a></li>
          <li><a class="nav-link scrollto " href="Tutorial.php">Tutorial asamblare PC</a></li>
          <li><a class="nav-link scrollto" href="Contact.php">Contact</a></li>
          <li><a class="nav-link scrollto" href="Cos.php">Cos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
  <center>
  
  <p><br><br></p>
  <h1 style="font-size:50px;font-family:Times New Roman;color:black">Configuratie PC de buget</h1>
  <p><br><br></p>
  <p style="font-size:35px;font-family:Times New Roman;color:black">Pe rezoluții mai mici de FULL HD cu o astfel de configurație n-ar trebui să avem nicio problemă. Sigur că nu vom avea maxim de FPS-uri, dar sigur ne vom juca decent mai toate titlurile anilor trecuți. Un exemplu de configuratie de buget este:
  </p>
  <p><br></p>
  
  </center>
  <div style="margin-left:600px">
  <p style="font-size:35px;font-family:Times New Roman;color:red" >-Procesor Intel Comet Lake, Celeron G5900 3.4GHz box</p>
  <p style="font-size:35px;font-family:Times New Roman;color:red">-Placa de baza MSI B460M PRO </p>
  <p style="font-size:35px;font-family:Times New Roman;color:red">-Memorie ADATA 8GB DDR4 2666MHz CL19 1.2v </p>
  <p style="font-size:35px;font-family:Times New Roman;color:red">-HDD WD Blue 1TB, 7200rpm, 64MB, SATA 3 </p>
  <p style="font-size:35px;font-family:Times New Roman;color:red">-Carcasa Floston GRAVITY Black </p>
  <p style="font-size:35px;font-family:Times New Roman;color:red">-Sursa PSU CHIEFTEC 500W GPC-500S </p>
  </div>
<p>
<br>
<br>
<br>
<center>
<img style=" width:400px; height:400px;"src="assets/img/carcasa1.jpg">
</center>
</p>

  
  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>PC Shop</h3>
              <p>
                Strada Ciocarliei, nr.3 <br>
                Timisoara, Timis<br><br>
                <strong>Phone:</strong> +40356 123 456<br>
                <strong>Email:</strong> PC_shop@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Acasa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Despre noi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Termeni si conditii</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politica de confidentialitate</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Newsletter</h4>
            <p>Abonati-va la newsletter pentru a nu rata detalii cu privire la viitoarele promotii:</p>
            <form action="" method="post">
              <input type="email" name="email">
              <input type="submit" value="Aboneaza-te">
            </form>

          </div>

        </div>
      </div>
    </div>

    
  </footer><!-- End Footer -->
    

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>