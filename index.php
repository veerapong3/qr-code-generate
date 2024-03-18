<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php
include "functions.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>ระบบสร้าง QR CODE [QR CODE Generator] - โรงเรียนชื่นชมพิทยาคาร สพม.มหาสารคาม</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
  <!-- Place favicon.ico in the root directory -->

  <!-- ======== CSS here ======== -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/lineicons.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

  <!-- ======== preloader start ======== -->
  <div class="preloader">
    <div class="loader">
      <div class="spinner">
        <div class="spinner-container">
          <div class="spinner-rotator">
            <div class="spinner-left">
              <div class="spinner-circle"></div>
            </div>
            <div class="spinner-right">
              <div class="spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- preloader end -->

  <!-- ======== header start ======== -->
  <header class="header">
    <div class="navbar-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo/logo.png" alt="Logo" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul id="nav" class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="page-scroll active" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="#success-qr">Make QR</a>
                  </li>
                  <li class="nav-item">
                    <a href="#dev">Dev</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://documentation.image-charts.com/qr-codes/" target="_blank">Ref</a>
                  </li>
                </ul>
              </div>
              <!-- navbar collapse -->
            </nav>
            <!-- navbar -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- navbar area -->
  </header>
  <!-- ======== header end ======== -->

  <!-- ======== hero-section start ======== -->
  <section id="home" class="hero-section">
    <div class="container">
      <div class="row align-items-center position-relative">
        <div class="col-lg-6">
          <div class="hero-content">
            <h1 class="wow fadeInUp" data-wow-delay=".4s">
              ระบบสร้าง QR CODE แบบไม่มีโฆษณา

            </h1>
            <p class="wow fadeInUp" data-wow-delay=".6s">
              เราให้บริการสร้าง QR Code ด้วย API ของ ImageCharts (ref.https://documentation.image-charts.com/qr-codes/), จะไม่มีโฆษณามาคั่นก่อนเข้าเว็บไซต์.
            </p>

          </div>
        </div>
        <div class="col-lg-6">

          <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
            <img src="assets/img/hero/hero-img.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======== hero-section end ======== -->
  <!-- ======== subscribe-section start ======== -->
  <section id="contact" class="subscribe-section pt-10">
    <div class="container">
      <div class="subscribe-wrapper img-bg" id=success-qr>
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-7">
            <div class="section-title mb-15">
              <h2 class="text-white mb-25">วาง Link / Text / URL </h2>
              <p class="text-white pr-5">
                คลิกที่ Generator, ดาวน์โหลดไฟล์ QR CODE หรือ Save
              </p>
            </div>
          </div>
          
          <div class="col-xl-7 col-lg-5">
            <form class="subscribe-form" name="text_code" method="POST" action="#success-qr">
              <input type="url" name="text_code" placeholder="วาง Link ของคุณที่นี่" oninvalid="this.setCustomValidity('URL ไม่ถูกต้อง กรุณาใส่ https:// ไว้ด้านหน้า')" oninput="setCustomValidity('')" required />
              <button type="submit" class="main-btn btn-hover" name="generate">
                Make QR
              </button>
            </form>
          </div>
         


          <div class="col-xl-4 col-lg-7" style="margin-left: auto" ;>
            <div class="section-title mb-15">
              <?php

              if (isset($_POST['generate'])) {
                $code = isset($_POST['text_code']) ? $_POST['text_code'] : ' ';
                echo "
						<img src='https://image-charts.com/chart?chs=150x150&cht=qr&chl=$code&choe=UTF-8'>
					";
          $qr = "https://image-charts.com/chart?chs=150x150&cht=qr&chl=$code&choe=UTF-8";
              // create download button
              echo '<br>';
              echo '<br>';
              echo '<a href="download-qr-code.php?url=' . encodeURIComponent($qr) . '" class="main-btn-save btn-hover">ดาวน์โหลดไฟล์</a>';
              }
              
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======== subscribe-section end ======== -->


  <!-- ======== footer start ======== -->
  <footer class="footer" id="dev">
    <div class="container">
      <div class="widget-wrapper">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="footer-widget">
              <div class="logo mb-30">
                <a href="index.html">
                  <img src="assets/img/logo/logo-f.png" alt="" />
                </a>
              </div>
              <p class="desc mb-30 text-white">
                Developer by V.Tak
              </p>
              <ul class="socials">
                <li>
                  <a href="jvascript:void(0)">
                    <i class="lni lni-facebook-filled"></i>
                  </a>
                </li>
                <li>
                  <a href="jvascript:void(0)">
                    <i class="lni lni-twitter-filled"></i>
                  </a>
                </li>
                <li>
                  <a href="jvascript:void(0)">
                    <i class="lni lni-instagram-filled"></i>
                  </a>
                </li>
                <li>
                  <a href="jvascript:void(0)">
                    <i class="lni lni-linkedin-original"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-xl-2 col-lg-2 col-md-6">
            <div class="footer-widget">
              <h3>About Us</h3>
              <ul class="links">
                <li><a href="#home">Home</a></li>
                <li><a href="#success-qr">Make QR</a></li>
                
              </ul>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="footer-widget">
              <h3>Features</h3>
              <ul class="links">
                <li><a href="https://developers.google.com/chart/infographics/docs/qr_codes" target="_blank">Google Chart API QR</a></li>
                <li><a href="https://quickchart.io/qr-code-api/" target="_blank">Quickchart.io</a></li>
                
              </ul>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="footer-widget">
              <h3>Go to</h3>
              <ul class="links">
                <li><a href="https://www.ccpk.ac.th">ccpk.ac.th</a></li>
                <li><a href="jvascript:void(0)">Privacy policy</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ======== footer end ======== -->

  <!-- ======== scroll-top ======== -->
  <a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  <!-- ======== JS here ======== -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>