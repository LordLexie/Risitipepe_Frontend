<?php
include("standard/lib.php");
$id = $_GET['post'];

$select = "select * from blog where `seo_title` = '{$id}' ";
$all = $db->select($select);
while($data = mysqli_fetch_array($all))
{
  $title = $data['title'];
  $content = $data['content'];
  $img = "dashboard/blog/{$data['code']}.jpeg";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RISITIPEPE | FOR ENTREPRENUERS ON THE GO!</title>
  <meta content="Risitipepe, Risiti Pepe, Risiti, Pepe, Invoices, Quotations, Online Invoices, Online Quotations, Reconcile Payments, Mpesa" name="keywords">
  <meta content="Businesses run better with Risitipepe. Track expenses, manage cash flow & create invoices. Risitipepe gives you what you need most to run your business, all in one place. Free 30 Day Trial. Automated Invoicing. Multi-User Login. Assisted Onboarding." name="description">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center"  >
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">sales@risitipepe.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+254788060115</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/risitipepe" class="facebook" target = "blank" ><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/risitipepe/" class="linkedin"  target = "blank"><i class="bi bi-instagram"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1><a href="index.html"><img src = "assets/img/logo.png" style = "width:100px;" ></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
          <li><a class="nav-link scrollto" href="blog.php">Blog</a></li>
          <li><a class="nav-link scrollto" href="index.html#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="standard/">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section  >
      <div class="container" >

        <div class="row">
          
        <?php
        
            echo "<div class=\"col-md-9 col-sm-12\" >";
            

            echo "<div class=\"icon-box\"  >";

            echo "<div>";
            echo "<img src = \"{$img}\" style = \"width:100%; margin-bottom:10px;\" >";
            echo "</div>";

            echo "<h4 class=\"title\">{$title}</h4>";

            echo "<div class=\"description\"> ";
            echo $content;
            echo "</div>";

            echo "</div>";
            echo "</div>";
      

        ?>

        <div class = "col-md-3">
          <div class = "icon-box">
            <h4>Related Articles</h4>
          </div>
        </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Get updates on the latest developments in the world of accounting.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>RISITIPEPE</h3>
            <p>
              Muthithi Rd<br>
              Westlands, Nairobi<br>
              Kenya<br><br>
              <strong>Phone:</strong> +254 788 060 115<br>
              <strong>Email:</strong> sales@risitipepe.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#pricing">Pricing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contacts</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Risitipepe is a cloud based accounting software giving you and your team flexibilty in your day to day operations.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
     
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        A product of <a href="https://alexiedigitalstudios.com/" target = "blank" >
          <b><span style = "color:red;" >Alexie</span> Digital Studios</b>
        </a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
    <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BG54FRF4B4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BG54FRF4B4');
</script>

</body>

</html>