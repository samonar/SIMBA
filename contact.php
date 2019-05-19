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
  <style type="text/css">
    .form-control
    {
      margin-bottom:15px;
    }
  </style>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Top Header Area -->
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
                  <li ><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="news.php">News</a>
                  <?php 
                    if(isset($row['nm_nasabah'])){?>
                      <li><a href="logout.php">Log Out</a></li>
                        
                    <?php }else {?>
                      <li><a href="core">Login</a></li>
                        <li class="active"><a href="contact.php">Gabung</a></li>
                        <!-- <li><a href="tabungan.php">Tabungan</a></li> -->
                        
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
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>Mari Gabung</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Gabung </li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Contact Information Area Start ##### -->
  <section class="contact-info-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
            <p>CONTACT INFO</p>
            <h2><span>The Best Way</span> To Contact Us For The Help</h2>
            <img src="img/core-img/decor2.png" alt="">
          </div>
        </div>
      </div>

      <div class="row">

        <!-- Single Information Area -->
        <div class="col-12 col-md-4">
          <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
            <div class="contact-icon">
              <i class="icon_pin_alt"></i>
            </div>
            <h5>Alamat</h5>
            <h6>Kontak dan Kantor Jl. S. Supriyadi No. 38 (Belakang SPBU Sukun) Malang - Jawa Timur</h6>
          </div>
        </div>

        <!-- Single Information Area -->
        <div class="col-12 col-md-4">
          <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
            <div class="contact-icon">
              <i class="icon_phone"></i>
            </div>
            <h5>Telp/ Fax </h5>
            <h6>(0341) 341618 / (+62) 85204444886</h6>
          </div>
        </div>

        <!-- Single Information Area -->
        <div class="col-12 col-md-4">
          <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
            <div class="contact-icon">
              <i class="icon_mail_alt"></i>
            </div>
            <h5>Email</h5>
            <h6>SIMBA123@gmail.com</h6>
          </div>
        </div>

      </div>
      <div class="c-border"></div>
    </div>
  </section>
  <!-- ##### Contact Information Area End ##### -->

  <!-- ##### Contact Area Start ##### -->
  <section class="contact-area section-padding-100-0">
    <div class="container">
    <div class="section-heading text-center">
            <?php 
              if (isset($_GET['d'])) {?>
                <h4>Daftar Berhasil(menunggu verifikasi)</h4>
              <?php }
            ?>
            
            
    </div>
      <div class="row justify-content-between">
          
        <!-- Contact Content -->
        <div class="col-6 col-lg-5">
          <div class="contact-content mb-100">
            <!-- Section Heading -->
            <div class="section-heading">
            <p>Contact now</p>
              <h2><span>Gabung</span>(Perusahaan)</h2>
              <img src="img/core-img/decor.png" alt="">
            </div>
            <!-- Contact Form Area -->
            <div class="contact-form-area">
              <form action="core/nasabah/daftar_perusahaan" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan" required>
                  </div>
                  <div class="col-lg-6">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                  </div>
                  <div class="col-12">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                  </div>
                  <div class="col-12">
                    <input class="form-control" type="file" accept="image/*" name="image" id="image" required>
                  </div>
                  <div class="col-12">
                    <textarea name="alamat" class="form-control" cols="30" rows="10" placeholder="Alamat" required></textarea>
                  </div>
                  <div class="col-12">
                    <button type="submit"  value="Upload Image" name="submit" class="btn famie-btn">Daftar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Contact nasabah -->
        <div class="col-6 col-lg-5">
          <div class="contact-content mb-100">
            <!-- Section Heading -->
            <div class="section-heading">
              <p>Contact now</p>
              <h2><span>Gabung</span>(Nasabah)</h2>
              <img src="img/core-img/decor.png" alt="">
            </div>
            <!-- Contact Form Area -->
            <div class="contact-form-area">
              <form action="core/nasabah/daftar" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-12">
                    <input class="form-control" type="text" name="nama" placeholder="nama" required>
                  </div>
                  <div class="col-6">
                    <input class="form-control" type="text" name="username" placeholder="username " required>
                  </div>
                  <div class="col-6">
                    <input class="form-control" type="password" name="password" placeholder="password " required>
                  </div>
                  <div class="col-12">
                    <select  name="jk" id="jk" class="form-control" placeholder="" required>
                        <option disabled selected value="l">--jenis kelamin--</option>
                        <option value="l">laki-laki</option>
                        <option value="p">perempuan</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <input type="number" class="form-control" name="no_hp" placeholder="No Hp" required>
                  </div>
                  <div class="col-12">
                    <textarea name="alamat" class="form-control" cols="30" rows="10" placeholder="Alamat" required></textarea>
                  </div>
                  <div class="col-12">
                    <input class="form-control" type="file" accept="image/*" name="image" id="image">
                  </div>
                  <div class="col-12">
                    <button type="submit"  value="Upload Image" name="submit" class="btn famie-btn">Daftar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Contact Area End ##### -->

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