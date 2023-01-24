<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.2.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:pr.mn@jmm.gov.my">pr.mn@jmm.gov.my</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>(+60) 03-2267 1111</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://www.tiktok.com/@muziumnegarasmi" class="tiktok"><i class="bi bi-tiktok"></i></a>
            <a href="https://www.facebook.com/muziumnegaramalaysia/?_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/muziumnegararasmi/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCphJGO2P9Vz345vbY1A2wew" class="youtube"><i class="bi bi-youtube"></i></a>
            <a href="https://t.me/muzium_negara" class="telegram"><i class="bi bi-telegram"></i></a>
          </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>National Museum<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <!-- <li><a href="#services">Services</a></li> -->
          <!-- <li><a href="/gallery">Gallery</a></li> -->
          <!-- <li><a href="#team">Team</a></li> -->
          
          <li class="dropdown"><a href="/gallery"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/galleryA">Gallery A: Pre History</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="/galleryB">Gallery B: Malay Kingdoms</a></li>
              <li><a href="/galleryC">Gallery C: Colonial Era</a></li>
              <li><a href="/galleryD">Gallery D: Malaysia Today</a></li>
            </ul>
          </li>
          <li><a href="/booking">Buy Ticket</a></li>
          <li class="dropdown"><a href="{{ route('login') }}"><span>Log In</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
              <li><a href="{{ route('login') }}">Admin</a></li>
              </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <!-- <a href="index.html" class="logo d-flex align-items-center"> -->
            <h4>Opening Hours</h4>
          </a>

          <ul>
            <li>9.00 am to 5.00 pm (last admission is 4.00 pm)</li>
            <li>Opens everyday except first and second day of Eid al-Fitr and<br>first day of Eid al-Adha</li>
            <li>Closed every first Monday of the month</li>
          </ul>
          <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p> -->
          <!-- <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div> -->
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Links</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About us</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/booking">Buy Ticket</a></li>
            <!-- <li><a href="#">Privacy policy</a></li> -->
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Contact Us</h4>
          <p>
            Muzium Negara <br>
            Department of Museums Malaysia<br>
            Jalan Damansara<br>
            50566 Kuala Lumpur<br><br>
            <strong>Phone:</strong> (+60) 03-2267 1111<br>
            <strong>Email:</strong> pr.mn@jmm.gov.my<br>
            <strong>Fax:</strong> (+60) 03-2267 1011<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Social Media</h4>

        <div class="social-links d-flex mt-4">
            <a href="https://www.tiktok.com/@muziumnegarasmi" class="tiktok"><i class="bi bi-tiktok"></i></a>
            <a href="https://www.facebook.com/muziumnegaramalaysia/?_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/muziumnegararasmi/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCphJGO2P9Vz345vbY1A2wew" class="youtube"><i class="bi bi-youtube"></i></a>
            <a href="https://t.me/muzium_negara" class="telegram"><i class="bi bi-telegram"></i></a>
          </div>


        </div>
        
      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>