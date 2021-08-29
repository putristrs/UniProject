<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Administrator | SMP Negeri 1 Banyubiru</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url('asset/login/fonts/material-icon/css/material-design-iconic-font.min.css')?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url('asset/login/css/style.css')?>">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo base_url('asset/login/images/logo.jpg')?>" alt="Foto Sekolah"></figure>
                         <center><strong style="font-size: 20px;">Pendaftaran Ekstrakurikuler</strong></center>
                       <center><strong style="font-size: 20px;">SMP Negeri 1 Banyubiru</strong></center>
                    </div>

                    <div class="signin-form">
                        <center><h2 class="form-title">Login Here</h2></center>
                        <form action="<?php echo base_url('login/aksi_login'); ?>" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <!-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url('asset/login/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('asset/login/js/main.js')?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>