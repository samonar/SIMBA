<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login SIMBA</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?=base_url('assets/login_adm/bootstrap/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/login_adm/font-awesome/css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/login_adm/css/form-elements.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/login_adm/css/style.css');?>">

        <!-- Favicon and touch icons -->
        <!-- <link rel="shortcut icon" href="<?=base_url('assets/login_adm/ico/favicon.png');?>"> -->
        <link rel="shortcut icon" sizes="16x16" href="<?php base_url('assets/dist/img/sma1.jpg');?>">
        <link rel="apple-touch-icon-precomposed" href="<?=base_url('assets/login_adm/ico/apple-touch-icon-144-precomposed.png');?>" sizes="144x144">
        <link rel="apple-touch-icon-precomposed" href="<?=base_url('assets/login_adm/ico/apple-touch-icon-114-precomposed.png');?>" sizes="114x114">
        <link rel="apple-touch-icon-precomposed" href="<?=base_url('assets/login_adm/ico/apple-touch-icon-72-precomposed.png');?>" sizes="72x72">
        <link rel="apple-touch-icon-precomposed" href="<?=base_url('assets/login_adm/ico/apple-touch-icon-57-precomposed.png');?>">

    </head>

    <body background="http://localhost/simba/img/bg-img/2.jpg">

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Login SIMBA</h3>
                                    <p>Masukkan username dan password</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="<?php echo base_url('login/aksi_login');?>" method="post" class="login-form">
                                    <?php echo $this->session->flashdata('message');?>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="username" placeholder="Username" class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-lg">Log In!</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <!-- Javascript -->
        <script src="<?=base_url('assets/login_adm/js/jquery-1.11.1.min.js');?>"></script>
        <script src="<?=base_url('assets/login_adm/bootstrap/js/bootstrap.min.js');?>"></script>
        <script src="<?=base_url('assets/login_adm/js/jquery.backstretch.min.js');?>"></script>
        <script src="<?=base_url('assets/login_adm/js/scripts.js');?>"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
