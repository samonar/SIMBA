<?php 
session_start();
// echo $_SESSION['nama'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>SIMBA</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
  <div class="famie-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li class="active"><a href="about.php">About</a></li>
                  <li><a href="news.php">News</a>
                  <?php 
                    if(isset($_SESSION['nama'])){?>
                    <li><a href="tabungan.php">Tabungan</a></li>
                      <li><a href="logout.php">Log Out</a></li>
                        
                    <?php }else {?>
                      <li><a href="core">Login</a></li>
                        <li><a href="contact.php">Gabung</a></li>
                        
                    <?php }
                    ?>
                  
                </ul>

                <!-- Cart Icon -->
                <!-- <div id="cartIcon">
                  <a href="#">
                    <i class="icon_cart_alt" aria-hidden="true"></i>
                    <span class="cart-quantity">2</span>
                  </a>
                </div> -->
              </div>
              <!-- Navbar End -->
            </div>
          </nav>
          <!-- Search Form -->
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/2.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>About Us</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Famie Benefits Area Start ##### -->
  <section class="famie-benefits-area pb-5">
    <div class="container">
      <div class="row">
        <div class="col-10" style="margin: auto">
          <div class="benefits-thumbnail mb-50">
            <img src="img/bg-img/bsm.jpg" alt="">
          </div>
        </div>
      </div>

      <div class="col-10 row justify-content-center" style="margin: auto; text-align: justify;">
        <p>
          Bank Sampah Malang (BSM) adalah suatu lembaga yang berbadan hukum koperasi yang pendiriannya difasilitasi oleh
          Pemerintah Kota Malang melalui Dinas Kebersihan dan Pertamanan untuk membantu dalam hal pemberdayaan
          masyarakat untuk ikut serta aktif dalam pengolahan sampah dari sumbernya (rumah tangga). Seiring perjalanan
          waktu BSM menjadi mitra Kota Malang dalam hal membina, melatih, mendampingi dalam pengolahan sampah 3R
          (reduce, reuse and recycle) masyarakat Kota Malang yang mandiri dilihat dari biaya operasional yang dapat
          dibiayai sendiri.
          Gerakan BSM yang menggunakan pendekatan ekonomi saat ini sudah dapat merubah mindset tentang sampah yang
          dulunya sumber masalah sekarang telah berubah menjadi sampah adalah rupiah (berkah), merubah perilaku yang
          dulunya masyarakat membuang sampah di tong sampah ataupun di sungai sudah berubah sampah disetor ke BSM untuk
          dijadikan rupiah, dan menjadikan lingkungan yang bersih dan sehat seiring dengan perubahan mindset dan
          perilaku yang sudah menjadi budaya.
          Gerakan BSM yang dimaksud di atas pada umumnya di peruntukkan untuk seluruh Masyarakat secara luas, dan untuk
          Ibu rumah tangga pada khususnya. Salah satu alasannya di karenakan sumber sampah berasal dari rumah tangga
          dimana pengelola rumah tangga tersebut adalah para ibu. Ibulah yang berperan utama dalam pemilahan sampah pada
          tiap-tiap rumah tangga. Begitu pentingnya peran sebagai ibu, semestinya para ibu senantiasa selalu menjaga
          kesehatannya demi keluarga dan juga perannya di masyarakat.
        </p>
      </div>
    </div>
  </section>
  <!-- ##### Famie Benefits Area End ##### -->


  <!-- ##### Footer Area Start ##### -->
  <footer class="footer-area">
    <!-- Main Footer Area -->
    <div class="main-footer bg-img bg-overlay section-padding-80-0" style="background-image: url(img/bg-img/3.jpg);">
      <div class="container">
        <div class="row">

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-80">
              <a href="#" class="foo-logo d-block mb-30"><img src="img/core-img/logo2.png" alt=""></a>
              <p>Bank Sampah Desa untuk mengubah sampah menjadi
                  sesuatu
                  yang berguna di
                  masyarakat, dan bernilai ekonomis</p>
                 
                
                
              <div class="contact-info">
                <p><i class="fa fa-map-pin" aria-hidden="true"></i><span>Kontak dan Kantor Jl. S. Supriyadi No. 38 (Belakang SPBU Sukun) Malang - Jawa Timur</span></p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i><span> SIMBA123@gmail.com</span></p>
                <p><i class="fa fa-phone" aria-hidden="true"></i><span>Telp/ Fax Kantor BSM (0341) 341618 / (+62) 85204444886</span></p>
              </div>
            </div>
          </div>

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-80">
              <h5 class="widget-title">RECENT NEWS</h5>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/4.jpg" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">WA’s largest farming business on the market</a>
                  <div class="post-date">18 Aug 2018</div>
                </div>
              </div>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/5.jpg" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">Beef retail prices hit a record</a>
                  <div class="post-date">18 Aug 2018</div>
                </div>
              </div>

            </div>
          </div>

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-80">
              <h5 class="widget-title">STAY CONNECTED</h5>
              <!-- Footer Social Info -->
              <div class="footer-social-info">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                  <span>Facebook</span>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                  <span>Twitter</span>
                </a>
                <a href="#">
                  <i class="fa fa-pinterest" aria-hidden="true"></i>
                  <span>Pinterest</span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Copywrite Area  -->
    <div class="copywrite-area">
      <div class="container">
        <div class="copywrite-text">
          <div class="row align-items-center">
            <div class="col-md-6">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                  target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ##### Footer Area End ##### -->

  <!-- ##### All Javascript Files ##### -->
  <!-- jquery 2.2.4  -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Owl Carousel js -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Classynav -->
  <script src="js/classynav.js"></script>
  <!-- Wow js -->
  <script src="js/wow.min.js"></script>
  <!-- Sticky js -->
  <script src="js/jquery.sticky.js"></script>
  <!-- Magnific Popup js -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Scrollup js -->
  <script src="js/jquery.scrollup.min.js"></script>
  <!-- Jarallax js -->
  <script src="js/jarallax.min.js"></script>
  <!-- Jarallax Video js -->
  <script src="js/jarallax-video.min.js"></script>
  <!-- Active js -->
  <script src="js/active.js"></script>
</body>

</html>