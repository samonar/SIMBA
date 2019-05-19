<?php 
session_start();
$iki=$_SESSION['id'];
include 'db_connect.php';

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/adminlte.min.css"> 

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
                    <li><a href="about.php">About</a></li>
                    <li><a href="news.php">News</a>
                    
                    <?php 
                    if(isset($row['nm_nasabah'])){?>
                        <li><a href="core">Login</a></li>
                    <?php }else {?>
                        <li class="active"><a href="tabungan.php">Tabungan</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                        
                    <?php }
                    ?>
                    
                    </ul>
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
                <h2>Tabungan</h2>
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
            <li class="breadcrumb-item active" aria-current="page">Tabungan</li>
            </ol>
            <?php 
            if (isset($_GET['m'])) { ?>
                <h4 style=" text-align:center; ">input data berhasil</h4>
            <?php }elseif(isset($_GET['p'])){?>
                <h4 style=" text-align:center; ">Pengajuan Ambil Berhasil</h4>
            <?php }
            ?>
            
        </nav>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Famie Benefits Area Start ##### -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">

            <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="img/icon/murid.png" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"></h3>

                <p class="text-muted text-center">Nasabah</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                    <?php 
                    $sql = "SELECT * FROM tb_nasabah INNER JOIN tb_tabungan ON
                    tb_nasabah.id_nasabah=tb_tabungan.id_nasabah WHERE  tb_nasabah.id_nasabah=$iki
                    ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {?>
                    <b>Alamat&emsp;&ensp;:</b> <a class="float-right"><?php echo $row['alamat'] ?></a>
                    </li>
                    <li class="list-group-item">
                    <b>No HP&emsp;&emsp;:</b> <a class="float-right"><?php echo $row['hp'] ?></a>
                    </li>
                    <li class="list-group-item">
                    <b>Tabungan :</b> <a class="float-right"><?php echo $row['jumlah'] ?></a>
                     
                    
                    </li>
                </ul>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active show" href="#activity" data-toggle="tab">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Tarik Tunai</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Tukar Saldo</a></li> -->
                </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="activity">
                    <!-- Post -->
                    <div class="card-body">
							
						<!-- isi konten web -->
							<form action="http://localhost/simba/core/nasabah/updateNasabah" method="post" class="col-md-6 offset-md-3">
                            <div class="form-group row">
                                <label class="col-md-4 ">Nama Nasabah </label>
                                <div class="col-md-7">
                                    <input type="text" name="nama_nasabah" id="nama_nasabah" class="form-control" placeholder="" value="<?php echo $row['nm_nasabah'] ?>" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4">Jenis Kelamin</label>
                                <div class="col-md-4">
                                    <select name="jk" id="jk" class="form-control" placeholder="" required="">
                                        <?php
                                        if ($row['jk']=='l') {?>
                                            <option selected="" value="l">laki-laki</option>
                                            <option value="p">perempuan</option>
                                        <?php } else {?>
                                            <option  value="l">laki-laki</option>
                                            <option selected="" value="p">perempuan</option>
                                        <?php }
                                        
                                        ?> 
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4">No HP</label>
                                <div class="col-md-7">
                                    <input type="number" name="no_hp" id="no_hp" class="form-control" value="<?php echo $row['hp'] ?>" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4">alamat</label>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="alamat" id="alamat" rows="2" required=""><?php echo $row['alamat'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4">username</label>
                                <div class="col-md-7">
                                    <input type=" text" class="form-control" name="username" id="username" rows="2" value="<?php echo $row['username'] ?>" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4">password</label>
                                <div class="col-md-7">
                                    <input type="password" class="form-control" name="password" id="password" rows="2" value="<?php echo $row['password'] ?>" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4">Bukti</label>
                                <div class="col-md-7">
                                    <img src="http://localhost/simba/img/bg-img/<?php echo $row['img'] ?>" alt="" style="width: 130%;">
                                </div>
                            </div>
            <input type="hidden" name="id_nasabah" value="<?php echo $row['id_nasabah'] ?>">
    
        <button type="cancel" class="btn btn-default ">
            <a href="">Cancel</a>
        </button>
        <button type="submit" class="btn btn-info float-right"> Edit </button>
</form>							
							
						</div>
                    <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    
                        <form action="http://localhost/simba/core/nasabah/pengajuan" method="post" class="col-md-6 offset-md-3">
                            <div class="form-group row">
                                <label class="col-md-4">Nominal</label>
                                <div class="col-md-7">
                                    <input type="number" class="form-control" name="nominal" rows="2" value="" required="">
                                </div>
                            </div>
                            <input type="hidden" name="id_nasabah" value="<?php echo $row['id_nasabah'] ?>">
                            <button type="cancel" class="btn btn-default ">
                                <a href="">Cancel</a>
                            </button>
                            <button type="submit" class="btn btn-info float-right"> submit </button>
                        </form>
                    
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                        <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="inputName2" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                        <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                            <label>
                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                        </div>
                    </form>
                    <?php }
                    }
                    ?>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- ##### Famie Benefits Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer bg-img bg-overlay section-padding-80-0" style="background-image: url(img/bg-img/3.jpg); margin-left:auto;">
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
    <script src="plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
        });
    </script>
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/active.js"></script>
    <!--
    <script src="js/popper.min.js"></script>
    
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/classynav.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.scrollup.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/jarallax-video.min.js"></script>
     -->
</body>

</html>